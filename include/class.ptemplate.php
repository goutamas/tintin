<?php
/**
 * Provides methods to manage project templates
 *
 * @author Open Dynamics <info@o-dyn.de>
 * @name ptemplate
 * @version 0.1
 * @package Collabtive 0.7
 * @link http://www.o-dyn.de
 * @license 
 */
class ptemplate extends project {
	/**
     * Function needs to be called after project::add to convert a project into a templatearray
	 * @param int $id Template ID
	 * @return bool
	 */
    function setTemplate($id)
    {
        $id = (int) $id;

        $upd = mysql_query("UPDATE projekte SET status = 2 WHERE ID = $id");

        if ($upd) {
            return true;
        } else {
            return false;
        }
    }

	/**
     * Get all project templates
	 * @return array $templates All available templates
	 */
    function getTemplates()
    {
        $sel = mysql_query("SELECT ID FROM projekte WHERE status = 2");
        $templates = array();

        while ($template = mysql_fetch_array($sel)) {
        	$theTemplate = $this->getProject($template["ID"]);
        	$theTemplate["members"] = $this->getProjectMembers($template["ID"],10000,false);
            array_push($templates, $theTemplate);
        }

        if (!empty($templates)) {
            return $templates;
        } else {
            return false;
        }
    }

    /**
     * Copy a project
     *
     * @param int $id ID of project to copy
	 * @param string $desc Project description given by the user
	 * @param string $newName Project name given by the user
	 * @param string $newEnd Project end date given by the user
	 * @param string $priority Project priority given by the user
	 * @param int $isCopy If a template should be copied, this will equal 1, else 0. Info is required for e-mail notifications
     * @return int $insid New project's ID
     */
    function addFromTemplate($id, $desc, $newName, $newEnd, $priority, $isCopy = 0)
    {
        $newName = mysql_real_escape_string($newName);
        $desc = mysql_real_escape_string($desc);
        $priority = mysql_real_escape_string($priority);
        $newEnd = strtotime($newEnd);
        // copy project
        $q = mysql_query("INSERT INTO projekte (`name`, `desc`, `end`, `start`, `status`, `budget`, `priority`) SELECT `name`, `desc`, `end`, `start`, `status`, `budget`, `priority` FROM projekte WHERE ID = " . (int)$id);

        $insid = mysql_insert_id();

        $milesobj = new milestone();
        $objtasklist = new tasklist();
        $taskobj = new task();
		$usr = new user();
		$set = new settings();
		$settings = $set->getSettings();
        $now = time();
        $userid = $_SESSION["userid"];

        if ($q)
		{
            $newProject = $this->getProject($insid);
            $theDiff = $newEnd - $newProject["end"];
			if ($desc == "")
			{
				$desc = $newProject["desc"];
 			}

            mysql_query("UPDATE projekte SET `name` = '$newName', `desc` = '$desc', `end` = '$newEnd', `priority` = '$priority', `status` = 1 WHERE ID = " . $insid . " LIMIT 1");
            // now copy the milestones
            $miles = $milesobj->getAllProjectMilestones($id);
            if (!empty($miles))
			{
                // go through the milestones
                foreach ($miles as $ms) {
                    // copy milestone
                    $newtime = $ms["end"] + $theDiff;
                    $newtime = date("d.m.Y", $newtime);
                    $msid = $milesobj->add($insid, $ms["name"], $ms["desc"], $newtime, 1);

                    // get all tasklists for milestone
                    $qb = mysql_query("SELECT * FROM tasklist WHERE project = $id AND milestone = $ms[ID]");
                    if ($qb) {
                        // go through the tasklists
                        while ($tl = mysql_fetch_array($qb)) {
                            // copy tasklist
                            $tlid = $objtasklist->add_liste($insid, $tl["name"], $tl["desc"], $tl["priority"], 0, $msid);
                            // get tasks for the tasklist
                            $tasks = $objtasklist->getTasksFromList($tl["ID"]);
                            if (!empty($tasks)) {
                                foreach ($tasks as $task) {
                                    $newtime = $task["end"] + $theDiff;
                                    $newtime = date("d.m.Y", $newtime);
                                    $taskid = $taskobj->add($newtime, $task["title"], $task["text"], $tlid, $insid, $task["priority"]);
									foreach($task["users"] as $taskuser)
									{
										$taskobj->assign($taskid, $taskuser["ID"]);
										if (!$isCopy && $settings["mailnotify"])
										{
											$langfile = readLangfile($settings["locale"]);
											$user = $usr->getProfile($taskuser["ID"]);
											if (!empty($user["email"]))
											{
												// send email
												$url = getMyUrl();
												$themail = new emailer($settings);
												$themail->send_mail($user["email"], $langfile["taskassignedsubject"], $langfile["hello"] . ",<br /><br/>" . $langfile["taskassignedtext"] . " <a href = \"" . $url . "managetask.php?action=showtask&id=$insid&tid=$taskid\">$task[title]</a>");
											}
										}
									}
								} // tasks END
                            }
                        } // tasklists END
                    }
                }
            }
            // get all tasklists and tasks that do not belong to a milestone
            $qb = mysql_query("SELECT * FROM tasklist WHERE project = $id AND milestone = 0");
            if ($qb) {
                // go through the tasklists
                while ($tl = mysql_fetch_array($qb)) {
                    // copy tasklist
                    $tlid = $objtasklist->add_liste($insid, $tl["name"], $tl["desc"], $tl["priority"], 0, 0);
                    // get tasks for the tasklist
                    $tasks = $objtasklist->getTasksFromList($tl["ID"]);
                    if (!empty($tasks)) {
                        foreach ($tasks as $task) {
                            $newtime = $task["end"] + $theDiff;
                            $newtime = date("d.m.Y", $newtime);
                            $taskid = $taskobj->add($newtime, $task["title"], $task["text"], $tlid, $insid, $task["priority"]);
                        	foreach($task["users"] as $taskuser)
							{
								$taskobj->assign($taskid, $taskuser["ID"]);
								if (!$isCopy && $settings["mailnotify"])
								{
									$langfile = readLangfile($settings["locale"]);
									$user = $usr->getProfile($taskuser["ID"]);
									if (!empty($user["email"]))
									{
										// send email
										$url = getMyUrl();
										$themail = new emailer($settings);
										$themail->send_mail($user["email"], $langfile["taskassignedsubject"], $langfile["hello"] . ",<br /><br/>" . $langfile["taskassignedtext"] . " <a href = \"" . $url . "managetask.php?action=showtask&id=$insid&tid=$taskid\">$task[title]</a>");
									}
								}
							}
                        } // tasks END
                    }
                } // tasklists END
            }

            mkdir(CL_ROOT . "/files/" . CL_CONFIG . "/$insid/", 0777);
            return $insid;
        } else {
            return false;
        }
    }
}
?>