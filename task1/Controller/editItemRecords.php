<?php
 $updateRec['title'] = $_POST['rewrite'];
 $where = "id=$_POST[id]";

 if($cont->updateListItem($updateRec, $where))
 {
     echo "The record was updated.";
 }
 else
 {
     echo "The record was not updated";
 }
?>