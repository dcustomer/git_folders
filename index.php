<?php
 include("controller/controller.php");
 session_start();

 $cont = new controller;


 if(!isset($_REQUEST['pagename']) || empty($_REQUEST['pagename'])) {
     $_REQUEST['pagename'] = "main";
 }

 $page_arr = array(
     "header" => include("view/header.php"),
     "content" => include($cont->viewContent($_REQUEST['pagename'])),
     "footer" => include("view/footer.php")
 );

 echo $cont->getPage($page_arr);
?>


