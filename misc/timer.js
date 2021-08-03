$(document).ready(function () {

    //Countdown abrufen
    $("#timer-set").load("timer.php");

    setInterval(function () {
        $("#timer-set").load("timer.php");





    }, 1000); //1 Sekunden, Angabe in ms 

    //Countdown abrufen
    $("#hours").load("hours.php");

    setInterval(function () {
        $("#hours").load("hours.php");
    }, 600000); //600 Sekunden, Angabe in ms 

});
