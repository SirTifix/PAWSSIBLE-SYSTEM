<?php

require_once('../classes/customer.class.php');

if (isset($_POST['customerID'])) {
    $customerClass = new Customer();
    $customerID = $_POST['customerID'];

    $deleted = $customerClass->deleteCustomerAndPets($customerID);
    if ($deleted) {
        echo 'Customer and associated pets deleted successfully.';
    } else {
        echo 'Failed to delete customer and associated pets.';
    }
} else {
    echo 'Customer ID is missing.';
}

?>
