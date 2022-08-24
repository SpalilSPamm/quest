<?php
require_once dirname(__FILE__) . ('\..\dao\Imp\ConferenceCrud.php');
require_once dirname(__FILE__) . ('\..\..\html\update_page.php');
$id = $_POST['hiddenUpdate'];
$db = new ConferenceCrud();
$result = $db->readById($id);

?>
<script>


    JSDATA = <?=json_encode($result[0], JSON_HEX_TAG | JSON_HEX_AMP)?>;
    printInfoConf(JSDATA.name_conference, JSDATA.date_conference, JSDATA.country, JSDATA.lat, JSDATA.lng, JSDATA.id);

    function printInfoConf(name, date, country, lat, lng, id) {
        document.getElementById('name-update').value = name;
        document.getElementById('update-date').value = date;
        document.getElementById('country-update').value = country;
        document.getElementById('update-lat').value = lat;
        document.getElementById('update-lng').value = lng;
        document.getElementById('update-id-delete').value = id;
        document.getElementById('update-id-info').value = id;
    }

</script>

<?php ?>

