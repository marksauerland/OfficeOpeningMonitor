<?php
require("status.php");
//Contdown
date_default_timezone_set("Europe/Berlin");
$timeNow = time();
$hour = gmdate("H", time());
$min = gmdate("i", time());
$sec = gmdate("s", time());
$timeNow = mktime($hour, $min, $sec); //Unix ohne Datum

$start = $_SESSION["start"];
$end = $_SESSION["end"];
$status = $_SESSION["status"];
$timeSet = strtotime(file_get_contents("./config/timeSet.conf"));

if ($status == 4) { //Außerplanm. Abwesend
	$difference = $timeSet - $timeNow;
	//echo "break";
} elseif ($status == 2 || $status == 3) { //geschlossen

	$difference = $start - $timeNow;
	//echo "closed";
} elseif ($status == 1) { //geöffnet
	if ($overnight != true) {
		$difference = $timeNow - $end;
		//echo "open";
	}
}

$differenceHour = gmdate("H", $difference);
$differenceMinute = gmdate("i", $difference);
$differenceSec = gmdate("s", $difference);

echo '
<span id="status">
			Das Büro ist im Moment'. $statusGen.'.
		</span>
			<h1>'.$statusTime.'</h1>
			<div class="col-md-4">
				<span id="time">' . $differenceHour . '</span><br>
				<span id="time-desc">Stunden</span>
			</div>
			<div class="col-md-4">
				<span id="time">' . $differenceMinute . '</span><br>
				<span id="time-desc">Minuten</span>
			</div>
			<div class="col-md-4">
				<span id="time">' . $differenceSec . '</span><br>
				<span id="time-desc">Sekunden</span>
			</div>';
