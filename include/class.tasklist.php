<?php
/*
 * This class provides methods to realize tasklists
 *
 * @author Open Dynamics <info@o-dyn.de>
 * @package Collabtive
 * @name tasklist
 * @version 0.4.5
 * @link http://www.o-dyn.de
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License v3 or later
 */
class tasklist
{
    public $mylog;

    /*
    * Constructor
    * Initialize the event log
    */
    function __construct()
    {
        $this->mylog = new mylog;
    }

    /*
     * Edit a tasklist
     *
     * @param int $project ID of the associated project
     * @param string $name Name of the tasklist
     * @param string $desc Description of the tasklist
	 * @param string $priority Priority of the task list
     * @param int $access Access level (0 = public)
     * @param int $milestone ID of the associated milestone (0 = no association)
     * @return bool
     */
    function add_liste($project, $name, $desc, $priority, $access = 0, $milestone = 0)
    {
        $name = mysql_real_escape_string($name);
        $desc = mysql_real_escape_string($desc);
        $priority = mysql_real_escape_string($priority);
        $project = (int) $project;
        $access = (int) $access;
        $milestone = (int) $milestone;

        $start = time();

        $ins = mysql_query("INSERT INTO tasklist (`project`,`name`,`desc`,`start`,`status`,`access`,`milestone`,`priority`) VALUES ($project,'$name','$desc','$start',1,$access,$milestone,'$priority')");

        if ($ins)
        {
            $insid = mysql_insert_id();
            $this->mylog->add($name, 'tasklist', 1, $project);
            return $insid;
        }
        else
        {
            return false;
        }
    }

    /*
     * Edit a tasklist
     *
     * @param int $id Tasklist ID
     * @param string $name Tasklist name
     * @param string $desc Tasklist description
	 * @param string $priority Priority of the task list
     * @param int $milestone ID of the associated milestone
     * @return bool
     */
    function edit_liste($id, $name, $desc, $priority, $milestone)
    {
        $name = mysql_real_escape_string($name);
        $desc = mysql_real_escape_string($desc);
        $priority = mysql_real_escape_string($priority);
        $id = (int) $id;
        $milestone = (int) $milestone;

        $upd = mysql_query("UPDATE tasklist SET `name`='$name', `desc`='$desc', `milestone`=$milestone, `priority`='$priority' WHERE ID = $id");
        if ($upd)
        {
            $sel = mysql_query("SELECT project FROM tasklist WHERE ID = $id");
            $proj = mysql_fetch_array($sel);
            $proj = $proj[0];

            $this->mylog->add($name, 'tasklist', 2, $proj);
            return true;
        }
        else
        {
            return false;
        }
    }

    /*
     * Delete a tasklist
     *
     * @param int $id Tasklist ID
     * @return bool
     */
    function del_liste($id)
    {
        $id = (int) $id;

        $sel = mysql_query("SELECT project, name FROM tasklist WHERE ID = $id");
        $del = mysql_query("DELETE FROM tasklist WHERE ID = $id LIMIT 1");
        if ($del)
        {
            $tasks1 = $this->getTasksFromList($id);
            $taskobj = new task();
            if (!empty($tasks1))
            {
                foreach($tasks1 as $task)
                {
                    $taskobj->del($task["ID"]);
                }
            }
            $tasks2 = $this->getTasksFromList($id, 0);
            if (!empty($tasks2))
            {
                foreach($tasks2 as $task)
                {
                    $taskobj->del($task["ID"]);
                }
            }
            $sel1 = mysql_fetch_array($sel);
            $proj = $sel1[0];
            $name = $sel1[1];
            $this->mylog->add($name, 'tasklist', 3, $proj);
            return true;
        }
        else
        {
            return false;
        }
    }

    /*
     * Reactivate / open a tasklist
     *
     * @param int $id Tasklist ID
     * @return bool
     */
    function open_liste($id)
    {
        $id = (int) $id;

        $upd = mysql_query("UPDATE tasklist SET status = 1 WHERE ID = $id");

        if ($upd)
        {
            $nam = mysql_query("SELECT project, name FROM tasklist WHERE ID = $id");
            $nam = mysql_fetch_row($nam);
            $project = $nam[0];
            $name = $nam[1];

            $this->mylog->add($name, 'tasklist', 4, $project);
            return true;
        }
        else
        {
            return false;
        }
    }

