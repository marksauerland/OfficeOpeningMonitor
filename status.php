<?php

//Status
$status = file_get_contents("./config/status.conf"); //1: geöffnet 2: geschlossen 3: pause

$override = file_get_contents("./config/override.conf");
date_default_timezone_set("Europe/Berlin");
$timeNow = time();
$weekday = date("w", time());

$monStart = strtotime(file_get_contents("./config/monStart.conf"));
$monEnd = strtotime(file_get_contents("./config/monEnd.conf"));
$dieStart = strtotime(file_get_contents("./config/dieStart.conf"));
$dieEnd = strtotime(file_get_contents("./config/dieEnd.conf"));
$miStart = strtotime(file_get_contents("./config/miStart.conf"));
$miEnd = strtotime(file_get_contents("./config/miEnd.conf"));
$donStart = strtotime(file_get_contents("./config/donStart.conf"));
$donEnd = strtotime(file_get_contents("./config/donEnd.conf"));
$frStart = strtotime(file_get_contents("./config/frStart.conf"));
$frEnd = strtotime(file_get_contents("./config/frEnd.conf"));


$brStart = strtotime(file_get_contents("./config/brStart.conf"));
$brEnd = strtotime(file_get_contents("./config/brEnd.conf"));

if ($status == 3) { //Pause
    $override = true; //Überschreibt alles
}

if ($override == "false") { //Normale Öffnungszeiten
    switch ($weekday) {
        case 0: //Sonntag
            $status = 2;
            break;
        case 1: //Montag
            $start = $monStart;
            $end = $monEnd;
            break;
        case 2: //Dienstag
            $start = $dieStart;
            $end = $dieEnd;
            break;
        case 3: //Mittwoch
            $start = $miStart;
            $end = $miEnd;
            break;
        case 4: //Donnerstag
            $start = $donStart;
            $end = $donEnd;
            break;
        case 5: //Freitag
            $start = $frStart;
            $end = $frEnd;
            break;
        case 6: //Samstag
            $status = 2;
            break;
    }

    $_SESSION["start"] = $start;
    $_SESSION["end"] = $end;
    if ($brStart < $timeNow || $timeNow > $brEnd) {
        $break = true;
        $status = 3;
    }
    if ($break = false) {
        if ($timeNow < $start || $timeNow > $end) {  //vor der Öffnung
            $status = 2;
            $overnight = true;
        } else {
            $status = 1;
            $overnight = false;
        }
    }



    //default schreiben

    $fp = fopen('./config/status.conf', 'w');
    fwrite($fp, $status);
    fclose($fp);
}



switch ($status) {
    case 1:
        $statusGen = "geöffnet";
        $statusTime = "Wir schließen in";
        break;
    case 2:
        $statusGen = "geschlossen";
        $statusTime = "Wir öffnen in";
        break;
    case 3:
        $statusGen = "geschlossen (Mittagspause)";
        $statusTime = "Wir sind wieder zurück in";
        break;
    case 4:
        $statusGen = "nicht besetzt";
        $statusTime = "Ich bin zurück in";
        break;
}

$_SESSION["status"] = $status;
