<?php
 session_start();

 /*if(isset($_SESSION['cityRecords'])) {
     echo '<div id="showCity">' . $_SESSION['cityRecords'] . '</div>';
 }

 if(isset($_SESSION['pharmacyRecords'])) {
     //print_r($_SESSION['pharmacyRecords']);
     echo '<div id="showAll">' . $_SESSION['pharmacyRecords'] . '</div>';
 }*/
 
 $dbc = mysqli_connect("localhost", "root", "", "ajaxquery");
 if($dbc) {
     $query = "SELECT city_id, city_name FROM cities";
     $res = mysqli_query($dbc, $query);
 } else {
     echo "Failed to connect...";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #showAll, #showCity {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div id="container">
        <div id="header"></div>
        <div id="citySelect">
            <select name="" id="cities">
                <option value="">Choose the city</option>
                <?php 
                  while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                      echo "<option value = " . $row['city_id'] . ">" . $row['city_name'] . "</option>";
                  }
                ?>
            </select>
        </div>
        <div id="cityMap"></div>
        <div id="footer"></div>

        <?php
          if(isset($_SESSION['cityRecords'])) {
            echo '<div id="showCity">' . $_SESSION['cityRecords'] . '</div>';
        }
       
        if(isset($_SESSION['pharmacyRecords'])) {
            //print_r($_SESSION['pharmacyRecords']);
            echo '<div id="showAll">' . $_SESSION['pharmacyRecords'] . '</div>';
        }
       
        ?>
    </div>
</body>
<script type="text/javascript" src="js/script.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyColY9NMTI0HkITW76D6UJfvyLatScxBY8&callback=loadMap"></script>
</html>