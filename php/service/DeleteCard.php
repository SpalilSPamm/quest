<?php
require_once dirname(__FILE__) . ('\..\dao\Imp\ConferenceCrud.php');
$id = $_POST['hidden'];

$db = new ConferenceCrud();
$delete = $db->delete($id);

?>

<script>
    replaceHref();

    function replaceHref() {
        window.location.href = 'http://localhost/questBWT/html/all_conf.php';
    }
</script>

<?php
?>

