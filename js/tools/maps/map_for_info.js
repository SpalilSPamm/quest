let map, infoWindow, marker;


function initMap() {
    map = new google.maps.Map(document.getElementById("map-info"), {
        center: {
            lat: parseFloat(document.getElementById('info-lat').innerText),
            lng: parseFloat(document.getElementById('info-lng').innerText)
        },
        draggable: false,
        zoom: 6,
    });


    marker = new google.maps.Marker(
        {
            position: {
                lat: parseFloat(document.getElementById('info-lat').innerText),
                lng: parseFloat(document.getElementById('info-lng').innerText)
            },
            map: map,
        }
    );

    infoWindow = new google.maps.InfoWindow();
}

window.initMap = initMap;
