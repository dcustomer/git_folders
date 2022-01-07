var map;

var selectCity = document.getElementById('cities');

selectCity.addEventListener('change', function() {
    $.ajax({
        url: 'action.php',
        type: 'GET',
        data: {
            cityId: document.getElementById('cities').value
        },
        success: function(response) {
            if(response === 'Selected...') {
                alert("Everything is OK");
            } else {
                alert("Something went wrong");
            }
        }

    });
});

function loadMap() {
    var cityInfo = JSON.parse(document.getElementById('showCity').innerHTML);

        if(cityInfo === 'undefine') {
            var latLng = new google.maps.LatLng("38.561241", "68.641495");

        map = new google.maps.Map(document.getElementById('cityMap'), {
            center: latLng,
            zoom: 9
        });

        var marker = new google.maps.Marker({
            position: latLng,
            map: map
        });

    } else {
        var latLng = new google.maps.LatLng(cityInfo.city_lat, cityInfo.city_lng);

        map = new google.maps.Map(document.getElementById('cityMap'), {
            center: latLng,
            zoom: 12
        });
    
        var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            title: cityInfo.city_name
        }); 
        
        var allPharmacy = JSON.parse(document.getElementById('showAll').innerHTML);
        showAllInfo(allPharmacy);
    }
    
}

function showAllInfo(allData) {
    var infoWindow = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData, function(data) {
        var pharmacyLatLng = new google.maps.LatLng(data.pharmacy_lat, data.pharmacy_lng);

        var infoDiv = document.createElement('div');
        var infoTitle = document.createElement('strong');
        infoTitle.textContent = data.pharmacy_name;
        //infoDiv.innerHTML = infoTitle;
        infoDiv.appendChild(infoTitle);

        var infoImg = document.createElement('img');
        infoImg.src = 'img/pharmacy.jpg';
        infoImg.style.width = '100px';
        infoDiv.appendChild(infoImg);

        var pharmacyMarker = new google.maps.Marker({
            position: pharmacyLatLng,
            map: map,
            icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/green-dot.png"
            }
        });

        pharmacyMarker.addListener('click', function() {
            infoWindow.setContent(infoDiv);
            infoWindow.open(map, pharmacyMarker);
        });
    });
}

