<?php
require_once('../classes/vaccine.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vaccineID = $_POST['vaccineID'];
    $vaccineClass = new Vaccine();
    $vaccineData = $vaccineClass->showByID($vaccineID);

    echo json_encode($vaccineData);
}
?>