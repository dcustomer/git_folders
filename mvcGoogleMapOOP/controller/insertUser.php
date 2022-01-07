<?php
 $userInfo['first_name'] = $_POST['firstName'];
 $userInfo['last_name'] = $_POST['lastName'];
 $userInfo['email'] = $_POST['email'];
 $userInfo['login'] = $_POST['login'];
 $userInfo['pass'] = md5($_POST['pass']);

 $tableName = "users";

 $result = $cont->insert($userInfo, $tableName);

 echo "<section>";
 if($result) {
     echo "You are registered";
 } else {
     echo "You are not registered";
 }
 echo "<br><a href=\"index.php\">to main</a>";
 echo "</section>";
?>