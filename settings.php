<!--triasRtMonitor by Lukas Röther v3.0-->
<!DOCTYPE html>
<html lang="de">
<?php
$_SESSION['error'] = FALSE; //Fehler zurücksetzen zum Prüfen mit neuen Settings
$fehler = "Fehler";

if (isset($_POST['status'])) {
    $status = strip_tags($_POST['status']);

    $fp = fopen('./config/status.conf', 'w');
    fwrite($fp, $status);
    fclose($fp);
}

if (isset($_POST['timeSet'])) {
    $timeSet = strip_tags($_POST['timeSet']);

    $fp = fopen('./config/timeSet.conf', 'w');
    fwrite($fp, $timeSet);
    fclose($fp);
}

if (isset($_POST['monStart'])) {
    $monStart = strip_tags($_POST['monStart']);

    $fp = fopen('./config/monStart.conf', 'w');
    fwrite($fp, $monStart);
    fclose($fp);
}
if (isset($_POST['monEnd'])) {
    $monEnd = strip_tags($_POST['monEnd']);

    $fp = fopen('./config/monEnd.conf', 'w');
    fwrite($fp, $monEnd);
    fclose($fp);
}
if (isset($_POST['dieStart'])) {
    $dieStart = strip_tags($_POST['dieStart']);

    $fp = fopen('./config/dieStart.conf', 'w');
    fwrite($fp, $dieStart);
    fclose($fp);
}
if (isset($_POST['dieEnd'])) {
    $dieEnd = strip_tags($_POST['dieEnd']);

    $fp = fopen('./config/dieEnd.conf', 'w');
    fwrite($fp, $dieEnd);
    fclose($fp);
}
if (isset($_POST['miStart'])) {
    $miStart = strip_tags($_POST['miStart']);

    $fp = fopen('./config/miStart.conf', 'w');
    fwrite($fp, $miStart);
    fclose($fp);
}
if (isset($_POST['miEnd'])) {
    $miEnd = strip_tags($_POST['miEnd']);

    $fp = fopen('./config/miEnd.conf', 'w');
    fwrite($fp, $miEnd);
    fclose($fp);
}
if (isset($_POST['donStart'])) {
    $donStart = strip_tags($_POST['donStart']);

    $fp = fopen('./config/donStart.conf', 'w');
    fwrite($fp, $donStart);
    fclose($fp);
}
if (isset($_POST['donEnd'])) {
    $donEnd = strip_tags($_POST['donEnd']);

    $fp = fopen('./config/donEnd.conf', 'w');
    fwrite($fp, $donEnd);
    fclose($fp);
}
if (isset($_POST['frStart'])) {
    $frStart = strip_tags($_POST['frStart']);

    $fp = fopen('./config/frStart.conf', 'w');
    fwrite($fp, $frStart);
    fclose($fp);
}
if (isset($_POST['frEnd'])) {
    $frEnd = strip_tags($_POST['frEnd']);

    $fp = fopen('./config/frEnd.conf', 'w');
    fwrite($fp, $frEnd);
    fclose($fp);
}
if (isset($_POST['brStart'])) {
    $brStart = strip_tags($_POST['brStart']);

    $fp = fopen('./config/brStart.conf', 'w');
    fwrite($fp, $brStart);
    fclose($fp);
}
if (isset($_POST['brEnd'])) {
    $brEnd = strip_tags($_POST['brEnd']);

    $fp = fopen('./config/brEnd.conf', 'w');
    fwrite($fp, $brEnd);
    fclose($fp);
}
if (isset($_POST['override'])) {
    $override = strip_tags($_POST['override']);

    $fp = fopen('./config/override.conf', 'w');
    fwrite($fp, $override);
    fclose($fp);
}
?>

<head>
    <meta charset="utf-8">
    <meta name="author" content="Lukas Röther">
    <meta name="description" content="efa-rtMonitor settings">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php
    $name = file_get_contents("./config/name.txt"); //Name des Abfahrtmonitor
    echo '<title> Einstellungen des Abfahrtmonitor ', $name, '</title>';
    ?>
</head>

<body>
    <script>
        <?php
        $href = 'location.replace("/config.php");';
        echo ' alert("Einstellungen gespeichert");' . $href;
        ?>
    </script>
</body>

</html>