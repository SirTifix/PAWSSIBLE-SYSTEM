<?php
require_once('../classes/veterinarian.class.php');

if (isset($_POST['vetID'])) {
    $vetClass = new Veterinarian();

    $vetClass->vetID = htmlentities($_POST['vetID']);
    $vetClass->vetStatus = htmlentities($_POST['vetStatus']);

    if ($vetClass->updateStatus()) {
        echo json_encode(array("success" => true, "message" => "Vet updated successfully."));
    } else {
        echo json_encode(array("success" => false, "message" => "Failed to update Vet."));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}
?>
