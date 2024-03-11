<?php
require_once('../classes/service.class.php');

$service = new Service();

$services = $service->populateCombobox();
if($services){
    echo json_encode($services);
}
else{
    echo "error retrieveing the data";
}
?>
