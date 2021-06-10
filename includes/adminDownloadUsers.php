<?php
require_once 'database.php';
require_once 'adminFunctions.php';
$users = getUSers($connection);

$data = array();
while ($row = mysqli_fetch_array($users, MYSQLI_NUM)) {
    $data[]=$row;
}

array_to_csv_download($data, "users.csv");