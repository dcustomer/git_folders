<?php
 if(isset($_SESSION['userLogin'])) {
     //include("view/admView.php");
     if(!isset($_REQUEST['admPagename']) || empty($_REQUEST['admPagename'])) {
         $_REQUEST['admPagename'] = "admMain";
     }

     $admPageArr = array(
         "admHeader" => include("view/admHeader.php"),
         "admContent" => include($cont->viewContent($_REQUEST['admPagename'])),
         "admFooter" => include("view/admFooter.php")
     );

 }
?>