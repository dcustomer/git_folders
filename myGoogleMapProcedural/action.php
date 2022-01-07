<?php
 session_start();

 if(isset($_GET['cityId'])) {
     $cityId = $_GET['cityId'];

     $conn = mysqli_connect("localhost", "root", "", "ajaxquery");

     if($conn) {
        $city_query = "SELECT * FROM cities WHERE city_id = $cityId";
        $city_res = mysqli_query($conn, $city_query);
        $city_row = mysqli_fetch_array($city_res, MYSQLI_ASSOC);

        $cityData = json_encode($city_row);
        $_SESSION['cityRecords'] = $cityData;

        $pharmacy_query = "SELECT * FROM city_pharmacies WHERE city_id = $cityId";
        $pharmacy_res = mysqli_query($conn, $pharmacy_query);
        while($pharmacy_row = mysqli_fetch_array($pharmacy_res, MYSQLI_ASSOC)) {
            $fetchData[] = $pharmacy_row;
        }

        $allData = json_encode($fetchData);
        $_SESSION['pharmacyRecords'] = $allData;
        header("Location: index.php");

        if($fetchData) {
            echo "Selected...";
        } else {
            echo "Wrong...";
        }
     } else {
         echo "Failed to connect...";
     }
 }
?>