<?php
require_once dirname(__FILE__) . ('\..\dao\Imp\ConferenceCrud.php');
require_once dirname(__FILE__) . ('\..\..\html\info_page.php');
$id = $_POST['hiddenInfo'];
$db = new ConferenceCrud();
$result = $db->readById($id);

?>
<script>


    JSDATA = <?=json_encode($result[0], JSON_HEX_TAG | JSON_HEX_AMP)?>;
    printInfoConf(JSDATA.name_conference, JSDATA.date_conference, JSDATA.country, JSDATA.lat, JSDATA.lng, JSDATA.id);

    function printInfoConf(name, date, country, lat, lng, id) {
        document.getElementById('name-for-conf').innerText = name;
        document.getElementById('date-info').innerText = date;
        document.getElementById('country-info').innerText = country;
        document.getElementById('info-lat').innerText = lat;
        document.getElementById('info-lng').innerText = lng;
        document.getElementById('info-id').value = id;
        document.getElementById('info-id-update').value = id;
    }

</script>

