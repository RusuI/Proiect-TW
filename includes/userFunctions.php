<?php

session_start();

function emptyInputSingup($username, $email, $password, $confpassword)
{
    $result = false;

    if (empty($username) && empty($email) && empty($password) && empty($confpassword)) {
        $result = true;
    }

    return $result;
}

function emptyUser($username)
{
    $result = false;

    if (empty($username)) {
        $result = true;
    }

    return $result;
}

function emptyEmail($email)
{
    $result = false;

    if (empty($email)) {
        $result = true;
    }

    return $result;
}

function emptyPassword($password)
{
    $result = false;

    if (empty($password)) {
        $result = true;
    }

    return $result;
}

function emptyPasswordConf($confpassword)
{
    $result = false;

    if (empty($confpassword)) {
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

function userExists($connection, $username)
{
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($connection); //prepared statement to send data to the database (more secure)

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/signup.php?error=signupfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username); //bind the data from the user to the actual user
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

function emailExists($connection, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/signup.php?error=signupfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email); //bind the data from the user to the actual user
    mysqli_stmt_execute($stmt); // execute the statement

    $result_data = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result_data)) { //if i do get data from the DB with this email, we'll use it for the login

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
    // $stmt = mysqli_stmt_init($connection);
    $stmt = $connection->prepare($sql);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/signup.php?error=signupfailed");
        exit();
    }

    $hashpassword = password_hash($password, PASSWORD_DEFAULT); //using the default hashing algorithm

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashpassword);
    mysqli_stmt_execute($stmt); // execute the statement

    mysqli_stmt_close($stmt);

    header("location: ../views/signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $password)
{
    $result = false;

    if (empty($username) && empty($password)) {
        $result = true;
    }

    return $result;
}

function emptyUserLogIn($username)
{
    $result = false;

    if (empty($username)) {
        $result = true;
    }

    return $result;
}

function emptyPasswordLogIn($password)
{
    $result = false;

    if (empty($password)) {
        $result = true;
    }

    return $result;
}


function login_user($connection, $username, $password)
{
    $user_exists = userExists($connection, $username, $username); // because in the sql statement we have username OR email

    if ($user_exists == false) {
        header("location: ../views/login.php?error=loginfailed");
        exit();
    }

    $pwdHashed = $user_exists["password"]; //get the password from the database

    $check_pwd = password_verify($password, $pwdHashed); // if the passwords match , return true ; otherwise, false

    if ($check_pwd == false) {
        header("location: ../views/login.php?error=loginfailed");
        exit();
    } else if ($check_pwd == true) {
        session_start();

        $_SESSION["id"] = $user_exists["id"];
        $_SESSION["username"] = $user_exists["username"];
        header("location: ../views/home.php");
        exit();
    }
}


/* SETTINGS FUCNTIONS*/

function emptyInputSettings($username, $email, $description)
{
    $result = false;

    if (empty($username) || empty($email) || empty($description)) {
        $result = true;
    }

    return $result;
}


function update_settings($connection, $name, $email, $description, $imgContent)
{
    $name   = mysqli_real_escape_string($connection, $name);
    $email   = mysqli_real_escape_string($connection, $email);
    $description   = mysqli_real_escape_string($connection, $description);
    $imgContent   = mysqli_real_escape_string($connection, $imgContent);


    $user_id = $_SESSION['id'];
    $query = "UPDATE users SET ";
    $query .= "username = '{$name}', ";
    $query .= "email = '{$email}', ";
    $query .= "description = '{$description}' ";
    $query .= "WHERE id = '{$user_id}'";
    $update_user = mysqli_query($connection, $query);


    if (!$update_user) {
        die("Query failed" . mysqli_error($connection));
    } else {
        $_SESSION['username'] = $name;
    }
    $result = 1;
    return $result;
}


/* END OF SETTINGS FUNCTIONS*/

/*FAQ FUNCTIONS  */


function emptyInputFAQ($username, $question)
{
    $result = false;

    if (empty($username) || empty($question)) {
        $result = true;
    }

    return $result;
}


function sendQuestion($connection, $user, $question)
{
    $user = $_SESSION['id'];
    $sql = "INSERT INTO faq (user_id,question) VALUES(?,?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../views/faq.php?error=sendQuestionfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $user, $question);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../views/faq.php?error=none");
    exit();
}



/*END OF FAQ FUNCTIONS */


/*FAVORITES FUNCTIONS */

function getFavoritesByUid($connection, $user)
{
    $user = $_SESSION['id'];
    $sql = "SELECT id,name,description,author_id FROM recipe JOIN favorites ON favorites.recipe_id=recipe.id WHERE user_id=?;";

    $stmt = mysqli_stmt_init($connection);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);


    $result_data = mysqli_stmt_get_result($stmt);
    return $result_data;
    mysqli_stmt_close($stmt);

    header("location: ../views/favorites.php?error=none");
    exit();
}


/*END OF FAVORITES FUNCTION */