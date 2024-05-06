<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Vaccine';
require_once ('../classes/vaccine.class.php');

$vaccineClass = new Vaccine();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vaccineName = $_POST['Vaccine'];
    $vaccineType = $_POST['selectedVaccineType'];
    $vaccineAge = $_POST['age'];
    $vaccineDosage = $_POST['dosage'];
    $vaccineInterval = $_POST['weeksInterval'];
    $vaccinePrice = $_POST['price'];
    $petType = $_POST['selectedPetType'];

    $vaccineClass->vaccineName = $vaccineName;
    $vaccineClass->vaccineType = $vaccineType;
    $vaccineClass->vaccineAge = $vaccineAge;
    $vaccineClass->vaccineDosage = $vaccineDosage;
    $vaccineClass->vaccineInterval = $vaccineInterval;
    $vaccineClass->vaccinePrice = $vaccinePrice;
    $vaccineClass->petType = $petType;

    $result = $vaccineClass->add();

    if ($result) {
        header("location: vaccines.php");
    } else {
        echo "Failed to add vaccine.";
    }
}
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
                                    <option value="All">All</option>
                                    <option value="Dog">Dog</option>
                                    <option value="Cat">Cat</option>
                                </select>
                            </div>

                            <div class="form-group col-6 col-sm-auto">
                                <select name="status" class="form-select">
                                    <option value="">Select Vaccine Type</option>
                                    <option value="Annual Booster">Annual Booster</option>
                                    <option value="Primary Series">Primary Series</option>
                                    <option value="Deworming">Deworming</option>
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
                        foreach ($vaccineList as $vaccine):
                            ?>
                                    <tr class='table-bodypet'>
                                        <td><?php echo $vaccine['vaccineID']; ?></td>
                                        <td><?php echo $vaccine['vaccineName']; ?></td>
                                        <td><?php echo $vaccine['vaccineType']; ?></td>
                                        <td><?php echo $vaccine['vaccineAge']; ?></td>
                                        <td><?php echo $vaccine['vaccineDosage']; ?></td>
                                        <td><?php echo $vaccine['vaccineInterval']; ?></td>
                                        <td><?php echo $vaccine['vaccinePrice']; ?></td>
                                        <td><?php echo $vaccine['petType']; ?></td>
                                        <td class='d-flex justify-content-center align-items-center'>
                                            <div class='crud-btn'>
                                                <a href='' class='edit-btn' data-bs-toggle='modal' data-bs-target='#updateVaccineModal<?php echo $vaccine['vaccineID']; ?>'>
                                                <i class='fa-regular fa-pen-to-square' aria-hidden='true'></i></a>
                                                <div class="modal fade" id="updateVaccineModal<?php echo $vaccine['vaccineID']; ?>" tabindex="-1" aria-labelledby="updateDModalLabel" aria-hidden="true">
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
                                                                        <input type="text" class="form-control-vaccine p-2" id="Vaccine<?php echo $vaccine['vaccineID']; ?>" value="<?php echo $vaccine['vaccineName']; ?>" name="Vaccine" required>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <label for="VaccineType" class="form-label-vaccine fw-bold p-2">Vaccine Type:</label>
                                                                        <select class="form-select form-control-vaccine" id="vaccinetype<?php echo $vaccine['vaccineID']; ?>" name="vaccinetype" required>
                                                                            <option value="<?php echo $vaccine['vaccineType']; ?>"><?php echo $vaccine['vaccineType']; ?></option>
                                                                            <option value="Primary Series">Primary Series</option>
                                                                            <option value="Annual Boosters">Annual Boosters</option>
                                                                            <option value="Deworming">Deworming</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <label for="age" class="form-label-vaccine fw-bold p-2">Age(weeks):</label>
                                                                        <input type="text" class="form-control-vaccine p-2" id="age<?php echo $vaccine['vaccineID']; ?>" value="<?php echo $vaccine['vaccineAge']; ?>" name="age" required>
                                                                    </div>

                                                                    <div class="d-flex">
                                                                        <label for="dosage" class="form-label-vaccine fw-bold">Dosage:</label>
                                                                        <input type="text" class="form-control-vaccine" id="dosage<?php echo $vaccine['vaccineID']; ?>" value="<?php echo $vaccine['vaccineDosage']; ?>" name="dosage" required>
                                                                    </div>

                                                                    <div class="d-flex">
                                                                        <label for="weeksInterval" class="form-label-vaccine fw-bold">Weeks Interval:</label>
                                                                        <input type="text" class="form-control-vaccine" id="weeksInterval<?php echo $vaccine['vaccineID']; ?>" value="<?php echo $vaccine['vaccineInterval']; ?>" name="weeksInterval" required>
                                                                    </div>

                                                                    <div class="d-flex">
                                                                        <label for="price" class="form-label-vaccine fw-bold">Price:</label>
                                                                        <input type="text" class="form-control-vaccine" id="price<?php echo $vaccine['vaccineID']; ?>" value="<?php echo $vaccine['vaccinePrice']; ?>" name="price" required>
                                                                    </div>


                                                                    <div class="d-flex">
                                                                        <label for="petType" class="form-label-vaccine fw-bold">Pet Type: </label>
                                                                        <select class="form-select form-control-vaccine" id="petType<?php echo $vaccine['vaccineID']; ?>" name="petType" required>
                                                                            <option value="<?php echo $vaccine['petType']; ?>"><?php echo $vaccine['petType']; ?></option>
                                                                            <?php
                                                                            require_once '../classes/pet.class.php';
                                                                            $vet = new Pet();
                                                                            $vets = $vet->showPetTypes();
                                                                            foreach ($vets as $vet) {
                                                                                echo '<option value="' . $vet['petType'] . '">' . $vet['petType'] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer justify-content-between" style="border: none;">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="updateVaccine(<?php echo $vaccine['vaccineID']; ?>)">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class='crud-btn'>
                                                <a href='' class='delete-btn' data-bs-toggle='modal' data-bs-target='#deleteVaccineModal<?php echo $vaccine['vaccineID']; ?>'>
                                                <i class='fa-regular fa-trash-can' aria-hidden='true'></i></a>
                                                <div class="modal fade" id="deleteVaccineModal<?php echo $vaccine['vaccineID']; ?>" tabindex="-1" aria-labelledby="deleteDModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                                                                this Vaccine?</h4>
                                                            <div class="modal-footer justify-content-between" style="border: none;">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-primary" id="confirmDelete" onclick="deleteVaccine(<?php echo $vaccine['vaccineID']; ?>)" style="background-color: #FF0000; border: none;">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
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
                                                <option value="">Choose...</option>
                                                    <?php
                                                    require_once '../classes/pet.class.php';
                                                    $vet = new Pet();
                                                    $vets = $vet->showPetTypes();
                                                    foreach ($vets as $vet) {
                                                        echo '<option value="' . $vet['petType'] . '">' . $vet['petType'] . '</option>';
                                                    }
                                                    ?>
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
    </main>

<?php
    require_once ('./include/js.php')
?>
<script>
    function updateVaccine(vaccineID) {
                var vaccineName = document.getElementById('Vaccine' + vaccineID).value;
                var vaccineType = document.getElementById('vaccinetype' + vaccineID).value;
                var vaccineAge = document.getElementById('age' + vaccineID).value;
                var vaccineDosage = document.getElementById('dosage' + vaccineID).value;
                var vaccineInterval = document.getElementById('weeksInterval' + vaccineID).value;
                var vaccinePrice = document.getElementById('price' + vaccineID).value;
                var petType = document.getElementById('petType' + vaccineID).value;

                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Success to update vaccine.');
                            window.location.reload();
                        } else {
                            alert('Failed to update vaccine.');
                        }
                    }
                };
                xhr.open('POST', 'update_vaccine.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('vaccineID=' + vaccineID + 
                '&vaccineName=' + encodeURIComponent(vaccineName) + 
                '&vaccineType=' + encodeURIComponent(vaccineType) + 
                '&vaccineAge=' + encodeURIComponent(vaccineAge) +
                '&vaccineDosage=' + encodeURIComponent(vaccineDosage) +
                '&vaccineInterval=' + encodeURIComponent(vaccineInterval) +
                '&vaccinePrice=' + encodeURIComponent(vaccinePrice) +
                '&petType=' + encodeURIComponent(petType));
            }

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

    function deleteVaccine(vaccineID) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Vaccine deleted successfully!');
                            window.location.reload();
                        } else {
                            alert('Failed to delete vaccine.');
                        }
                    }
                };
                xhr.open('POST', 'delete-vaccine.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('vaccineID=' + vaccineID);
            }
</script>
</body>
</html>