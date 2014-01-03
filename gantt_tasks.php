<?php
include("init.php");

function getRandomColorHex($max_r = 255, $max_g = 255, $max_b = 255)
{
    if ($max_r > 255) { $max_r = 255; }
    if ($max_g > 255) { $max_g = 255; }
    if ($max_b > 255) { $max_b = 255; }
    if ($max_r < 0) { $max_r = 0; }
    if ($max_g < 0) { $max_g = 0; }
    if ($max_b < 0) { $max_b = 0; }
    return dechex(rand(15, 255)) . dechex(rand(15, 200)) . dechex(rand(15, 255));
}
$colors = array("0099FF", "990000", "365A76", "33CC33", "773366", "224455", "9999FF", "824E48", "D6AD33", "00CC99", "3366FF", "FF6060", "663300", "FF66FF", "5C5C33", "587058", "339933", "A366A3", "335C85", "3366CC", "71A9A9", "0066CC", "4141A0", "696985", "CC3399", "666699", "9900FF", "853385", "990099", "6666A3", "918891", "3399FF", "944D70", "993333", "FF9966", "CC3300", "647585", "99CC00", "FF6600", "FF4D4D", "999966");

// Get tasks of the current project
$id = $_GET["id"];
$objtask = new task();
$mytasks = $objtask->getProjectTasks($id);

// image paths
$image_left = './gantt_img/gantt_left.gif';
$image_middle = './gantt_img/gantt_middle.gif';
$image_right = './gantt_img/gantt_right.gif';

// left-right-image widths
$left_right_width = 5;
$stage_height = 15;

$events_array = array();

$myi = 0;
$lastend = 0;
if(!empty($mytasks))
{
foreach($mytasks as $atask)
{
	if($atask["end"] > $lastend)
	{
		$lastend = $atask["end"];
	}
	$thepro = array("stage"=>$atask["title"],"date_start"=>date("d.m.Y", $atask["start"]),"date_end"=>$atask["endstring"], "color"=>$colors[$myi], "ID"=>$atask["project"],"taskId"=>$atask["ID"],"taskText"=>str_replace("<br />","\n",$atask["text"]));

	array_push($events_array,$thepro);

	$myi = $myi + 1;
}
}

$mon = $_GET["mon"];
$mone = $_GET["mone"];

$chart_date_begin = date("U", strtotime("- 7days"));
$chart_date_end_min = $chart_date_begin + 2419200;
$chart_date_end_by_task = date("U", $lastend  + 86400 + 86400);
if ($chart_date_end_min < $chart_date_end_by_task)
{
	$chart_date_end = $chart_date_end_by_task;
}
else
{
	$chart_date_end = $chart_date_end_min;
}

$chart_width_in_days = ($chart_date_end / 86400) - ($chart_date_begin / 86400);
$chart_width_in_px = ($chart_date_end / 3600) - ($chart_date_begin / 3600);

$chart_height_in_px_min = (18 * 20) + 2;
$chart_height_in_px_by_tasks = ((count ($events_array) + 1) * 22) + 2;
if ($chart_height_in_px_min < $chart_height_in_px_by_tasks)
{
	$chart_height_in_px = $chart_height_in_px_by_tasks;
}
else
{
	$chart_height_in_px = $chart_height_in_px_min;
}

$bounding_box_height = $chart_height_in_px + 40;
$bounding_box_width = $chart_width_in_px + 45;
$bounding_box_top = $top_margin;
$bounding_box_left= $left_margin - 10;

$day_width_in_px = $chart_width_in_px / $chart_width_in_days;
$width_of_day_in_px = 25;

$event_display = "<div style = \"width:200px;overflow:hidden;\">";
$leftfin = 0;
$i = 0;
$thei = 0;
while ($i <= $chart_width_in_days)
{
	if($chart_header_date == 31)
	{
		//$thei = $i + 1;
	}

	$chart_header_date = date('d', $chart_date_begin + ($thei * 86400));
	$day_left = $i * $day_width_in_px ;
	$day_width = $day_width_in_px - 2;

	$header_top = $top_margin + 30;

	$event_display .= <<<CODE
		<div class="event_text" style="display:block; border:solid 1px #CCCCCC; position:absolute; height:{$chart_height_in_px}px; top:0px; left:{$day_left}px; width:{$day_width}px; ">{$chart_header_date}</div>
CODE;

	$i++;
	$thei++;
	$leftfin = $leftfin + $day_left;
}
$eventi = 0;

foreach ($events_array as $key => $value)
{
	$stage_name = $value['stage'];
	$background = $value['color'];

	$top = ($key * ($stage_height + 1)) + $top_margin + 45;
	$position_left = ((date("U", strtotime($value['date_start'])) - $chart_date_begin) / 3600);
	$position_right = (((date("U", strtotime($value['date_end'])) - $chart_date_begin) + 86400) / 3600);
	if ($position_left < 1)
	{
		$position_left  = 0;
	}
	$width = $position_right - $position_left;

	if ($width > $bounding_box_width)
	{
		$position_right = 740;
		$width = $position_right - $position_left;
	}
	$img_left = $position_left;
	$img_middle = $position_left + $left_right_width;
	$image_width_middle = $width - ($left_right_width * 2);
	$img_right = $position_right - $left_right_width;

	$event_display .= "
		<div class=\"event_text\" style=\"display:block; position:absolute; overflow:hidden; top:{$top}px; left:{$position_left}px; width:{$width}px; height:15px; z-index: 101;\" >
			&nbsp;&nbsp;<span style = \"color:white;\"><a href = \"managetask.php?action=showtask&tid=$value[taskId]&id=$value[ID]\" target=\"_parent\" style=\"color:white; text-decoration:none;\" title = \"$value[taskText]\">$stage_name</a></span>
		</div>

		<img alt=\"\" style=\"display:block; position:absolute; height:{$stage_height}px; background: #{$background}; top:{$top}px; left:{$img_left}px; z-index: 100;\" src=\"{$image_left}\" />
		<img alt=\"$stage_name\" style=\"display:block; position:absolute; height:{$stage_height}px; width:{$image_width_middle}px; background: #{$background}; top:{$top}px; left:{$img_middle}px; z-index: 100;\" src=\"{$image_middle}\" />
		<img alt=\"\" style=\"display:block; position:absolute; height:{$stage_height}px; background: #{$background}; top:{$top}px; left:{$img_right}px; z-index: 100;\" src=\"{$image_right}\" />
	";
}

$event_display .= "</div>";
$html = <<<CODE
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
		<title>Calendar</title>

		<style>
			.event_text
					{
						font-family:arial;
						font-size:8pt;
						font-weight:bold;
					}
		</style>
	</head>

	<body>
		{$event_display}
		<script type = "text/javascript">
			parent.stopWait('progress');
		</script>
	</body>
</html>
CODE;

echo $html;
?>