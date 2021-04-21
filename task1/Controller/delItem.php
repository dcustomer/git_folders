<?php
  $where = "id = $_GET[id]";
  if($cont->delListItem($where))
  {
      echo "The record was deleted.";
  }
  else
  {
      echo "The record was not deleted.";
  }
?>