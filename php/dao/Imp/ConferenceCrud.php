<?php
require_once dirname(__FILE__) . ('\..\CrudInterface.php');
require dirname(__FILE__) . ('\..\..\connectorDB\ConnectorMySQL.php');
require dirname(__FILE__) . ('\..\..\models\Conference.php');


class ConferenceCrud implements CrudInterface
{

    const READ_ALL = "SELECT * FROM `conferences`";
    const READ_BY_ID = "SELECT * FROM `conferences` WHERE conferences.id=?;";
    const DELETE_BY_ID = "DELETE FROM `conferences` WHERE conferences.id=?;";
    const UPDATE_BY_ID = "UPDATE `conferences` SET `name_conference`=?,`country`=?,`date_conference`=?,`lat`=?,`lng`=? WHERE conferences.id=?;";
    const CREATE_OBJECT = "INSERT INTO `conferences`( `name_conference`, `country`, `date_conference`, `lat`, `lng`) VALUES (?,?,?,?,?)";

    public function create($name, $country, $date, $lat, $lng)
    {
        // TODO: Implement create() method.
        $conference = ConnectorMySQL::getInstance()->getConnection()->prepare(self::CREATE_OBJECT);
        $conference->execute(array($name, $country, $date, $lat, $lng));
    }

    public function readAll(): array
    {
        // TODO: Implement readAll() method.

        return ConnectorMySQL::getInstance()->getConnection()->query(self::READ_ALL)->fetchAll();

    }

    public function readById($idObj): array
    {
        // TODO: Implement readById() method.
        $conference = ConnectorMySQL::getInstance()->getConnection()->prepare(self::READ_BY_ID);
        $conference->execute(array($idObj));
        return $conference->fetchAll();

    }

    public function update($name, $country, $date, $lat, $lng, $id)
    {
        // TODO: Implement update() method.
        $conference = ConnectorMySQL::getInstance()->getConnection()->prepare(self::UPDATE_BY_ID);
        $conference->execute(array($name, $country, $date, $lat, $lng, $id));
    }

    public function delete($objId)
    {
        // TODO: Implement delete() method.
        $conference = ConnectorMySQL::getInstance()->getConnection()->prepare(self::DELETE_BY_ID);
        $conference->execute(array($objId));
    }
}

$zoom = new Conference();
$zoom->setName('four-conf');
$zoom->setCountry('Egypt');
$zoom->setDate('2022-08-11');
$zoom->setLat('33.333');
$zoom->setLng('44.444');

?>

