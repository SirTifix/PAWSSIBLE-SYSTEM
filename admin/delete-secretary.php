<?php
require_once('../classes/secretary.class.php');

if (isset($_POST['secretaryID'])) {
    $secretaryClass = new Secretary();
    $secretaryID = $_POST['secretaryID'];

    $deleted = $secretaryClass->delete($secretaryID);
    if ($deleted) {
        echo 'Secretary deleted successfully.';
    } else {
        echo 'Failed to delete secretary.';
    }
} else {
    echo 'Secretary ID is missing.';
}
?>
