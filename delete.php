<?php
include("connection.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM form_tb WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Success Delete Data!');</script>";
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "<script>alert('Failed Delete Data!');</script>";
    }
}
