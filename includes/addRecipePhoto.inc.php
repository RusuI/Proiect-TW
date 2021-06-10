<?php
session_start();
require_once 'database.php';
require_once 'recipePageFunctions.php';
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}



$targetPath = "uploads/" . basename($_FILES["inpFile"]["name"]);
move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);


$recipeId=$_POST["recipeId"];
debug_to_console("mama");
debug_to_console($recipeId);
debug_to_console("mama");

$name = $_POST["name"];
$post_image = $_FILES["inpFile"]["name"];
// debug_to_console($recipeId);


$result = emptyInputSendPicture($name);
if ($result == true) {
    if ($post_image != null) {
        $sql = "INSERT INTO recipes_pictures (recipe_id,photo) VALUES(?,?) ;";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo 0;

        }

        mysqli_stmt_bind_param($stmt, "ss", $recipeId, $post_image);
        mysqli_stmt_execute($stmt); // execute the statement

        mysqli_stmt_close($stmt);
      echo 1;
    }
    else echo 2;
    
}
else echo 3;
