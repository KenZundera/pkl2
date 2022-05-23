<?php
//  make a connection to the database
$mysqli = mysqli_connect("localhost", "root", "", "pkl2");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error(), E_USER_ERROR;
}
