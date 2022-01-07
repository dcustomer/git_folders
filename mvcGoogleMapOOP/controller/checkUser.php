<?php
 //session_start();
 if(!empty($_POST['email']) && !empty($_POST['pass'])) {
     
    $userInfo [] = "login";
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $tableName = "users";
    $where = "email = '$email' AND pass = '$pass'";
    

    $resultUser = $cont->select($userInfo, $tableName, $where);

    if(count($resultUser[0]) > 0) {
        $_SESSION['userLogin'] = $resultUser[0]['login'];
        header("Location: index.php?pagename=admSide");
    }
 } else {
     include("view/userCheckRes.php");
 }
?>