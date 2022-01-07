let map;

let loginForm = document.querySelector('.login-form');

/*document.querySelector('#login-btn').addEventListener('click', function() {
    loginForm.classList.toggle('active');
})*/
/*document.querySelector('#login-btn').onClick = () => {
    loginForm.classList.toggle('active');
}*/

//let loginBtn = document.querySelector('#login-btn');

let loginBtn = document.getElementById('login-btn');

loginBtn.addEventListener('click', function() {
    loginForm.classList.toggle('active');   
})

function loadMap() {
    let cityInfoDiv = JSON.parse(document.getElementById('cityInfoDiv').innerHTML);

    if(cityInfoDiv === "undefined") {
        let latLng = new google.maps.LatLng(38.5612404, 68.6414964);
    
         map = new google.maps.Map(document.getElementById('map'), {
            center: latLng,
            zoom: 12
            
        })
    } else {
        let latLng = new google.maps.LatLng(cityInfoDiv[0].city_lat, cityInfoDiv[0].city_lng);

        map = new google.maps.Map(document.getElementById('map'), {
            center: latLng,
            zoom: 12
        });

        let cityMarker = new google.maps.Marker({
            position: latLng,
            map: map,
            title: cityInfoDiv[0].city_name
        });
    }


    let pharmacyInfo = JSON.parse(document.getElementById('pharmacyInfo').innerHTML);
    
    showPharmacyData(pharmacyInfo);


}

function showPharmacyData(pharmacyData) {
    let infoWindow = new google.maps.InfoWindow;

    Array.prototype.forEach.call(pharmacyData, function(pharmData) {
        let pharmLatLng = new google.maps.LatLng(pharmData.pharmacy_lat, pharmData.pharmacy_lng);

        let infoDiv = document.createElement('div');
        let infoTitle = document.createElement('strong');
        infoTitle.textContent = pharmData.pharmacy_name;
        infoDiv.appendChild(infoTitle);

        let infoImg = document.createElement('img');
        infoImg.src = pharmData.pharmacy_img;
        infoImg.style.width = "100px";
        infoDiv.appendChild(infoImg);


        let pharmMarker = new google.maps.Marker({
            position: pharmLatLng,
            map: map,
            icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/green-dot.png"
            }
        });

        pharmMarker.addListener('click', function() {
            infoWindow.setContent(infoDiv);
            infoWindow.open(map, pharmMarker);
        });
    })
}

let selectAction = document.getElementById('cityInfo');

selectAction.addEventListener('change', function() {
    $.ajax({
        url: "action.php",
        type: "GET",
        data: {
            cityId: document.getElementById('cityInfo').value
        },
        success: function(response) {
            if(response === 'Selected...') {
                alert("Ok");
            } else {
                alert("No");
            }
        }
    });
})
