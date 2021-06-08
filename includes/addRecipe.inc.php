<?php

    require_once 'userFunctions.php';
    require_once 'database.php';
    require_once 'recipeFunctions.php';



$user_id=$_SESSION['id'];

$data = file_get_contents('php://input');
$data=json_decode($data,true);

// echo json_encode($data["list"]);
// echo json_encode($data["listStep"]);*/

$response["list"]=$data["list"];
$response["listStep"]=$data["listStep"];
$response["name"] = $data["name"];
$response["description"] = $data["description"];
$response["prep_time"] = $data["prep_time"];
$response["cook_time"] = $data["cook_time"];
$response["serv"] = $data["serv"];
$response["diff"] = $data["diff"];




// pentru imaginile de la poza


$res=emptyInputRecipe($data["name"],$data["description"],$data["prep_time"],$data["cook_time"],$data["serv"],$data["diff"],$data["list"],$data["list"]);
 if($res == true){
echo "Empty input";
 }
 else {

    $res1 = addRecipeInfo($connection,$data["name"],$data["description"],$data["prep_time"],$data["cook_time"],$data["serv"],$data["diff"],$user_id);
    if($res1 == 0){
        echo "Upload failed";
       }
       else
        {  
           
        for($i=0;$i< count($data["list"]); $i+=3){
                     $res2=addRecipeIngredients($connection,$data["name"],$user_id,$data["list"][$i],$data["list"][$i+1],$data["list"][$i+2]);
                     if($res2 == 0){
                        echo "Upload failed";
                       }
                       else {
                        for($i=0;$i< count($data["listStep"]); $i++)
                        {
                            $res3=addRecipeSteps($connection,$data["name"],$user_id,$i,($data["listStep"][$i]+1));
                            if($res2 == 0){
                                echo "Upload failed";
                               }
                               else{
                                echo "Add with succes";
                               }
                        }
   
                    
                    }

        }
        
    }
    
    }

 
//http_response_code(405);
//echo json_encode($response);







