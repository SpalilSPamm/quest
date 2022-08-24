<?php
require_once dirname(__FILE__) . ('\..\dao\Imp\ConferenceCrud.php');


$db = new ConferenceCrud();
$read = $db->readAll();

for ($i = 0; $i < count($read); $i++) {
    ?>
    <script>
        function addNewCard(name_conf, date_conf, id) {

            const row = document.querySelector("#row-card");
            const elem = document.querySelector("#el-card");
            let name = elem.content.getElementById("name-card");
            name.textContent = name_conf;

            let date = elem.content.getElementById("date-card");
            date.textContent = date_conf;

            let card = elem.content.cloneNode(true);
            row.append(card);

            let button = document.getElementById('type');
            button.setAttribute('id', id);

            const list = document.querySelector("#list-href");
            const el_hr = document.querySelector("#el-href");

            let href = el_hr.content.getElementById("href-conf");
            href.textContent = name_conf;

            href.setAttribute('href', "#" + id);

            let temp = el_hr.content.cloneNode(true);
            list.append(temp);

        }
    </script>
    <script>

        JSDATA = <?=json_encode($read[$i], JSON_HEX_TAG | JSON_HEX_AMP)?>;
        addNewCard(JSDATA.name_conference, JSDATA.date_conference, JSDATA.id);

    </script>


    <?php
}

?>

