<?php
require_once ('../classes/pet.class.php');
require_once ('./tools/functions.php');
$petClass = new Pet();
$petTypes = $petClass->showPetTypes();
$petBreeds = $petClass->showPetBreed();

if (isset($_POST['addType'])) {
    $petClass->petType = htmlentities($_POST['petType']);

    if (
        validate_field($petClass->petType)
    ) {

        if ($petClass->addPetType()) {
            header('location: pet-category.php');
            exit;
        } else {
            echo 'An error occured while adding in the database.';
        }
    } else {
        echo 'Failed to add service.';
    }
}

if (isset($_POST['addBreed'])) {
    $petClass->petBreed = htmlentities($_POST['petBreed']);

    if (
        validate_field($petClass->petBreed)
    ) {

        if ($petClass->addPetBreed()) {
            header('location: pet-category.php');
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
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addTypeModal"><i
                            class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i> Add Type</a>
                </div>
            </div>
        </section>

        <section class="pet-table-con">
            <section class="customer-info-icon row">
                <div class="pet-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <div class="customer-info-head">
                            <h2>Type of Pet </h2>
                        </div>

                    </div>
                </div>
            </section>

            <form id="addTypeForm" method="post">
                <div class="modal fade" id="addTypeModal" tabindex="-1" aria-labelledby="addTypeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h4 class="modal-title m-4 text-center" id="addTypeModalLabel">Add Pet Type</h4>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="petType" class="form-label">Pet Type:</label>
                                    <input type="text" class="form-control" style="width: 465px;" id="petType"
                                        name="petType" required>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="addType"
                                    style="background-color: #065916; border: none;">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <div class="pet-table-con px-4">
            <table id="customer" class="table table-striped table-sm text-center">
                <thead>
                    <tr class="table-headpet text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Pet Type</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="serviceTableBody">
                    <?php foreach ($petTypes as $type):
                        ?>
                        <tr>
                            <td>
                                <?php echo $type['petTypeID']; ?>
                            </td>

                            <td>
                                <?php echo $type['petType']; ?>
                            </td>

                            <td>
                                <?php echo $type['created_at']; ?>
                            </td>
                            <td class="d-flex justify-content-end align-items-center">
                                <div class="crud-btn">
                                    <a href="" class="crud-icon-delete" data-bs-toggle="modal"
                                        data-bs-target="#deleteTypeModal<?php echo $type['petTypeID']; ?>">
                                        <i class="fa-solid fa-trash-can m-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="deleteTypeModal<?php echo $type['petTypeID']; ?>"
                                    tabindex="-1" aria-labelledby="deleteTypeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteTypeModalLabel">Are you
                                                sure you want to delete this pet type?</h4>
                                            <div class="modal-footer justify-content-between" style="border: none;">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary"
                                                    style="background-color: #FF0000; border: none;"
                                                    onclick="deleteType(<?php echo $type['petTypeID']; ?>)">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach;?>




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
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addBreedModal"><i
                            class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i> Add Breed</a>
                </div>
            </div>
        </section>

        <section class="pet-table-con">
            <section class="customer-info-icon row">
                <div class="pet-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <div class="customer-info-head">
                            <h2>Pet Breed </h2>
                        </div>

                    </div>
                </div>
            </section>

            <form id="addBreedForm" method="post">
                <div class="modal fade" id="addBreedModal" tabindex="-1" aria-labelledby="addBreedModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h4 class="modal-title m-4 text-center" id="addBreedModalLabel">Add Breed</h4>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="petBreed" class="form-label">Name of Breed:</label>
                                    <input type="text" class="form-control" style="width: 465px;" id="petBreed"
                                        name="petBreed" required>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="addBreed"
                                    style="background-color: #065916; border: none;">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <div class="pet-table-con px-4">
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
                    <?php foreach ($petBreeds as $breed):
                        ?>
                        <tr>
                            <td>
                                <?php echo $breed['petBreedID']; ?>
                            </td>

                            <td>
                                <?php echo $breed['petBreed']; ?>
                            </td>

                            <td>
                                <?php echo $breed['created_at']; ?>
                            </td>
                            <td class="d-flex justify-content-end align-items-center">
                                <div class="crud-btn">
                                    <a href="" class="crud-icon-delete" data-bs-toggle="modal"
                                        data-bs-target="#deleteBreedModal<?php echo $breed['petBreedID']; ?>">
                                        <i class="fa-solid fa-trash-can m-1" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="modal fade" id="deleteBreedModal<?php echo $breed['petBreedID']; ?>"
                                    tabindex="-1" aria-labelledby="deleteBreedModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteBreedModalLabel">Are you
                                                sure you want to delete this breed?</h4>
                                            <div class="modal-footer justify-content-between" style="border: none;">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary"
                                                    style="background-color: #FF0000; border: none;"
                                                    onclick="deleteBreed(<?php echo $breed['petBreedID']; ?>)">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach;?>


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

            function deleteType(petTypeID) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Pet Type deleted successfully!');
                            window.location.reload();
                        } else {
                            alert('Failed to delete pet type.');
                        }
                    }
                };
                xhr.open('POST', 'delete-type.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('petTypeID=' + petTypeID);

            }

            function deleteBreed(petBreedID) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Breed deleted successfully!');
                            window.location.reload();
                        } else {
                            alert('Failed to delete petBreed.');
                        }
                    }
                };
                xhr.open('POST', 'delete-breed.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('petBreedID=' + petBreedID);

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