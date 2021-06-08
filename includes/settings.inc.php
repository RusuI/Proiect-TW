<?php

if (isset($_POST["submit"])) {

    require_once 'database.php';
    $name = $_POST["name"];
    $description = $_POST["description"];
    $email = $_POST["email"];
    $post_image = $_FILES["file"]['name']; 
    $post_image_temp = $_FILES["file"]['tmp_name']; 

    move_uploaded_file($post_image_temp, "../imagesLogin/$post_image");



    require_once 'userFunctions.php';

    if (emptyInputSettings($name, $email, $description) !== false) { //if it's anything besides false, just throw an error

        header("location: ../views/settings.php?error=emptyinput");
        exit();
    }

    $result = update_settings($connection, $name, $email, $description,$post_image);
    if ($result == 1) {
        if($post_image != null){
            $query = "UPDATE users SET ";
            $query .= "image = '{$post_image}' ";
            $query .= "WHERE id = '{$_SESSION['id']}'";
            
            $addImage = mysqli_query($connection, $query);

            if($addImage){
                header("location: ../views/profile.php");
            }
        }else{
            header("location: ../views/profile.php");
        }
    }else{
        header("location: ../views/profile.php");
    }
} else {
    header("location: ../views/profile.php");
    exit();
}