    /*
     * Finish / close a tasklist
     *
     * @param int $id Tasklist ID
     * @return bool
     */
    function close_liste($id)
    {
        $id = (int) $id;

        $upd = mysql_query("UPDATE tasklist SET status = 0 WHERE ID = $id");
        // Close assigned milestone too, if no other open tasklists are assigned to it
        $sql = mysql_query("SELECT milestone FROM tasklist WHERE ID = $id");
        $milestone = mysql_fetch_row($sql);
        if ($milestone[0] > 0)
        {
            $sql2 = mysql_query("SELECT count(*) FROM tasklist WHERE milestone = $milestone[0] AND status = 1");
            $cou = mysql_fetch_row($sql2);

            if ($cou[0] == 0)
            {
                $miles = new milestone();
                $miles->close($milestone[0]);
            }
        }
        $tasks = $this->getTasksFromList($id);
        if (!empty($tasks))
        {
            $taskobj = new task();
            foreach($tasks as $task)
            {
                $taskobj->close($task["ID"]);
            }
        }
        // Log entry
        if ($upd)
        {
            $nam = mysql_query("SELECT project, name FROM tasklist WHERE ID = $id");
            $nam = mysql_fetch_row($nam);
            $project = $nam[0];
            $name = $nam[1];

            $this->mylog->add($name, 'tasklist', 5, $project);
            return true;
        }
        else
        {
            return false;
        }
    }

    /*
     * Return all tasklists (including its open tasks) associated with a given project
     *
     * @param int $project Project ID
     * @param int $status Tasklist status (0 = Finished, 1 = Active)
     * @return array $tasklists Details of the tasklists
     */
    function getProjectTasklists($project, $status = 1)
    {
        $project = (int) $project;
        $status = (int) $status;

        $sel = mysql_query("SELECT * FROM tasklist WHERE project = $project AND status=$status");
        $tasklists = array();

        $taskobj = new task();
        while ($list = mysql_fetch_array($sel))
        {
            $sel2 = mysql_query("SELECT ID FROM tasks WHERE liste = $list[ID] AND status=1 ORDER BY `end` ASC");
            $list['tasks'] = array();
            while ($tasks = mysql_fetch_array($sel2))
            {
                array_push($list['tasks'], $taskobj->getTask($tasks["ID"]));
            }

            $sel3 = mysql_query("SELECT ID FROM tasks WHERE liste = $list[ID] AND status=0 ORDER BY `end` ASC");
            $list['oldtasks'] = array();
            while ($oldtasks = mysql_fetch_array($sel3))
            {
                array_push($list['oldtasks'], $taskobj->getTask($oldtasks["ID"]));
            }

            array_push($tasklists, $list);
        }

        if (!empty($tasklists))
        {
            return $tasklists;
        }
        else
        {
            return false;
        }
    }

    /*
     * Return a tasklist
     *
     * @param int $id Taskist ID
     * @return array $tasklist Tasklist details
     */
    function getTasklist($id)
    {
        $id = (int) $id;

        $sel = mysql_query("SELECT * FROM tasklist WHERE ID = $id");
        $tasklist = mysql_fetch_array($sel);

        if (!empty($tasklist))
        {
            $startstring = date("d.m.y", $tasklist["start"]);
            $tasklist["startstring"] = $startstring;
            $tasklist["name"] = stripslashes($tasklist["name"]);
            $tasklist["desc"] = stripslashes($tasklist["desc"]);

            return $tasklist;
        }
        else
        {
            return false;
        }
    }

    /*
     * Return all open or all finished tasks of a given tasklist
     *
     * @param int $id Tasklist ID
     * @param int $status Status of the tasks (0 = finished, 1 = open)
     * @return array $tasks Details of the tasks
     */
    function getTasksFromList($id, $status = 1)
    {
        $id = (int) $id;
        $status = (int) $status;

        $taskobj = new task();

        $sel = mysql_query("SELECT ID FROM tasks WHERE `liste` = $id AND `status` = $status ORDER BY ID DESC");
        $tasks = array();
        while ($task = mysql_fetch_array($sel))
        {
            array_push($tasks, $taskobj->getTask($task["ID"]));
        }

        if (!empty($tasks))
        {
            return $tasks;
        }
        else
        {
            return false;
        }
    }
}

?>