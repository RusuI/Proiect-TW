<?php

session_start(); // we need to have a session started so that we can destroy its variables
session_unset(); // unset any sessions we might have
session_destroy();

header("location: ../views/home.php"); //send the user back to the main page
    exit();
