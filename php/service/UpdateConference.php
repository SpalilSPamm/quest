<?php
require_once dirname(__FILE__) . ('\..\dao\Imp\ConferenceCrud.php');

$name = $_POST['pname'];
$date = $_POST['pdate'];
$country = $_POST['pcountry'];
$lat = $_POST['plat'];
$lng = $_POST['plng'];
$id = $_POST['pid'];

$db = new ConferenceCrud();
$read = $db->update($name, $country, $date, $lat, $lng, $id);
?>

<script>
    replaceHref();

    function replaceHref() {
        window.location.href = 'http://localhost/questBWT/html/all_conf.php';
    }
</script>