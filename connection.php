<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rpl_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Failed Connection";
} else {
    echo "";
}
