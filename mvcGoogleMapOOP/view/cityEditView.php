<div class="formDiv" id="formDiv">
    <p>form adding city</p>
    <form action="" method="POST" class="addCityForm" id="addCityForm">
        <label for="cityName">city name:</label> <input type="text" name="cityName" value="<?php echo $cityEditRecords[0]['city_name']; ?>" class="inputView" id="inputView" required>
        <label for="cityLat">city latitude:</label> <input type="text" name="cityLat" value="<?php echo $cityEditRecords[0]['city_lat']; ?>" class="inputView" id="inputView" required>
        <label for="cityLng">city langitude:</label> <input type="text" name="cityLng" value="<?php echo $cityEditRecords[0]['city_lng']; ?>" class="inputView" id="inputView" required>
        <input type="hidden" name="cityID" value="<?php echo $cityEditRecords[0]['city_id']; ?>">
        <input type="hidden" name="pagename" value="admSide">
        <input type="hidden" name="admPagename" value="editCityResults">
        <input type="submit" value="edit city" class="btn">
    </form>
</div>