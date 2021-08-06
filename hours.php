<?php
//Calculate Opening Hour Table

$monStart = (file_get_contents("./config/monStart.conf"));
$monEnd = (file_get_contents("./config/monEnd.conf"));
$dieStart = (file_get_contents("./config/dieStart.conf"));
$dieEnd = (file_get_contents("./config/dieEnd.conf"));
$miStart = (file_get_contents("./config/miStart.conf"));
$miEnd = (file_get_contents("./config/miEnd.conf"));
$donStart = (file_get_contents("./config/donStart.conf"));
$donEnd = (file_get_contents("./config/donEnd.conf"));
$frStart = (file_get_contents("./config/frStart.conf"));
$frEnd = (file_get_contents("./config/frEnd.conf"));


$brStart = (file_get_contents("./config/brStart.conf"));
$brEnd = (file_get_contents("./config/brEnd.conf"));



if ($monStart == $dieStart && $monEnd == $dieEnd) {
    if ($dieStart == $miStart && $dieEnd == $miEnd) {
        if ($miStart == $donStart && $miEnd == $donEnd) {
            $days[0] = "Montag - Donnerstag";
            $openStart[0] = $monStart;
            $openEnd[0] = $monEnd;
            $case = 3;
        } else {
            $days[0] = "Montag - Mittwoch";
            $openStart[0] = $monStart;
            $openEnd[0] = $monEnd;

            $days[1] = "Donnerstag";
            $openStart[1] = $donStart;
            $openEnd[1] = $donEnd;

            $case = 2;
        }
    } else {
        $days[0] = "Montag - Dienstag";
        $openStart[0] = $monStart;
        $openEnd[0] = $monEnd;

        $days[1] = "Mittwoch";
        $openStart[1] = $miStart;
        $openEnd[1] = $miEnd;

        $days[2] = "Donnerstag";
        $openStart[2] = $donStart;
        $openEnd[2] = $donEnd;

        

    $case = 1;
    }
} else {
    $days[0] = "Montag";
    $openStart[0] = $monStart;
    $openEnd[0] = $monEnd;

    $days[1] = "Dienstag";
    $openStart[1] = $dieStart;
    $openEnd[1] = $dieEnd;

    $days[2] = "Mittwoch";
    $openStart[2] = $miStart;
    $openEnd[2] = $miEnd;

    $days[3] = "Donnerstag";
    $openStart[3] = $donStart;
    $openEnd[3] = $donEnd;

    $case = 0;
}



  echo "<h2>Unsere Öffnungszeiten</h2><div class='row'>";
  if ($case == 0) {
      echo "<div class='col'><h3>".$days[0]."</h3>
      ".$openStart[0] ." - " . $brStart . " Uhr<br>
       ".$brEnd ." - " . $openEnd[0] . " Uhr</div>
       <div class='col'><h3>".$days[1]."</h3>
      ".$openStart[1] ." - " . $brStart . " Uhr<br>
       ".$brEnd ." - " . $openEnd[1] . " Uhr</div></div><div class='row'>
       <div class='col'><h3>".$days[2]."</h3>
      ".$openStart[2] ." - " . $brStart . " Uhr<br>
       ".$brEnd ." - " . $openEnd[2] . " Uhr</div>
       <div class='col'><h3>".$days[3]."</h3>
      ".$openStart[3] ." - " . $brStart . " Uhr<br>
       ".$brEnd ." - " . $openEnd[3] . " Uhr</div></div><div class='row'>";
  } elseif ($case == 1) {
    echo "<div class='col'><h3>".$days[0]."</h3>
      ".$openStart[0] ." - " . $brStart . " Uhr<br>
       ".$brEnd ." - " . $openEnd[0] . " Uhr</div>
       <div class='col'><h3>".$days[1]."</h3>
      ".$openStart[1] ." - " . $brStart . " Uhr<br>
       ".$brEnd ." - " . $openEnd[1] . " Uhr</div></div><div class='row'>
       <div class='col'><h3>".$days[2]."</h3>
      ".$openStart[2] ." - " . $brStart . " Uhr<br>
       ".$brEnd ." - " . $openEnd[2] . " Uhr</div>";
  } elseif ($case == 2) {
    echo "<div class='col'><h3>".$days[0]."</h3>
    ".$openStart[0] ." - " . $brStart . " Uhr<br>
     ".$brEnd ." - " . $openEnd[0] . " Uhr
     <div class='col'><h3>".$days[1]."</h3>
    ".$openStart[1] ." - " . $brStart . " Uhr<br>
     ".$brEnd ." - " . $openEnd[1] . " Uhr</div></div><div class='row'>
     ";
  } elseif ($case == 3) {
    echo "<div class='col'><h3>".$days[0]."</h3>
    ".$openStart[0] ." - " . $brStart . " Uhr<br>
     ".$brEnd ." - " . $openEnd[0] . " Uhr</div></div><div class='col'>";
  }
        
  echo " <div class='col'><h3>Freitag</h3>
  ".$frStart ." - " . $frEnd . " Uhr</div></div>";