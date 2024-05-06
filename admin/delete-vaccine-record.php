<?php
require_once('../classes/medical-history.class.php');

if (isset($_POST['vaccineRecordID'])) {
    $recordClass = new MedicalHistory();
    $vaccineRecordID = $_POST['vaccineRecordID'];

    $deleted = $recordClass->deleteVacRecord($vaccineRecordID);
    if ($deleted) {
        echo 'vaccineRecord deleted successfully.';
    } else {
        echo 'Failed to delete vaccineRecord.';
    }
} else {
    echo 'vaccineRecord ID is missing.';
}
?>
