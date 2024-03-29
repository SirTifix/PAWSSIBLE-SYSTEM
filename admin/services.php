<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Service';
require_once('./include/admin-head.php');
require_once('../classes/service.class.php');
require_once('./tools/functions.php');

$serviceClass = new Service();
$services = $serviceClass->show();

if (isset($_POST['save'])) {
    $currentDateTime = date('Y-m-d H:i:s');

    $serviceClass->serviceName = htmlentities($_POST['serviceName']);
    $serviceClass->serviceDescription = htmlentities($_POST['serviceDescription']);
    $serviceClass->servicePrice = htmlentities($_POST['servicePrice']);
    $serviceClass->created_at = $currentDateTime;

    if (
        validate_field($serviceClass->serviceName) &&
        validate_field($serviceClass->serviceDescription) &&
        validate_field($serviceClass->servicePrice) &&
        validate_field($serviceClass->created_at)
    ) {
        if ($serviceClass->add()) {
            header('location: services.php');
        } else {
            echo 'An error occured while adding in the database.';
        }
    }
} else {
    echo 'Error inserting customer record';
}


?>

<body>
    <?php
    require_once('./include/admin-header.php')
        ?>
    <main>
        <?php
        require_once('./include/admin-sidepanel.php')
            ?>
        <section class="veterinarian-con">
            <div class="veterinarian-head">
                <p>Services</p>
            </div>
        </section>

        <section class="filter-con row">
            <div class="row col-7">
                <div class="form-group ps-4 col-sm-auto">
                    <select name="status" class="form-select">
                        <option value="">All Services</option>
                        <option value="">Consultation</option>
                        <option value="">Vaccination</option>
                        <option value="">Deworming</option>
                        <option value="">Imputation</option>
                    </select>
                </div>
            </div>

            <div class="col-5 d-flex justify-content-end">
                <div class="crud-btn">
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addServiceModal"><i
                            class="fa-solid fa-circle-plus me-2" aria-hidden="true"></i> Add</a>
                </div>

                <form id="addServiceForm" method="post">
                    <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h4 class="modal-title m-4 text-center" id="addServiceModalLabel">Add Service</h4>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="serviceName" class="form-label">Name of Service:</label>
                                        <input type="text" class="form-control" style="width: 465px;" id="serviceName"
                                            name="serviceName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="serviceDescription" class="form-label">Description:</label>
                                        <textarea class="form-control" style="width: 465px;" id="serviceDescription"
                                            name="serviceDescription" rows="4" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="servicePrice" class="form-label">Price:</label>
                                        <input type="number" class="form-control" style="width: 465px;"
                                            id="servicePrice" name="servicePrice" required>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between" style="border: none;">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary" name="save"
                                        style="background-color: #065916; border: none;">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>

        </section>

        <section class="table-con">
            <div class="table-wrapper">
                <table class="table table-bordered" style="background-color: white; text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">Service ID</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Last Update</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($services as $service): 
                            $counter = 1;
                            ?>
                            <tr>
                                <td>
                                    <?php echo $counter; ?>
                                </td>
                                <td>
                                    <?php echo $service['serviceName']; ?>
                                </td>
                                <td>
                                    <?php echo $service['serviceDescription']; ?>
                                </td>
                                <td>
                                    <?php echo $service['servicePrice']; ?>
                                </td>
                                <td>
                                    <?php echo $service['created_at']; ?>
                                </td>
                                <td class="d-flex justify-content-end align-items-center">
                                    <div class="crud-btn">
                                        <a href="" class="crud-icon-update" data-bs-toggle="modal"
                                            data-bs-target="#updateServiceModal<?php echo $service['serviceID']; ?>">
                                            <i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="modal fade" id="updateServiceModal<?php echo $service['serviceID']; ?>"
                                        tabindex="-1" aria-labelledby="updateServiceModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <h4 class="modal-title m-4 text-center" id="updateServiceModalLabel">Update
                                                    Service</h4>
                                                <div class="modal-body">
                                                    <form id="updateServiceForm<?php echo $service['serviceID']; ?>">
                                                        <div class="mb-3">
                                                            <label for="serviceName" class="form-label">Name of
                                                                Service:</label>
                                                            <input type="text" class="form-control" style="width: 465px;"
                                                                id="serviceName<?php echo $service['serviceID']; ?>"
                                                                value="<?php echo $service['serviceName']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="serviceDescription"
                                                                class="form-label">Description:</label>
                                                            <textarea class="form-control" style="width: 465px;"
                                                                id="serviceDescription<?php echo $service['serviceID']; ?>"
                                                                rows="4"
                                                                required><?php echo $service['serviceDescription']; ?></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="servicePrice" class="form-label">Price:</label>
                                                            <input type="number" class="form-control" style="width: 465px;"
                                                                id="servicePrice<?php echo $service['serviceID']; ?>"
                                                                value="<?php echo $service['servicePrice']; ?>" required>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-between" style="border: none;">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary"
                                                        style="background-color: #065916; border: none;"
                                                        onclick="updateService(<?php echo $service['serviceID']; ?>)">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crud-btn">
                                        <a href="" class="crud-icon-delete" data-bs-toggle="modal"
                                            data-bs-target="#deleteServiceModal<?php echo $service['serviceID']; ?>">
                                            <i class="fa-solid fa-trash-can m-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="modal fade" id="deleteServiceModal<?php echo $service['serviceID']; ?>"
                                        tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <h4 class="modal-title m-4 text-center" id="deleteServiceModalLabel">Are you
                                                    sure you want to delete this service?</h4>
                                                <div class="modal-footer justify-content-between" style="border: none;">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary"
                                                        style="background-color: #FF0000; border: none;"
                                                        onclick="deleteService(<?php echo $service['serviceID']; ?>)">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $counter++?>


                    </tbody>
                </table>
            </div>
        </section>
        <script>
            function updateService(serviceID) {
                var serviceName = document.getElementById('serviceName' + serviceID).value;
                var serviceDescription = document.getElementById('serviceDescription' + serviceID).value;
                var servicePrice = document.getElementById('servicePrice' + serviceID).value;

                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            window.location.reload();
                        } else {
                            alert('Failed to update service.');
                        }
                    }
                };
                xhr.open('POST', 'update_service.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('serviceID=' + serviceID + '&serviceName=' + encodeURIComponent(serviceName) + '&serviceDescription=' + encodeURIComponent(serviceDescription) + '&servicePrice=' + encodeURIComponent(servicePrice));
            }

            function deleteService(serviceID) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Service deleted successfully!');
                            window.location.reload();
                        } else {
                            alert('Failed to delete service.');
                        }
                    }
                };
                xhr.open('POST', 'delete_service.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('serviceID=' + serviceID);

            }
        </script>
    </main>
    <?php
    require_once('./include/js.php')
        ?>

</body>

</html>