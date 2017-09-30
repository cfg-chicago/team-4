<?php
//Connectingl to sql db.
$connect = mysqli_connect("my host","my user","my password","my db");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (first_name, last_name, username, password)
VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>