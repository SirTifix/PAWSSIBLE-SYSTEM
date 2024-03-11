<?php
require_once('../classes/veterinarian.class.php');

$vetClass = new Veterinarian();

$vets = $vetClass->populateCombobox();
if($vets){
    echo json_encode($vets);
}
else{
    echo "error retrieveing the data";
}
?>
