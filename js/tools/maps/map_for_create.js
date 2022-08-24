let map, infoWindow, marker;

document.getElementById('findButton-create').addEventListener("click", addMarker);

function initMap() {
    map = new google.maps.Map(document.getElementById("map-create"), {
        center: {lat: 50.45466, lng: 30.52380},
        zoom: 6,
    });


    marker = new google.maps.Marker(
        {
            position: {lat: 50.45466, lng: 30.52380},
            draggable: true,
            map: map,
        }
    );

    google.maps.event.addListener(marker, 'dragend', function (evt) {
        document.getElementById('create-lat').value = marker.position.lat();
        document.getElementById('create-lng').value = marker.position.lng();

    });

    getPositionMarker();
    infoWindow = new google.maps.InfoWindow();
}

window.initMap = initMap;

function getPositionMarker() {
    document.getElementById('create-lat').value = marker.position.lat();
    document.getElementById('create-lng').value = marker.position.lng();
}

function addMarker() {
    let pos = {
        lat: parseInt(document.getElementById('create-lat').value),
        lng: parseInt(document.getElementById('create-lng').value)
    };
    marker.setPosition(pos);
}