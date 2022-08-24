printInfoConf("Kirill", '2020-07-08', "Kuiv", 50.11, 53.77);

function printInfoConf(name, date, country, lat, lng, id) {
    document.getElementById('name-for-conf').innerText = name;
    document.getElementById('date-info').innerText = date;
    document.getElementById('country-info').innerText = country;
    document.getElementById('info-lat').innerText = lat;
    document.getElementById('info-lng').innerText = lng;
    //window.location.href = "http://localhost/questBWT/html/info_page.php";
}