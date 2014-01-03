<?php
error_reporting(0);
require("./init.php");
$opt1 = mysql_query("CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `posted` varchar(255) NOT NULL DEFAULT '',
  `changed` varchar(255) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `task` int(10) NOT NULL DEFAULT '0',
  `user` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
)");
// 0.7
mysql_query("ALTER TABLE `files` CHANGE `type` `type` VARCHAR( 255 )");
//change to new winter template if unmaintained frost template is selected
if ($settings["template"] == "frost") {
    mysql_query("UPDATE `settings` SET `template` = 'winter'");
}
//Individual
mysql_query("ALTER TABLE `tasks` ADD `priority` VARCHAR( 50 ) NOT NULL");
mysql_query("ALTER TABLE `tasklist` ADD `priority` VARCHAR( 50 ) NOT NULL");
mysql_query("ALTER TABLE `projekte` ADD `priority` VARCHAR( 50 ) NOT NULL");
// version independent
// clear templates cache
$handle = opendir($template->compile_dir);
while (false !== ($file = readdir($handle))) {
    if ($file != "." and $file != "..") {
        unlink(CL_ROOT . "/" . $template->compile_dir . "/" . $file);
    }
}
// optimize tables
$opt1 = mysql_query("OPTIMIZE TABLE `files`");
$opt2 = mysql_query("OPTIMIZE TABLE `files_attached`");
$opt3 = mysql_query("OPTIMIZE TABLE `log`");
$opt4 = mysql_query("OPTIMIZE TABLE `messages`");
$opt5 = mysql_query("OPTIMIZE TABLE `milestones`");
$opt6 = mysql_query("OPTIMIZE TABLE `milestones_assigned`");
$opt7 = mysql_query("OPTIMIZE TABLE `projectfolders`");
$opt8 = mysql_query("OPTIMIZE TABLE `projekte`");
$opt9 = mysql_query("OPTIMIZE TABLE `projekte_assigned`");
$opt10 = mysql_query("OPTIMIZE TABLE `roles`");
$opt11 = mysql_query("OPTIMIZE TABLE `roles_assigned`");
$opt12 = mysql_query("OPTIMIZE TABLE `settings`");
$opt13 = mysql_query("OPTIMIZE TABLE `tasklist`");
$opt14 = mysql_query("OPTIMIZE TABLE `tasks`");
$opt15 = mysql_query("OPTIMIZE TABLE `tasks_assigned`");
$opt16 = mysql_query("OPTIMIZE TABLE `timetracker`");
$opt17 = mysql_query("OPTIMIZE TABLE `user`");

$template->display("update.tpl");

?>