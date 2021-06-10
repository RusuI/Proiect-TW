<?php

if (isset($_POST["submit"])) {

    require_once 'database.php';
    require_once 'userFunctions.php';
    $name = $_POST["name"];
    $description = $_POST["description"];
    $email = $_POST["email"];
    $post_image = $_FILES["file"]['name']; 
    $post_image_temp = $_FILES["file"]['tmp_name']; 
    $user = $_SESSION['id'];

    move_uploaded_file($post_image_temp, "../imagesLogin/$post_image");
    if (emptyInputSettings($name, $email, $description) !== false) { 

        header("location: ../views/settings.php?error=emptyinput");
        exit();
    }

    $result = update_settings($connection, $name, $email, $description);
    
    if ($result == 1) {
        $_SESSION['username'] = $name;
        if($post_image != null){
            $sql = "UPDATE users SET image=? WHERE id=?;";
            $stmt = mysqli_stmt_init($connection);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../views/settings.php?error=updateFailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "ss", $post_image, $user);
            mysqli_stmt_execute($stmt);
            if($stmt){
                header("location: ../views/profile.php");
            }
            mysqli_stmt_close($stmt);

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
