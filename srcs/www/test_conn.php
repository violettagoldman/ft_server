<?php
print("Here !\n");
$dbuser = 'vgoldman';
$dbpass = 'password';
$dbhost = 'localhost';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
print("Connected to mysql !\n");
