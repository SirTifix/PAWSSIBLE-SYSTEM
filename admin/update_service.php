<?php
require_once('../classes/service.class.php');

if (isset($_POST['serviceID'])) {
    $serviceClass = new Service();

    $serviceClass->serviceID = htmlentities($_POST['serviceID']);
    $serviceClass->serviceName = htmlentities($_POST['serviceName']);
    $serviceClass->serviceDescription = htmlentities($_POST['serviceDescription']);
    $serviceClass->servicePrice = htmlentities($_POST['servicePrice']);
    $serviceClass->updated_at = date('Y-m-d H:i:s');

    if ($serviceClass->update()) {
        echo json_encode(array("success" => true, "message" => "Service updated successfully."));
    } else {
        echo json_encode(array("success" => false, "message" => "Failed to update service."));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}
?>
