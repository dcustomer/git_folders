<?php
 $cityInfo[] = "city_id";
 $cityInfo[] = "city_name";

 $tableName = "cities";

 $cityData = $cont->select($cityInfo, $tableName);

 include("view/content.php");

 
 if(isset($_SESSION['cityAllData'])) {
     echo '<div id="cityInfoDiv">' . $_SESSION['cityAllData'] . '</div>';
 }
 if(isset($_SESSION['pharmacyAllData'])) {
     echo '<div id="pharmacyInfo">' . $_SESSION['pharmacyAllData'] . '</div>';
 }

?>