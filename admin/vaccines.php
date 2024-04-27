<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Vaccine';
    require_once('./include/admin-head.php');
?>
<body>
    <?php
        require_once('./include/admin-header.php')
    ?>
    <main>
    <?php
        require_once('./include/admin-sidepanel.php')
    ?>
     

        <!-- <section class="filter-con row">
            <div class="row col-7">
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
            </div> -->


            <section class="veterinarian-con">
            <div class="row mx-5 justify-content-end"> 
                <div class="crud-btn-add col-4 col-sm-auto"> 
                <a href="" class="crud-text" data-bs-toggle="modal"data-bs-target="#addVaccineModal"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i>Add Vaccine</a>
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

      
   </section>
   <div class="table-wrapper ">
        <div class="vac-container">
      <div class="pet-information ">
      
        <div class="d-flex justify-content-around">
            <table id="customer"class="table table-bordered">
                <thead>
                    <tr class="table-headpet text-center">
                        <th scope="col"> Vaccine ID</th>
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
                    <tr class="table-bodypet">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center align-items-center">
                            <div class="crud-btn">
                                <a href="" class="edit-btn" data-bs-toggle="modal"data-bs-target="#updateVaccineModal">
                                    <i class="fa-regular fa-pen-to-square" aria-hidden="true"></i></a>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteVaccineModal">
                                    <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
        </div>
        <section>
            <div class="modal fade" id="addVaccineModal" tabindex="-1" aria-labelledby="updateDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center align-items-center" 
                        style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                            <h2 class="modal-title">Vaccine</h2>
                            </button>
                        </div>
                        <div>
                            <form action="" method="post">
                                <div class="mt-4 mx-5">
                                    <div class="d-flex">
                                            <label for="Vaccine" class="form-label-vaccine fw-bold p-2">Vaccine:</label>
                                            <input type="text" class="form-control-vaccine p-2" id="Vaccine" name="Vaccine" required>
                                        </div>
                                        <div class="d-flex">
                                            <label for="VaccineType" class="form-label-vaccine fw-bold p-2">Vaccine Type:</label>
                                            <select class="form-select form-control-vaccine" id="vaccinetype" name="vaccinetype" required>
                                            <option value="">Select Vaccine Type</option>
                                                <option value="vaccine1">Primary Series</option>
                                                <option value="vaccine2">Annual Boosters</option>
                                                <option value="vaccine3">Deworming</option>
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
                                            <option value="vaccine2">Dog</option>
                                            <option value="vaccine3">Cat</option>
                                             </select>
                                        </div>

    

                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="modal fade" id="updateVaccineModal" tabindex="-1" aria-labelledby="updateDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center align-items-center" 
                        style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                            <h2 class="modal-title">Vaccine</h2>
                            </button>
                        </div>
                        <div>
                            <form action="" method="post">
                                <div class="mt-4 mx-5">
                                    <div class="d-flex">
                                            <label for="Vaccine" class="form-label-vaccine fw-bold p-2">Vaccine:</label>
                                            <input type="text" class="form-control-vaccine p-2" id="Vaccine" name="Vaccine" required>
                                        </div>
                                        <div class="d-flex">
                                            <label for="VaccineType" class="form-label-vaccine fw-bold p-2">Vaccine Type:</label>
                                            <select class="form-select form-control-vaccine" id="vaccinetype" name="vaccinetype" required>
                                            <option value="">Select Vaccine Type</option>
                                                <option value="vaccine1">Primary Series</option>
                                                <option value="vaccine2">Annual Boosters</option>
                                                <option value="vaccine3">Deworming</option>
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
                                            <option value="vaccine2">Dog</option>
                                            <option value="vaccine3">Cat</option>
                                             </select>
                                        </div>

    

                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="modal fade" id="deleteVaccineModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                            this Vaccine?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
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
</html>