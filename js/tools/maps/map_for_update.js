let map, infoWindow, marker;

document.getElementById('findButton-update').addEventListener("click", addMarker);

function initMap() {
    map = new google.maps.Map(document.getElementById("map-update"), {
        center: {
            lat: parseFloat(document.getElementById('update-lat').value),
            lng: parseFloat(document.getElementById('update-lng').value)
        },
        zoom: 6,
    });


    marker = new google.maps.Marker(
        {
            position: {
                lat: parseFloat(document.getElementById('update-lat').value),
                lng: parseFloat(document.getElementById('update-lng').value)
            },
            draggable: true,
            map: map,
        }
    );

    google.maps.event.addListener(marker, 'dragend', function (evt) {
        document.getElementById('update-lat').value = marker.position.lat();
        document.getElementById('update-lng').value = marker.position.lng();

    });

    getPositionMarker();
    infoWindow = new google.maps.InfoWindow();
}

window.initMap = initMap;

function getPositionMarker() {
    document.getElementById('update-lat').value = marker.position.lat();
    document.getElementById('update-lng').value = marker.position.lng();
}

function addMarker() {
    let pos = {
        lat: parseFloat(document.getElementById('update-lat').value),
        lng: parseFloat(document.getElementById('update-lng').value)
    };
    marker.setPosition(pos);
}