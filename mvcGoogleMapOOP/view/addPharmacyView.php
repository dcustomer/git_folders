<div class="formDiv" id="formDiv">
    <p>form adding city</p>
    <form action="" method="POST" class="addCityForm" id="addCityForm" enctype="multipart/form-data">
        <label for="pharmacyName">pharmacy name:</label> <input type="text" name="pharmacyName" class="inputView" id="inputView" required>
        <label for="pharmacyAddress">pharmacy address:</label> <input type="text" name="pharmacyAddress" class="inputView" id="inputView" required>
        <label for="pharmacyLat">pharmacy latitude:</label> <input type="text" name="pharmacyLat" class="inputView" id="inputView" required>
        <label for="pharmacyLng">pharmacy langitude:</label> <input type="text" name="pharmacyLng" class="inputView" id="inputView" required>
        <label for="pharmacyImg">pharmacy img:</label> <input type="file" name="pharmacyImg">
        <label for="city">city:</label> <select name="city" id="">
            <option value="">select city</option>
            <?php
             foreach($pharmacyCityRes as $key => $value) {
                 echo "<option value='$value[city_id]'>" . $value['city_name'] . "</option>";
             }
            ?>
        </select>
        <input type="hidden" name="pagename" value="admSide">
        <input type="hidden" name="admPagename" value="addPharmacyRes">
        <input type="submit" value="add pharmacy" class="btn">
    </form>
</div>