<?php
 if(!empty($_SESSION['userLogin'])) {
     $pharmacyImgInfo[] = "pharmacy_img";
     $delPharmacyId = $_GET['pId'];

     $tableName = "city_pharmacies";
     $where = "pharmacy_id = $delPharmacyId";

     $pharmaImgFile = $cont->select($pharmacyImgInfo, $tableName, $where);
     $pImgInfo = $pharmaImgFile[0]['pharmacy_img'];

     $delPharmacyInfo = $cont->delete($tableName, $where);

     if($delPharmacyInfo) {
         if(!empty($pImgInfo)) {
            unlink($pImgInfo);
         }
         echo "city record was deleted";
     } else {
         echo "city record was not deleted";
     }
 }
?>