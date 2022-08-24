<?php

require_once dirname(__FILE__) . ('\..\dao\Imp\ConferenceCrud.php');

$name = $_POST['aname'];
$date = $_POST['adate'];
$country = $_POST['acountry'];
$lat = $_POST['alat'];
$lng = $_POST['alng'];

$db = new ConferenceCrud();
$read = $db->create($name, $country, $date, $lat, $lng);
?>
<script>
    replaceHref();

    function replaceHref() {
        window.location.href = 'http://localhost/questBWT/html/all_conf.php';
    }
</script>
