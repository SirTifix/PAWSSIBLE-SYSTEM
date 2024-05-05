<?php
require_once('../classes/pet.class.php');

if(isset($_POST['petTypeID'])) {
    $petClass = new Pet();
    $petTypeID = $_POST['petTypeID'];
    if($petClass->deleteType($petTypeID)) {
        echo json_encode(array('status' => 'success', 'message' => 'Pet Type deleted successfully'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Failed to delete pet'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'petTypeID not provided'));
}
?>
