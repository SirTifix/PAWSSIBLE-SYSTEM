<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Vaccine';
require_once('./include/admin-head.php');
require_once('../classes/vaccine.class.php');

$vaccineClass = new Vaccine();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vaccineName = $_POST['Vaccine'];
    $vaccineType = $_POST['selectedVaccineType'];
    $vaccineAge = $_POST['age'];
    $vaccineDosage = $_POST['dosage'];
    $vaccineInterval = $_POST['weeksInterval'];
    $vaccinePrice = $_POST['price'];
    $petType = $_POST['selectedPetType'];
    $created_at = date('Y-m-d H:i:s');
    $updated_at = "No record";

    $vaccineClass->vaccineName = $vaccineName;
    $vaccineClass->vaccineType = $vaccineType;
    $vaccineClass->vaccineAge = $vaccineAge;
    $vaccineClass->vaccineDosage = $vaccineDosage;
    $vaccineClass->vaccineInterval = $vaccineInterval;
    $vaccineClass->vaccinePrice = $vaccinePrice;
    $vaccineClass->petType = $petType;
    $vaccineClass->created_at = $created_at;
    $vaccineClass->updated_at = $updated_at;

    $result = $vaccineClass->add();

    if ($result) {
        header("location: vaccines.php");
    } else {
        echo "Failed to add vaccine.";
    }
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
            <div class="row mx-5 justify-content-end">
                <div class="crud-btn-add col-4 col-sm-auto">
                    <a href="" class="crud-text" data-bs-toggle="modal" data-bs-target="#addVaccineModal"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i>Add Vaccine</a>
                </div>
            </div>
        </section>

        <section class="table-con">
            <section class="customer-info-icon row  ">
                <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <div class="customer-info-head">
                            <h2>Vaccine</h2>
                        </div>

                        <div class="row">
                            <div class="form-group col-6 col-sm-auto">
                                <select id="dateRangeSelect" class="form-select">
                                    <option value="">Select Pet Type</option>
                                    <option value="all">All</option>
                                    <option value="dog">Dog</option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>

                            <div class="form-group col-6 col-sm-auto">
                                <select name="status" class="form-select">
                                    <option value="">Select Vaccine Type</option>
                                    <option value="vaccine1">Annual Booster</option>
                                    <option value="vaccine2">Primary Series</option>
                                    <option value="vaccine3">Deworming</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="table-wrapper ">

                <table id="customer" class="table table-striped table-sm">
                    <thead>
                        <tr class="table-headpet text-center">
                            <th scope="col">Vaccine ID</th>
                            <th scope="col">Vaccine</th>
                            <th scope="col">Vaccine Type</th>
                            <th scope="col">Age(weeks)</th>
                            <th scope="col">Dosage</th>
                            <th scope="col">Weeks Interval</th>
                            <th scope="col">Price</th>
                            <th scope="col">Pet Type</th>
                            <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="petHistoryTableBody">
                        <?php
                        $vaccineList = $vaccineClass->show();
                        $id = 1;
                        foreach ($vaccineList as $vaccine) {
                            echo "<tr class='table-bodypet'>";
                            echo "<td>{$id}</td>";
                            echo "<td>{$vaccine['vaccineName']}</td>";
                            echo "<td>{$vaccine['vaccineType']}</td>";
                            echo "<td>{$vaccine['vaccineAge']}</td>";
                            echo "<td>{$vaccine['vaccineDosage']}</td>";
                            echo "<td>{$vaccine['vaccineInterval']}</td>";
                            echo "<td>{$vaccine['vaccinePrice']}</td>";
                            echo "<td>{$vaccine['petType']}</td>";
                            echo "<td class='d-flex justify-content-center align-items-center'>";
                            echo "<div class='crud-btn'>";
                            echo "<a href='' class='edit-btn' data-bs-toggle='modal' data-bs-target='#updateVaccineModal' onclick='populateFields({$vaccine['vaccineID']})'>";
                            echo "<i class='fa-regular fa-pen-to-square' aria-hidden='true'></i></a>";
                            echo "</div>";
                            echo "<div class='crud-btn'>";
                            echo "<a href='' class='delete-btn' data-bs-toggle='modal' data-bs-target='#deleteVaccineModal' data-vaccine-id='{$vaccine['vaccineID']}'>";
                            echo "<i class='fa-regular fa-trash-can' aria-hidden='true'></i></a>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                            $id++;
                        }
                        ?>
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
            </div>
            </div>
            <section>
                <div class="modal fade" id="addVaccineModal" tabindex="-1" aria-labelledby="updateDModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center align-items-center" style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                                <h2 class="modal-title">Vaccine</h2>
                                </button>
                            </div>
                            <div>
                                <form action="" method="post" id="vaccineForm">
                                    <div class="mt-4 mx-5">
                                        <div class="d-flex">
                                            <label for="Vaccine" class="form-label-vaccine fw-bold p-2">Vaccine:</label>
                                            <input type="text" class="form-control-vaccine p-2" id="Vaccine" name="Vaccine" required>
                                        </div>
                                        <div class="d-flex">
                                            <label for="VaccineType" class="form-label-vaccine fw-bold p-2">Vaccine Type:</label>
                                            <select class="form-select form-control-vaccine" id="vaccinetype" name="vaccinetype" required>
                                                <option value="">Select Vaccine Type</option>
                                                <option value="Primary Series">Primary Series</option>
                                                <option value="Annual Boosters">Annual Boosters</option>
                                                <option value="Deworming">Deworming</option>
                                            </select>
                                        </div>
                                        <div class="d-flex">
                                            <label for="age" class="form-label-vaccine fw-bold p-2">Age(weeks):</label>
                                            <input type="text" class="form-control-vaccine p-2" id="age" name="age" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="dosage" class="form-label-vaccine fw-bold">Dosage:</label>
                                            <input type="text" class="form-control-vaccine" id="dosage" name="dosage" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="weeksInterval" class="form-label-vaccine fw-bold">Weeks Interval:</label>
                                            <input type="text" class="form-control-vaccine" id="weeksInterval" name="weeksInterval" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="price" class="form-label-vaccine fw-bold">Price:</label>
                                            <input type="text" class="form-control-vaccine" id="price" name="price" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="petType" class="form-label-vaccine fw-bold">Pet Type: </label>
                                            <select class="form-select form-control-vaccine" id="petType" name="petType" required>
                                                <option value="">Select Pet Type</option>
                                                <option value="Dog">Dog</option>
                                                <option value="Cat">Cat</option>
                                            </select>
                                            <input type="hidden" name="selectedVaccineType" id="selectedVaccineType">
                                            <input type="hidden" name="selectedPetType" id="selectedPetType">
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="submitForm()">Add</button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </section>

            <section>
                <div class="modal fade" id="updateVaccineModal" tabindex="-1" aria-labelledby="updateDModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center align-items-center" style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                                <h2 class="modal-title">Vaccine</h2>
                                </button>
                            </div>
                            <div>
                                <div class="mt-4 mx-5">
                                    <div class="d-flex">
                                        <label for="Vaccine" class="form-label-vaccine fw-bold p-2">Vaccine:</label>
                                        <input type="text" class="form-control-vaccine p-2" id="Vaccine" name="Vaccine" required>
                                    </div>
                                    <div class="d-flex">
                                        <label for="VaccineType" class="form-label-vaccine fw-bold p-2">Vaccine Type:</label>
                                        <select class="form-select form-control-vaccine" id="vaccinetype" name="vaccinetype" required>
                                            <option value="">Select Vaccine Type</option>
                                            <option value="Primary Series">Primary Series</option>
                                            <option value="Annual Boosters">Annual Boosters</option>
                                            <option value="Deworming">Deworming</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <label for="age" class="form-label-vaccine fw-bold p-2">Age(weeks):</label>
                                        <input type="text" class="form-control-vaccine p-2" id="age" name="age" required>
                                    </div>

                                    <div class="d-flex">
                                        <label for="dosage" class="form-label-vaccine fw-bold">Dosage:</label>
                                        <input type="text" class="form-control-vaccine" id="dosage" name="dosage" required>
                                    </div>

                                    <div class="d-flex">
                                        <label for="weeksInterval" class="form-label-vaccine fw-bold">Weeks Interval:</label>
                                        <input type="text" class="form-control-vaccine" id="weeksInterval" name="weeksInterval" required>
                                    </div>

                                    <div class="d-flex">
                                        <label for="price" class="form-label-vaccine fw-bold">Price:</label>
                                        <input type="text" class="form-control-vaccine" id="price" name="price" required>
                                    </div>


                                    <div class="d-flex">
                                        <label for="petType" class="form-label-vaccine fw-bold">Pet Type: </label>
                                        <select class="form-select form-control-vaccine" id="petType" name="petType" required>
                                            <option value="">Select Pet Type</option>
                                            <option value="Dog">Dog</option>
                                            <option value="Cat">Cat</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="submitForm()">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="modal fade" id="deleteVaccineModal" tabindex="-1" aria-labelledby="deleteDModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                                this Vaccine?</h4>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id="" style="background-color: #FF0000; border: none;">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
    <?php
    require_once('./include/js.php')
    ?>
