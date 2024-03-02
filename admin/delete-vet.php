<?php
require_once('../classes/veterinarian.class.php');

if (isset($_POST['vetID'])) {
    $veterinarianClass = new Veterinarian();
    $vetID = $_POST['vetID'];

    $deleted = $veterinarianClass->delete($vetID);
    if ($deleted) {
        echo 'Veterinarian deleted successfully.';
    } else {
        echo 'Failed to delete veterinarian.';
    }
} else {
    echo 'Veterinarian ID is missing.';
}
?>
