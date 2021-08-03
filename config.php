<!--triasRtMonitor by Lukas Röther v3.0-->

<!DOCTYPE html>
<html lang="de">
<?php

$href = 'location.replace("/login.php");';
$authset = file_get_contents("./misc/auth.pw");




if ($_POST["auth"] == $authset || $_COOKIE["auth"] == true) {
	setcookie("auth", "true", time() + (86400 * 30), "/");
} else {
	if (isset($_POST["auth"]) != true) { //Wenn Session schon gesetzt
		echo '<script>' . $href . '</script>';
	} elseif ($_POST["auth"] != $authset) { 		//dann PW prüfen
		echo '<script>alert("Passwort falsch.");' . $href . '</script>'; //Wenn falsch
	}
}


?>

<head>
	<meta charset="utf-8">
	<meta name="author" content="Lukas Röther">
	<meta name="description" content="efa-rtMonitor settings">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>triasRtMonitor - Einstellungen ', $name, '</title>
</head>

<body>

	<div class="container">
		<section class="vh-100 gradient-custom">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-8 col-lg-6 col-xl-5">
						<div class="card bg-dark text-white" style="border-radius: 1rem;">
							<div class="card-body p-5 text-center">

								<div class="mb-md-5 mt-md-4 pb-5">


									<form action="settings.php" method="post">
										<div class="form-container">
											<div class="form-row">
												<div class="form-col">
													<h2>Allgemeine Einstellungen</h2>

													<?php $status = file_get_contents("./config/status.conf"); //Name des Abfahrtmonitor
													if ($status == 1) {
														echo '<label><b>Status</b><br \>
	<select required name="status">
		<option value="1" selected>geöffnet</options>
		<option value="2">geschlossen</options>
		<option value="3">Pause</options>
		<option value="4">Außerplanmäßig abwesend</options>
	</select>
</label>';
													} elseif ($status == 2) {
														echo '<label><b>Status</b><br \>
	<select required name="status">
		<option value="1" >geöffnet</options>
		<option value="2" selected>geschlossen</options>
		<option value="3">Pause</options>
		<option value="4">Außerplanmäßig abwesend</options>
	</select>
</label>';
													} elseif ($status == 3) {
														echo '<label><b>Status</b><br \>
	<select required name="status">
		<option value="1">geöffnet</options>
		<option value="2" >geschlossen</options>
		<option value="3" selected>Pause</options>
		<option value="4">Außerplanmäßig abwesend</options>
	</select>
</label>';
													} elseif ($status == 4) {
														echo '<label><b>Status</b><br \>
	<select required name="status">
		<option value="1">geöffnet</options>
		<option value="2" >geschlossen</options>
		<option value="3" >Pause</options>
		<option value="4" selected>Außerplanmäßig abwesend</options>
	</select>
</label>';
													}


													?><br><br>
													<?php
													$override = file_get_contents("./config/override.conf");
													if ($override == "true") {
														echo '<input type="radio" name="override" value="true" checked>
														<label for="true"> Status überschreiben </label><br>
														<input type="radio" name="override" value="false">
														<label for="false"> Öffnungszeiten nutzen </label>';
													} elseif ($override == "false") {
														echo '<input type="radio" name="override" value="true">
														<label for="true"> Status überschreiben </label><br>
														<input type="radio" name="override" value="false" checked>
														<label for="false"> Öffnungszeiten nutzen </label>';
													} ?>

													<br><br>
													<label><b>Countdown bis</b><br \>
														<?php
														$timeSet = file_get_contents("./config/timeSet.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="timeSet" value="', $timeSet, '">';
														?></label>
													<br><br>

													<h2>Öffnungszeiten</h2>
													<label><b>Montag von </b>
														<?php
														$monStart = file_get_contents("./config/monStart.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="monStart" value="', $monStart, '">';
														?></label>
													<label><b>bis </b>
														<?php
														$monEnd = file_get_contents("./config/monEnd.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="monEnd" value="', $monEnd, '">';
														?></label>

													<label><b>Dienstag von </b>
														<?php
														$dieStart = file_get_contents("./config/dieStart.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="dieStart" value="', $dieStart, '">';
														?></label>
													<label><b>bis </b>
														<?php
														$dieEnd = file_get_contents("./config/dieEnd.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="dieEnd" value="', $dieEnd, '">';
														?></label>

													<label><b>Mittwoch von </b>
														<?php
														$miStart = file_get_contents("./config/miStart.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="miStart" value="', $miStart, '">';
														?></label>
													<label><b>bis </b>
														<?php
														$miEnd = file_get_contents("./config/miEnd.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="miEnd" value="', $miEnd, '">';
														?></label>

													<label><b>Donnerstag von </b>
														<?php
														$donStart = file_get_contents("./config/donStart.conf"); //Name des Abfahrtmonitor
														echo '<input required type="time" name="donStart" value="', $donStart, '">';
														?>
														<label><b>bis </b>
															<?php
															$donEnd = file_get_contents("./config/donEnd.conf"); //Name des Abfahrtmonitor
															echo '<input required type="time" name="donEnd" value="', $donEnd, '">';
															?></label>

														<label><b>Freitag von </b>
															<?php
															$frStart = file_get_contents("./config/frStart.conf"); //Name des Abfahrtmonitor
															echo '<input required type="time" name="frStart" value="', $frStart, '">';
															?></label>
														<label><b>bis </b>
															<?php
															$frEnd = file_get_contents("./config/frEnd.conf"); //Name des Abfahrtmonitor
															echo '<input required type="time" name="frEnd" value="', $frEnd, '">';
															?></label><br> <br>
														<h2>Mittagspause</h2>
														<label><b>Von </b>
															<?php
															$brStart = file_get_contents("./config/brStart.conf"); //Name des Abfahrtmonitor
															echo '<input required type="time" name="brStart" value="', $brStart, '">';
															?></label>
														<label><b>bis </b>
															<?php
															$brEnd = file_get_contents("./config/brEnd.conf"); //Name des Abfahrtmonitor
															echo '<input required type="time" name="brEnd" value="', $brEnd, '">';
															?></label>



												</div>

											</div>
											<div id="buttons">
												<br \><br \>
												<button type="submit" name="submit" class="btn btn-primary">Speichern</button>
												<button type="reset" name="reset" class="btn btn-secondary">Änderungen zurücksetzen</button>


											</div>
									</form>

								</div>



							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>


	<!-- Footer -->
	<footer class="bg-light text-center text-lg-start">


		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			<span id="trias-brand">OfficeOpeningMonitor</span><br \>
			Version 1<br \>
			<b>&copy; <?php echo date("Y"); ?> Lukas Röther</b><br \>
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->



</body>

</html>