</body>
<script>
    function submitForm() {
        var selectedVaccineType = document.getElementById("vaccinetype").value;
        var selectedPetType = document.getElementById("petType").value;

        document.getElementById("selectedVaccineType").value = selectedVaccineType;
        document.getElementById("selectedPetType").value = selectedPetType;

        document.getElementById("vaccineForm").submit();
    }

    function populateFields(vaccineID) {
        $.ajax({
            url: 'fetch_vaccine.php',
            type: 'POST',
            data: {
                vaccineID: vaccineID
            },
            success: function(response) {
                if (response) {
                    var data = JSON.parse(response);
                    $('#updateVaccineModal #Vaccine').val(data.vaccineName);
                    $('#updateVaccineModal #vaccinetype').val(data.vaccineType);
                    $('#updateVaccineModal #age').val(data.vaccineAge);
                    $('#updateVaccineModal #dosage').val(data.vaccineDosage);
                    $('#updateVaccineModal #weeksInterval').val(data.vaccineInterval);
                    $('#updateVaccineModal #price').val(data.vaccinePrice);
                    $('#updateVaccineModal #petType').val(data.petType);
                } else {
                    alert("Failed to fetch data for vaccine ID " + vaccineID);
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
</script>

<script>
    // Example JavaScript to handle pagination
    document.getElementById('prev').addEventListener('click', function(event) {
        // Handle "Previous" button click event
        event.preventDefault();
        // Perform necessary actions to show previous page
        // For example, update table data, hide/show appropriate rows, etc.
        console.log('Previous button clicked');
    });

    document.getElementById('next').addEventListener('click', function(event) {
        // Handle "Next" button click event
        event.preventDefault();
        // Perform necessary actions to show next page
        // For example, update table data, hide/show appropriate rows, etc.
        console.log('Next button clicked');
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>