<?php
//Connectingl to sql db.
$connect = mysqli_connect("localhost","root","Team4","team4");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO Form (Journey, recommend, learn, change)
VALUES ('$_POST[Journey]', '$_POST[recommend]', '$_POST[learn]', '$_POST[change]')");
?>