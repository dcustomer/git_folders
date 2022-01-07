<?php
 if(!empty($_SESSION['userLogin'])) {
     if($_FILES['pharmacyImg']['type'] == "image/jpeg") {
         if(copy($_FILES['pharmacyImg']['tmp_name'], "img/" . $_FILES['pharmacyImg']['name'])) {
             $pharmacyInsInfo['pharmacy_name'] = $_POST['pharmacyName'];
             $pharmacyInsInfo['pharmacy_address'] = $_POST['pharmacyAddress'];
             $pharmacyInsInfo['pharmacy_lat'] = $_POST['pharmacyLat'];
             $pharmacyInsInfo['pharmacy_lng'] = $_POST['pharmacyLng'];
             $imgUrl = "img/" . $_FILES['pharmacyImg']['name'];
             $pharmacyInsInfo['pharmacy_img'] = $imgUrl;
             $pharmacyInsInfo['city_id'] = $_POST['city'];
             $tableName = "city_pharmacies";

             $pharmacyInsResults = $cont->insert($pharmacyInsInfo, $tableName);

             if($pharmacyInsResults) {
                 echo "pharmacy record was inserted";
             } else {
                 echo "pharmacy record was not inserted";
             }
         }
     } else {
         echo "mismatch image format";
     }
 }
 /*echo $_POST['pharmacyName'] . "<br>";
 echo $_POST['pharmacyAddress'] . "<br>";
 echo $_POST['pharmacyLat'] . "<br>";
 echo $_POST['pharmacyLng'] . "<br>";
 echo $_FILES['pharmacyImg']['name'] . "<br>";
 echo $_FILES['pharmacyImg']['type'] . "<br>";
 echo $_FILES['pharmacyImg']['tmp_name'] . "<br>";
 echo $_POST['city'];*/
?>