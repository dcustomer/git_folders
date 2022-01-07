<div class="formDiv" id="formDiv">
    <p>form adding city</p>
    <form action="" method="POST" class="addCityForm" id="addCityForm">
        <label for="cityName">city name:</label> <input type="text" name="cityName" class="inputView" id="inputView" required>
        <label for="cityLat">city latitude:</label> <input type="text" name="cityLat" class="inputView" id="inputView" required>
        <label for="cityLng">city langitude:</label> <input type="text" name="cityLng" class="inputView" id="inputView" required>
        <input type="hidden" name="pagename" value="admSide">
        <input type="hidden" name="admPagename" value="addCityRes">
        <input type="submit" value="add city" class="btn">
    </form>
</div>