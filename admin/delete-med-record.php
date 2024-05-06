<?php
require_once('../classes/medical-history.class.php');

if (isset($_POST['recordID'])) {
    $recordClass = new MedicalHistory();
    $recordID = $_POST['recordID'];

    $deleted = $recordClass->deleteMedRecord($recordID);
    if ($deleted) {
        echo 'record deleted successfully.';
    } else {
        echo 'Failed to delete record.';
    }
} else {
    echo 'Secretary ID is missing.';
}
?>
