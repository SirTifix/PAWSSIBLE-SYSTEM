<?php
require_once('../classes/vaccine.class.php');

if (isset($_POST['vaccineID'])) {
    $vaccineClass = new Vaccine();

    $vaccineClass->vaccineID = htmlentities($_POST['vaccineID']);
    $vaccineClass->vaccineName = htmlentities($_POST['vaccineName']);
    $vaccineClass->vaccineType = htmlentities($_POST['vaccineType']);
    $vaccineClass->vaccineAge = htmlentities($_POST['vaccineAge']);
    $vaccineClass->vaccineDosage = htmlentities($_POST['vaccineDosage']);
    $vaccineClass->vaccineInterval = htmlentities($_POST['vaccineInterval']);
    $vaccineClass->vaccinePrice = htmlentities($_POST['vaccinePrice']);
    $vaccineClass->petType = htmlentities($_POST['petType']);
    $vaccineClass->updated_at = date('Y-m-d H:i:s');

    if ($vaccineClass->update()) {
        echo json_encode(array("success" => true, "message" => "Vaccine updated successfully."));
    } else {
        echo json_encode(array("success" => false, "message" => "Failed to update vaccine."));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}
?>
