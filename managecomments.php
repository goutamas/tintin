<?php
require("./init.php");
if (!isset($_SESSION["userid"])) {
    $template->assign("loginerror", 0);
    $template->display("login.tpl");
    die();
}
$commentobj = new taskComment();
$action = getArrayVal($_GET, "action");
$id = getArrayVal($_GET, "id");
$tid = getArrayVal($_GET, "tid");
$text = getArrayVal($_POST, "theText");

if ($action == "showproject") {
    $comments = $commentobj->getCommentsByTask($tid);
    $template->assign("comments", $comments);
    $template->assign("countComments", count($comments));
    $template->display("showcomments.tpl");
}

if (!$userpermissions["tasks"]["edit"]) {
    $errtxt = $langfile["nopermission"];
    $noperm = $langfile["accessdenied"];
    $template->assign("errortext", "<h2>$errtxt</h2><br>$noperm");
    $template->display("error.tpl");
    die();
}

if ($action == "add") {
    $tid = getArrayVal($_POST, "theTask");

    if ($commentobj->addComment($tid, $userid, $text)) {
        $comments = $commentobj->getCommentsByTask($tid);
        $template->assign("comments", $comments);
        $template->assign("countComments", count($comments));
        $template->display("showcomments.tpl");
    }

} elseif ($action == "del") {
    if ($commentobj->deleteComment($id)) {
    	echo "ok";
	}
}

?>