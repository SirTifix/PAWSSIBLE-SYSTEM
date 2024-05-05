<?php
require_once('../classes/pet.class.php');

if(isset($_POST['petBreedID'])) {
    $petClass = new Pet();
    $petBreedID = $_POST['petBreedID'];
    if($petClass->deleteBreed($petBreedID)) {
        echo json_encode(array('status' => 'success', 'message' => 'Pet Breed deleted successfully'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Failed to delete pet'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'petBreedID not provided'));
}
?>
