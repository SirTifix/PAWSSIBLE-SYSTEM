<?php
session_start();
require_once ('../classes/medical-history.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $record = new MedicalHistory();

    $petId = $_POST['petId'];
    $age = $_POST['age'];
    $Date = $_POST['Date'];
    $veterinarian = $_POST['veterinarian'];
    $history = $_POST['history'];
    $physicalExam = $_POST['physicalExam'];
    $diagnosis = $_POST['diagnosis'];

    $record->petId = $petId;
    $record->ageWeeks = $age;
    $record->recordDate = $Date;
    $record->veterinarian = $veterinarian;
    $record->recordHistory = $history;
    $record->recordExamination = $physicalExam;
    $record->recordTreatment = $diagnosis;
    
    $savedRecordId = $record->add();
    
    echo "<script>window.location.href = './update-medicalRecord.php?petId={$petId}';</script>";
    // Return success response with booking ID*/
    echo json_encode(array('success' => true, 'recordID' => $savedRecordId));
} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

