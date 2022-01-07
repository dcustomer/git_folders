<?php
 if(!empty($_SESSION['userLogin'])) {
     $cityUpdInfo['city_name'] = $_POST['cityName'];
     $cityUpdInfo['city_lat'] = $_POST['cityLat'];
     $cityUpdInfo['city_lng'] = $_POST['cityLng'];

     $tableName = "cities";

     $cUpdId = $_POST['cityID'];
     $where = "city_id = $cUpdId";

     $cityUpdRes = $cont->update($cityUpdInfo, $tableName, $where);

     if($cityUpdRes) {
         echo "city record was updated";
     } else {
         echo "city record was not updated";
     }
 }
?>