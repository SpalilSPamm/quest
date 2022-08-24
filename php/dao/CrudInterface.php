<?php

interface CrudInterface
{

    public function create($name, $country, $date, $lat, $lng);

    public function readAll();

    public function readById($idObj);

    public function update($name, $country, $date, $lat, $lng, $id);

    public function delete($objId);
}
