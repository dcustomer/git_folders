    <!-- main section starts -->
    <section class="main" id="main">
          <div class="selectCity" id="selectCity">
              <select name="" id="cityInfo" class="cityInfo">
                  <option value="">select city</option>
                  <?php
                   foreach($cityData as $key => $value) {
                       echo "<option value=" . $value['city_id'] . ">" . $value['city_name'] . "</option>";
                   }
                  ?>
              </select>
          <div class="map" id="map"></div>
        
      </section>
    <!-- main section ends -->

    <!-- custom js script here -->

