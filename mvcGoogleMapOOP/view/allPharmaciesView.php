<div class="citiesRecDiv">
    <p>city Info</p>
    <table class="cityTable">
        <tr>
            <th>#</th><th>name</th><th>latitude</th><th>langitude</th><th>address</th><th>cityID</th><th>action</th><th>action</th>
        </tr>
        <?php
         $count = 0;
         foreach($pharmacyAllResults as $key => $value) {
             $count++;
             echo "<tr>";
             echo "<td>" . $count . "</td><td>" . $value['pharmacy_name'] . "</td><td>" . $value['pharmacy_lat'] . "</td><td>" . $value['pharmacy_lng'] . "</td><td>" . $value['pharmacy_address'] . "</td><td>" . $value['city_id'] . "</td><td><a href='index.php?pagename=admSide&admPagename=editPharmacyRec&pId=$value[pharmacy_id]'>edit</a></td><td><a href='index.php?pagename=admSide&admPagename=deletePharmacyRec&pId=$value[pharmacy_id]'>delete</a></td>";
         }
        ?>
    </table>
</div>