<?php
require_once('../classes/vaccine.class.php');

if (isset($_POST['vaccineID'])) {
    $vaccineClass = new Vaccine();
    $vaccineID = $_POST['vaccineID'];

    $deleted = $vaccineClass->delete($vaccineID);
    if ($deleted) {
        echo 'Vaccine deleted successfully.';
    } else {
        echo 'Failed to delete customer and associated pets.';
    }
} else {
    echo 'Vaccine ID is missing.';
}

?>
