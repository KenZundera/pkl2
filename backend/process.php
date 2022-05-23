<?php
include "connections.php";

$mysqli = mysqli_connect("localhost", "root", "", "pkl2");

// get input data from form
$star = trim($_POST['star']);
$name = trim($_POST['name']);
$message = trim($_POST['message']);

// add the review to the database
$query = "INSERT INTO reviews (stars, name, messages) VALUES ('$star', '$name', '$message')";
$mysqli->query($query);
