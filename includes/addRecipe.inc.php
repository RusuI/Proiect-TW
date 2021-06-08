<?php
    require_once 'database.php';
    require_once 'recipeFunctions.php';

$data = file_get_contents('php://input');
$data=json_decode($data,true);

// echo json_encode($data["list"]);
// echo json_encode($data["listStep"]);*/

// $response["list"]=$data["list"];
// $response["listStep"]=$data["listStep"];
// $response["name"] = $data["name"];
// $response["description"] = $data["description"];
// $response["prep_time"] = $data["prep_time"];
// $response["cook_time"] = $data["cook_time"];
// $response["serv"] = $data["serv"];
// $response["diff"] = $data["diff"];
if(emptyInputRecipe($data["list"],$data["listStep"],$data["name"],$data["description"],$data["prep_time"],$data["cook_time"],$data["serv"],$data["diff"])){
    http_response_code();
}


//http_response_code(400);

//echo json_encode($response);








