<?php

function emptyInputSingup($username, $email, $password, $confpassword)
{
    $result = false;

    if (empty($username) || empty($email) || empty($password) || empty($confpassword)) {
        $result = true;
    }

    return $result;
}

function invalidUsername($username)
{
    $result = false;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { //if the username has invalid characters,it means that it is invalid
        $result = true;
    }

    return $result;
}

function invalidEmail($email)
{
    $result = false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  // check if the email is proper
        $result = true;
    }

    return $result;
}


function pwdMatch($password, $confpassword)
{
    $result = false;

    if ($password !== $confpassword) {
        $result = true;
    }

    return $result;
}

function userExists($connection, $username, $email)
{
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/signup.php?error=signupfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this username/email, we'll use it for the login

        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function signup_user($connection, $username, $email, $password)
{
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/signup.php?error=signupfailed");
        exit();
    }

    $hashpassword = password_hash($password, PASSWORD_DEFAULT); //using the default hasing algorithm

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashpassword);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);

    header("location: ../views/signup.php?error=none");
    exit();
}

function emptyInputLogin($username,$password){
    $result = false;

    if (empty($username) || empty($password)) {
        $result = true;
    }

    return $result;
}

function login_user($connection,$username,$password){
    $user_exists = userExists($connection, $username, $username); // because in the sql statement we have username OR email

    if($user_exists == false){
        header("location: ../views/login.php?error=loginfailed");
        exit();
    }

    $pwdHashed = $user_exists["password"]; //get the password from the database

    $check_pwd = password_verify($password, $pwdHashed); // if the passwords match , return true ; otherwise, false

    if($check_pwd == false){
        header("location: ../views/login.php?error=loginfailed");
        exit();
    }else if($check_pwd == true){
        session_start();

        $_SESSION["id"] = $user_exists["id"];
        $_SESSION["username"] = $user_exists["username"];
        header("location: ../views/home.php");
        exit();
    }
}
