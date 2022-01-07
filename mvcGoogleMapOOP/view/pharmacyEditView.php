<div class="formDiv" id="formDiv">
    <p>form adding city</p>
    <form action="" method="POST" class="addCityForm" id="addCityForm" enctype="multipart/form-data">
        <label for="pharmacyName">pharmacy name:</label> <input type="text" name="pharmacyName" value="<?php echo $pharmacyEditRecords[0]['pharmacy_name']; ?>" class="inputView" id="inputView" required>
        <label for="pharmacyAddress">pharmacy address:</label> <input type="text" name="pharmacyAddress" value="<?php echo $pharmacyEditRecords[0]['pharmacy_address']; ?>" class="inputView" id="inputView" required>
        <label for="pharmacyLat">pharmacy latitude:</label> <input type="text" name="pharmacyLat" value="<?php echo $pharmacyEditRecords[0]['pharmacy_lat']; ?>" class="inputView" id="inputView" required>
        <label for="pharmacyLng">pharmacy langitude:</label> <input type="text" name="pharmacyLng" value="<?php echo $pharmacyEditRecords[0]['pharmacy_lng']; ?>" class="inputView" id="inputView" required>
        <label for="pharmacyImg">pharmacy img:</label> <input type="file" name="pharmacyImg" accept=".jpg, jpeg" value="<?php echo $pharmacyEditRecords[0]['pharmacy_img']; ?>">
        <label for="pharmaCity">city:</label> <select name="pharmaCity" id="">
            <?php
             $selected = "selected";
             foreach($pharmacyLocRec as $key => $value) {
                 if($value['city_id'] == $pharmacyEditRecords[0]['city_id']) {
                     echo "<option value='$value[city_id]' $selected>" . $value['city_name'] . "</option>";
                 } else {
                     echo "<option value='$value[city_id]'>" . $value['city_name'] . "</option>";
                 }
             }
            ?>
        </select>
        <input type="hidden" name="pharmacyID" value="<?php echo $pharmacyEditRecords[0]['pharmacy_id']; ?>">
        <input type="hidden" name="pagename" value="admSide">
        <input type="hidden" name="admPagename" value="editPharmacyResults">
        <input type="submit" value="edit pharmacy" class="btn">
    </form>
</div>