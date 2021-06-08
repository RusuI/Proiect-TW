<?php

require_once 'database.php';

//$user_id=$_SESSION["id"];
$sql = "SELECT * FROM users WHERE id = 1;";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);


$sql_faq="SELECT * FROM faq;";
$faq_result= mysqli_query($connection,$sql_faq);
$row_faq = mysqli_fetch_assoc($faq_result);

?>