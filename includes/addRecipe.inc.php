<?php

if (isset($_POST["submit"])) {

    require_once 'database.php';
    $name = $_POST["name"];
    $description = $_POST["description"];
    $prep = $_POST["email"];
    $cook = $_FILES["file"];
    $diff = $_FILES["file"]["size"];
    



    require_once 'database.php';
    require_once 'recipeFunctions.php';

}

$data = file_get_contents('php://input');
$data=json_decode($data,true);

echo json_encode($data["list"]);

?>


