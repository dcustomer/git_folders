<?php

 $insItem['title'] = $_POST['taskName'];
 $buttonState = $_POST['add'];


 if($cont->checkInsertData($insItem, $buttonState))
 {
     echo "The record was inserted";
 }
 else
 {
     echo "The record was not inserted";
 }
?>