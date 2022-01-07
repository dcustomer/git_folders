<?php
 if(!empty($_SESSION['userLogin'])) {
     if($_FILES['pharmacyImg']['type'] == "image/jpeg") {
         if(copy($_FILES['pharmacyImg']['tmp_name'], "img/" . $_FILES['pharmacyImg']['name'])) {
            $pharmacyUpdInfo['pharmacy_name'] = $_POST['pharmacyName'];
            $pharmacyUpdInfo['pharmacy_address'] = $_POST['pharmacyAddress'];
            $pharmacyUpdInfo['pharmacy_lat'] = $_POST['pharmacyLat'];
            $pharmacyUpdInfo['pharmacy_lng'] = $_POST['pharmacyLng'];
            $pharmacyImgUrl = "img/" . $_FILES['pharmacyImg']['name'];
            $pharmacyUpdInfo['pharmacy_img'] = $pharmacyImgUrl;
            $pharmacyUpdInfo['city_id'] = $_POST['pharmaCity'];
       
            $tableName = "city_pharmacies";
       
            $pUpdId = $_POST['pharmacyID'];
            $where = "pharmacy_id = $pUpdId";
       
            $pharmacyUpdRes = $cont->update($pharmacyUpdInfo, $tableName, $where);
       
            if($pharmacyUpdRes) {
                echo "pharmacy record was updated";
            } else {
                echo "pharmacy record was not updated";
            }
         }
     } else {
         echo "mismatch the format";
     }
     
 }
?>