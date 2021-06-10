<?php

require_once 'userFunctions.php';
require_once 'database.php';
require_once 'recipeFunctions.php';

$user_id = $_SESSION['id'];

// $data = file_get_contents('php://input');
// $data= json_decode($_POST, true);

// echo json_encode($data["list"]);
// echo json_encode($data["listStep"]);*/

// $response["list"] = $data["list"];
// $response["listStep"] = $data["listStep"];
// $response["name"] = $data["name"];
// $response["description"] = $data["description"];
// $response["prep_time"] = $data["prep_time"];
// $response["cook_time"] = $data["cook_time"];
// $response["serv"] = $data["serv"];
// $response["diff"] = $data["diff"];
// $response["file1"]=$data["file1"];
// $response["file2"]=$data["file2"];

// echo json_encode($response);


$list1 = $_POST["list"];
$list = explode(",", $list1);

$listStep1 = $_POST["listStep"];
$listStep = explode(",", $listStep1);

$name = $_POST["name"];
$description = $_POST["description"];
$prep_time = $_POST["prep_time"];
$cook_time = $_POST["cook_time"];
$serv = $_POST["serv"];
$diff = $_POST["diff"];
$file1 = $_FILES["file1"]["name"];
$file2 = $_FILES["file2"]["name"];


$targetPath1 = "uploads/" . basename($_FILES["file1"]["name"]);
move_uploaded_file($_FILES["file1"]["tmp_name"], $targetPath1);


$targetPath2 = "uploads/" . basename($_FILES["file2"]["name"]);
move_uploaded_file($_FILES["file2"]["tmp_name"], $targetPath2);

// pentru imaginile de la poza


$res = emptyInputRecipe($_POST["name"], $_POST["description"], $_POST["prep_time"], $_POST["cook_time"], $_POST["serv"], $_POST["diff"], $_POST["list"], $_POST["list"], $file1, $file2);
if ($res == true) {
    echo 1; //adica empty file
} else {

    $res1 = addRecipeInfo($connection, $_POST["name"], $_POST["description"], $_POST["prep_time"], $_POST["cook_time"], $_POST["serv"], $_POST["diff"], $user_id);
    if ($res1 == 0) {
        echo 2; //adica upload failes
    } else {
        $break = 1;
        for ($i = 0; $i < count($list); $i += 3) {
            $j = $i + 1;
            $k = $i + 2;
            $res2 = addRecipeIngredients($connection, $name, $user_id, $list[$i], $list[$j], $list[$k]);
            if ($res2 == 0) {
                echo 2; //adica upload failed
                $break = 0;
            }
        }
        if ($break == 1) {
            $break1 = 1;
            for ($i = 0; $i < count($listStep); $i++) {
                $res3 = addRecipeSteps($connection, $_POST["name"], $user_id, $i, $listStep[$i]);
                if ($res2 == 0) {
                    echo 2;
                    $break1 = 0;
                }
            }
            if ($break1 == 1) {
                //acum adaugam pozele:

                $resultphoto = addRecipePhotos($connection, $name, $user_id, $file1);
                $resultphoto1 = addRecipePhotos($connection, $name, $user_id, $file2);
                if ($resultphoto == 0 || $resultphoto1 == 0) {
                    echo 2;
                } else {
                    echo 4;
                }
            } else {
                echo 2;
            }
        } else {
            echo 2; //adica nu am incarcat bine ingredientele
        }
    }
}
//http_response_code(405);
//echo json_encode($response);
