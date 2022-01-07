<div class="citiesRecDiv">
    <p>city Info</p>
    <table class="cityTable">
        <tr>
            <th>#</th><th>name</th><th>latitude</th><th>langitude</th><th>action</th><th>action</th>
        </tr>
        <?php
         $count = 0;
         foreach($cityAllResults as $key => $value) {
             $count++;
             echo "<tr>";
             echo "<td>" . $count . "</td><td>" . $value['city_name'] . "</td><td>" . $value['city_lat'] . "</td><td>" . $value['city_lng'] . "</td><td><a href='index.php?pagename=admSide&admPagename=editCityRec&cId=$value[city_id]'>edit</a></td><td><a href='index.php?pagename=admSide&admPagename=deleteCityRec&cId=$value[city_id]'>delete</a></td>";
         }
        ?>
    </table>
</div>