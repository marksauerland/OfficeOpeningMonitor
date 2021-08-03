<?php
SESSION_START();
require("status.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<title>OfficeOpeningMonitor</title>
	<link href="./misc/style.css" rel="stylesheet" type="text/css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="./misc/jquery-3.5.1.min.js"></script>
	<script src="./misc/timer.js"></script>
</head>

<body id="digitale_B_robesetzungsanzeige_SONT" lang="de-DE">

	<div class="container-fluid p-4" id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">

				</div>
				<div class="col-md-4" id="logo-container">
					<img src="./misc/01_AStA-Logo.png" id="logo">
				</div>
			</div>
		</div>
		<h1 id="tagline">Schön, dass du da bist.</h1>
		
	</div>
	<div class="container-fluid text-white p-4" id="timer">
		
		<div class="row" id="timer-set">
			Lade Timer....
		</div>
	</div>
	<div class="container" id="footer">
		<div class="row">
			<div class="col-md-4" id="hours">
				<h2>Unsere Öffnungszeiten</h2>
				<h3>Montag - Donnerstag</h3>
				9:00 - 12:00 Uhr<br>
				13:00 - 14:30 Uhr<br>
				
			</div>
			<div class="col-md-8">
				<h2>Deine Ansprechpartnerinnen</h2>
				<div class="row">
					<div class="col-md-4 person">
						<h3>Claudia Hott</h3>
						Service<br>
						<img src="./misc/QR_Code214041739216744078.png" id="qr">
					</div>
					<div class="col-md-4 person">
						<h3>Sissi Mattis</h3>
						Marketing & Kommunikation<br>
						<img src="./misc/QR_Code214041739216823921.png" id="qr">
					</div>
					<div class="col-md-4 person">
						<h3>Jenny Henschel</h3>
						Haushalt<br>
						<img src="./misc/QR_Code214041739216867453.png" id="qr">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>