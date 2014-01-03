<?php
include("init.php");
$colors = array("E01B4C", "1B77E0", "E0B91B", "981BE0", "53E01B", "E01B77", "1BCCE0", "E0491B", "461BE0", "C6E01B", "D61BE0", "1BE077", "D6AD33", "00CC99", "3366FF", "FF6060", "663300", "FF66FF", "5C5C33", "587058", "339933", "A366A3", "335C85", "3366CC", "71A9A9", "0066CC", "4141A0", "696985", "CC3399", "666699", "9900FF", "853385", "990099", "6666A3", "918891", "3399FF", "993333", "CC3300", "FF6600", "FF4D4D", "999966");
// Get projects of the current user
$project = new project();
$myprojects = $project->getMyProjects($userid);
$events_array = array();
$objtask = new task();

$myi = 0;
$lastend = 0;
if (!empty($myprojects)) {
    foreach($myprojects as $aproject) {
        $mytasks = $objtask->getAllMyProjectTasks($aproject["ID"], 10, $userid);

        if ($aproject["end"] > $lastend) {
            $lastend = $aproject["end"];
        }

		if ($aproject["end"] > 0 && is_array($mytasks)) {
			$thepro = array("name" => $aproject["name"], "date_start" => date("m/d/Y", $aproject["start"]), "date_end" => date("m/d/Y", $aproject["end"]), "color" => $colors[$myi], "ID" => $aproject["ID"], "done" => $aproject["done"], "tasks" => $mytasks);
			array_push($events_array, $thepro);

			$myi = $myi + 1;
		}
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

			if (g) {
				<?php
					$lastid = 0;
					foreach ($events_array as $event) {
						echo "g.AddTaskItem(new JSGantt.TaskItem($event[ID], '$event[name]', '$event[date_start]', '$event[date_end]', '$event[color]', 'manageproject.php?action=showproject&id=$event[ID]', 0, '', $event[done], 1, 0, 1, 0, '$event[name]'));";

						if (!empty($event["tasks"])) {
							$taski = 0;
							foreach($event["tasks"] as $task) {
								$startstr = date("m/d/Y", $task["start"]);
								$endstr = date("m/d/Y", $task["end"]);
								echo "g.AddTaskItem(new JSGantt.TaskItem($task[ID], '$task[title]', '$startstr', '$endstr', '$colors[$taski]', 'managetask.php?action=showtask&id=$task[project]&tid=$task[ID]', 0, '', 0, 0, $task[project], 1, 0, '$task[title]'));";
								$taski = $taski + 1;
								$lastid = $task[ID];
							}
						}
					}
				?>
				g.Draw();
			}
		</script>

		<script type = "text/javascript">
			parent.stopWait('progress');
		</script>
	</body>
</html>