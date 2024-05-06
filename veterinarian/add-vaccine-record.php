<?php
session_start();
require_once ('../classes/medical-history.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $record = new MedicalHistory();

    $petId = $_POST['petId'];
    $age = $_POST['age'];
    $vaccine = $_POST['vaccine'];
    $veterinarian = $_POST['veterinarian'];
    $vaccineCateg = $_POST['vaccineCateg'];
    $date = $_POST['date'];
    $due = null;

    $record->petId = $petId;
    $record->ageVaccine = $age;
    $record->dateGiven = $date;
    $record->vaccine = $vaccine;
    $record->next_date = $due;
    $record->veterinarian = $veterinarian;
    $record->category = $vaccineCateg;
    
    $savedRecordId = $record->addVaccRecord();
    
    echo "<script>window.location.href = './update-medicalRecord.php?petId={$petId}';</script>";
    // Return success response with booking ID*/
    echo json_encode(array('success' => true, 'recordID' => $savedRecordId));
} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

