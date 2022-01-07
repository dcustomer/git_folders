<?php
 $cityAllRecords = "*";

 $tableName = "cities";

 $cityAllResults = $cont->select($cityAllRecords, $tableName);

 include("view/allCitiesView.php");
?>