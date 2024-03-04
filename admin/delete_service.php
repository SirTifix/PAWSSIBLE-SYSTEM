<?php
require_once('../classes/service.class.php');

if(isset($_POST['serviceID'])) {
    $serviceClass = new Service();
    $serviceID = $_POST['serviceID'];
    if($serviceClass->delete($serviceID)) {
        echo json_encode(array('status' => 'success', 'message' => 'Service deleted successfully'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Failed to delete service'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'ServiceID not provided'));
}
?>
