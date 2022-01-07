<?php
 $cityAddInfo['city_name'] = $_POST['cityName'];
 $cityAddInfo['city_lat'] = $_POST['cityLat'];
 $cityAddInfo['city_lng'] = $_POST['cityLng'];

 $tableName = "cities";

 $cityAddResult = $cont->insert($cityAddInfo, $tableName);

 if($cityAddResult) {
     echo "city record was inserted";
 } else {
     echo "city record was not inserted";
 }
?>