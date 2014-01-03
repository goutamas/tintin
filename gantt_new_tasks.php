<?php
include("init.php");
$colors = array("E01B4C", "1B77E0", "E0B91B", "981BE0", "53E01B", "E01B77", "1BCCE0", "E0491B", "461BE0", "C6E01B", "D61BE0", "1BE077", "D6AD33", "00CC99", "3366FF", "FF6060", "663300", "FF66FF", "5C5C33", "587058", "339933", "A366A3", "335C85", "3366CC", "71A9A9", "0066CC", "4141A0", "696985", "CC3399", "666699", "9900FF", "853385", "990099", "6666A3", "918891", "3399FF", "993333", "CC3300", "FF6600", "FF4D4D", "999966");
// Get projects of the current user
$id = $_GET["id"];
$events_array = array();
$objtask = new task();
$mytasks = $objtask->getProjectTasks($id);

$myi = 0;
if (!empty($mytasks)) {
    foreach($mytasks as $atask) {
        $thepro = array("title" => $atask["title"], "date_start" => date("m/d/Y", $atask["start"]), "date_end" => date("m/d/Y", $atask["end"]), "color" => $colors[$myi], "ID" => $atask["project"], "taskId" => $atask["ID"], "taskText" => str_replace("<br />", "\n", $atask["text"]));

        array_push($events_array, $thepro);

        $myi = $myi + 1;
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<script language="javascript" src="jsgantt.js"></script>
</head>
<body>
<form name = "scaler" id = "scaler" action = "#">
<select name = "scalesel" id = "scalesel" onchange = "g.setFormat(this.value);this.blur();";>
<option value = "day" selected>Days</option>
<option value = "week">Weeks</option>
<option value = "quarter">Quarters</option>
</select>
</form>
<div style="position:relative" class="gantt" id="GanttChartDIV"></div>
<script type="text/javascript">
var g = new JSGantt.GanttChart('g',document.getElementById('GanttChartDIV'), 'day');

	g.setShowRes(0);
	g.setShowDur(0);
	g.setShowComp(0);
	g.setCaptionType('Caption');
	g.setShowStartDate(0);
	g.setShowEndDate(0);

if( g ) {
	<?php
$lastid = 0;
foreach ($events_array as $event) {
    echo "g.AddTaskItem(new JSGantt.TaskItem($event[taskId],   '$event[title]',    '$event[date_start]', '$event[date_end]', '$event[color]', 'managetask.php?action=showtask&id=$event[ID]&tid=$event[taskId]', 0, '', 0, 0, 0, 1,0,'$event[title]'));";
}

?>
	g.Draw();
	//g.DrawDependencies();
}
</script>

<script type = "text/javascript">
	parent.stopWait('progress');
</script>
</body>
</html>