<?php
require_once ('../classes/service.class.php');
require_once ('./tools/functions.php');
$CatergoryClass = new Service();
$services = $CatergoryClass->show();

if (isset($_POST['save'])) {
    $currentDateTime = date('Y-m-d H:i:s');
    $CatergoryClass->serviceName = htmlentities($_POST['serviceName']);
    $CatergoryClass->serviceDescription = htmlentities($_POST['serviceDescription']);
    $CatergoryClass->servicePrice = htmlentities($_POST['servicePrice']);
    $CatergoryClass->created_at = $currentDateTime;
    $CatergoryClass->updated_at = $currentDateTime;

    if (
        validate_field($CatergoryClass->serviceName) &&
        validate_field($CatergoryClass->serviceDescription) &&
        validate_field($CatergoryClass->servicePrice) &&
        validate_field($CatergoryClass->created_at) &&
        validate_field($CatergoryClass->updated_at)
    ) {

        if ($CatergoryClass->add()) {
            header('location: services.php');
            exit;
        } else {
            echo 'An error occured while adding in the database.';
        }
    } else {
        echo 'Failed to add service.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Pet Categories';
require_once ('./include/admin-head.php');
?>

<body>
    <?php
    require_once ('./include/admin-header.php')
        ?>
    <main>
        <?php
        require_once ('./include/admin-sidepanel.php')
            ?>


        <div class="pet-categories-container">
        <section class="pet-type-table" >
        <section class="veterinarian-con">
            <div class="row mx-5 justify-content-end">
                <div class="crud-btn-add col-4 col-sm-auto">
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addServiceModal"><i
                            class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i> Add Type</a>
                </div>
            </div>
        </section>

        <section class="table-con">
            <section class="customer-info-icon row">
                <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <div class="customer-info-head">
                            <h2>Pet Type </h2>
                        </div>

                    </div>
                </div>
            </section>

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

                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="save"
                                    style="background-color: #065916; border: none;">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <div class="table-con px-4">
            <table id="customer" class="table table-striped table-sm text-center">
                <thead>
                    <tr class="table-headpet text-center">
                        <th scope="col"> ID</th>
                        <th scope="col">Pet Type</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="serviceTableBody">
                    <?php foreach ($services as $service):
                        $counter = 1;
                        ?>
                        <tr>
                            <td>
                                <?php echo $service['serviceID']; ?>
                            </td>

                            <td>
                                <?php echo $service['serviceName']; ?>
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
                                                        <label for="serviceName" class="form-label">Type of
                                                            Pet:</label>
                                                        <input type="text" class="form-control" style="width: 465px;"
                                                            id="serviceName<?php echo $service['serviceID']; ?>"
                                                            value="<?php echo $service['serviceName']; ?>" required>
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
                                                sure you want to delete this Category?</h4>
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
                    <?php endforeach;
                    $counter++ ?>




                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination justify-content-end"> <!-- Align pagination to the right -->
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        </section>

        <!-- Second table for pet breed -->
        <section class="pet-breed-table" >
        <section class="veterinarian-con">
            <div class="row mx-5 justify-content-end">
                <div class="crud-btn-add col-4 col-sm-auto">
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addServiceModal"><i
                            class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i> Add Breed</a>
                </div>
            </div>
        </section>

        <section class="table-con">
            <section class="customer-info-icon row">
                <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <div class="customer-info-head">
                            <h2>Pet Breed </h2>
                        </div>

                    </div>
                </div>
            </section>

            <form id="addServiceForm" method="post">
                <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h4 class="modal-title m-4 text-center" id="addServiceModalLabel">Add Breed</h4>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="serviceName" class="form-label">Name of Breed:</label>
                                    <input type="text" class="form-control" style="width: 465px;" id="serviceName"
                                        name="serviceName" required>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="save"
                                    style="background-color: #065916; border: none;">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <div class="table-con px-4">
            <table id="customer" class="table table-striped table-sm text-center">
                <thead>
                    <tr class="table-headpet text-center">
                        <th scope="col"> ID</th>
                        <th scope="col">Pet Breed</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="serviceTableBody">
                    <?php foreach ($services as $service):
                        $counter = 1;
                        ?>
                        <tr>
                            <td>
                                <?php echo $service['serviceID']; ?>
                            </td>

                            <td>
                                <?php echo $service['serviceName']; ?>
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
                                                sure you want to delete this Category?</h4>
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
                    <?php endforeach;
                    $counter++ ?>


                </tbody>
            </table>
            <nav aria-label="...">
                <ul class="pagination justify-content-end"> <!-- Align pagination to the right -->
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        </section>
        </div>



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

        <script>
            // Example JavaScript to handle pagination
            document.getElementById('prev').addEventListener('click', function (event) {
                // Handle "Previous" button click event
                event.preventDefault();
                // Perform necessary actions to show previous page
                // For example, update table data, hide/show appropriate rows, etc.
                console.log('Previous button clicked');
            });

            document.getElementById('next').addEventListener('click', function (event) {
                // Handle "Next" button click event
                event.preventDefault();
                // Perform necessary actions to show next page
                // For example, update table data, hide/show appropriate rows, etc.
                console.log('Next button clicked');
            });
        </script>

    </main>
    <?php
    require_once ('./include/js.php')
        ?>

</body>

</html>