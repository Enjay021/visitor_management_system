<?php

$con = mysqli_connect("localhost", "root", "", "vms");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}

?>