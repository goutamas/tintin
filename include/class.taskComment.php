<?php
class taskComment {
    private $mylog;

    /*
    * Constructor
    * Initialize the event log
    */
    function __construct()
    {
        $this->mylog = new mylog;
    }

    /*
     * Add a comment
     *
     * @param int $task ID of the associated task
     * @param string $text Comment text
     * @param int $user ID of  the associated user
     * @return bool
     */
    function addComment($task, $user, $text)
    {
        $text = mysql_real_escape_string($text);
        $task = (int) $task;
        $user = (int) $user;

        $data = time();

        $ins = mysql_query("INSERT INTO comments (`task`,`user`,`text`,`posted`) VALUES ($task, $user, '$text','$data')");

        if ($ins) {
            $insid = mysql_insert_id();
            $this->mylog->add($insid, 'comment', 1, $task);
            return $insid;
        } else {
            return false;
        }
    }

    /*
     * Delete a comment
     *
     * @param int $id Comment ID
     * @return bool
     */
    function deleteComment($id)
    {
        $id = (int) $id;

        $sel = mysql_query("SELECT task, user FROM comments WHERE ID = $id");
        $del = mysql_query("DELETE FROM comments WHERE ID = $id LIMIT 1");
        if ($del) {
            $sel1 = mysql_fetch_array($sel);
            $task = $sel1[0];
            $user = $sel1[1];
            $this->mylog->add($id, 'tasklist', 3, $task);
            return true;
        } else {
            return false;
        }
    }

    /*
     * Return a commentlist
     *
     * @param int $id Task ID
     * @return array $commentlist Task comments
     */
    function getCommentsByTask($id)
    {
        $id = (int) $id;

        $sel = mysql_query("SELECT id FROM comments WHERE task = $id ORDER BY posted");
        $comments = array();
        while ($comment = mysql_fetch_array($sel, MYSQL_ASSOC)) {
            array_push($comments, $this->getComment($comment["id"]));
        }

        if (!empty($comments)) {
            return $comments;
        } else {
            return false;
        }
    }

    /**
     * Return a comment
     *
     * @param int $id CommentID
     * @return array $comment Comment details
     */
    function getComment($id)
    {
        $id = (int) $id;

        $sel = mysql_query("SELECT * FROM comments WHERE ID = $id");
        $comment = mysql_fetch_array($sel, MYSQL_ASSOC);
        if (!empty($comment)) {
            $sel2 = mysql_query("SELECT name FROM user WHERE id = $comment[user]");
            $theuser = mysql_fetch_array($sel2, MYSQL_ASSOC);
            $comment["username"] = $theuser["name"];

            $posted = date(CL_DATEFORMAT . " H:i", $comment["posted"]);
            $comment["posted"] = $posted;

            if (!empty($comment["changed"])) {
                $comment["changed"] = date(CL_DATEFORMAT . " H:i", $comment["changed"]);
            } else {
                $comment["changed"] = "";
            }

            $comment["username"] = stripslashes($comment["username"]);
            $comment["text"] = stripslashes($comment["text"]);

            return $comment;
        } else {
            return false;
        }
    }
}

?>