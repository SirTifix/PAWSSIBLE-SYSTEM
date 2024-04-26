<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'Medical History';
    require_once('./include/vet-head.php');
?>
  


<body>
  <?php
        require_once('./include/vet-header.php')
    ?>
   <?php
        require_once('./include/vet-sidepanel.php')
    ?>




 
  <section class="customer-title ">
 
    <div class="customer-info-head pt-4">
        <h2>Medical History</h2>
    </div>

  </section>

  <div class="container">
  <div class="pet-information ">
     <div class="row justify-content-center pet-con-bg">
            <div class="title-medical">
                <h2> Pet Information </h2>
            </div>
           <div class="col-md-5 pet-bg ">  
                      <div class="icon-box">
                        <i class="icon fa fa-solid  fa-image mr-2 mt-1" ></i> 
                      </div>
            </div>
              
              <div class="col-md-5 pet-bg">
                      <div class="form-group ">
                        <label for="PetName" class="form-label">Pet Name:</label>
                        <input type="text" class="form-control" id="PetName" name="PetName" required>
                      </div>
                      <div class="form-group">
                        <label for="BirthDate" class="form-label">Birth Date:</label>
                        <input type="text" class="form-control" id="BirthDate" name="BirthDate" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="PetAge" class="form-label ">Pet Age:</label>
                        <input type="text" class="form-control" id="PetAge" name="PetAge" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Breed" class="form-label ">Breed:</label>
                        <input type="text" class="form-control" id="Breed" name="Breed" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="PetType" class="form-label ">Pet Type:</label>
                        <input type="text" class="form-control" id="PetType" name="PetType" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Gender" class="form-label ">Gender:</label>
                        <input type="text" class="form-control" id="Gender" name="Gender" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Weight" class="form-label ">Weight:</label>
                        <input type="text" class="form-control" id="Weight" name="Weight" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Color" class="form-label ">Color:</label>
                        <input type="text" class="form-control" id="Color" name="Color" required>
                      </div>          
          </div>
        </div>
      </div>
    </div>
     
    <div class="container">
      <div class="pet-information ">
         <div class="row justify-content-center">
                <div class="title-medical">
                  <h2> Medical Information</h2>
                  
                  <div class="crud-btn col-5 justify-content-end">
                <a class="add-med-btn" href="" data-bs-toggle="modal"data-bs-target="#addMedRecModal"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i></a>
            </div>
                <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon fa fa-bars" style="color: rgb(255, 251, 251);"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="" data-bs-toggle="modal"data-bs-target="#addMedRecModal">Add</a>
                      
                    </div>
                </div> -->

                </div>
              

                <table class="table">
                <thead>
                    <tr class="pet-title font-weight-bold py-4">
                        <th scope="col">Age(weeks)</th>
                        <th scope="col">Date</th>
                        <th scope="col">History</th>
                        <th scope="col">Physical Examination</th>
                        <th scope="col">Veterinarian</th>
                        <th scope="col">Diagnosis/ Treatment Plan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="pet-con py-3 row-divider">
                        <td>6</td>
                        <td>02/14/2024</td>
                        <td>Owner reports normal activity levels, playful behavior, and good socialization. Regular bowel movements, no signs of diarrhea or straining.</td>
                        <td>Owner reports normal activity levels, playful behavior, and good socialization. Regular bowel movements, no signs of diarrhea or straining.</td>
                        <td>Dr.Anna Green</td>
                        <td>Administer first round of vaccinations (DHPP). Discuss future vaccination schedule.</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <div class="crud-btn">
                                <a href="" class="edit-btn" data-bs-toggle="modal"data-bs-target="#updateMedRecModal">
                                    <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteMedRecModal">
                                    <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


                  <div class="title-medical">
                    <h2 class="px-5"> Vaccine </h2>
                    
                    
                    <div class="crud-btn col-5 justify-content-end">
                        <a class="add-med-btn" href="" data-bs-toggle="modal"data-bs-target="#addVaccineModal"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i></a>
                    </div>

                
                </div>

                
                <table class="table">
                <thead>
                    <tr class="pet-title font-weight-bold py-4">
                        <th scope="col">Age(weeks)</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Date Given</th>
                        <th scope="col">Vaccine</th>
                        <th scope="col">Next Date</th>
                        <th scope="col">Veterinarian</th>
                        <th scope="col" width="5%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="pet-con py-3 row-divider">
                        <td>6</td>
                        <td>12lbs</td>
                        <td>12/11/2023</td>
                        <td>Distemper, Hepatitis, Parvovirus, Parainfluenza (DHPP)</td>
                        <td>January 8, 2024</td>
                        <td>Dr.Green</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <div class="crud-btn">
                                <a href="" class="edit-btn" data-bs-toggle="modal"data-bs-target="#updateVaccineModal">
                                    <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteVaccineModal">
                                    <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
                    <div>
                    <a href="pet_information.php" class="back-btn-med btn-secondary">Back</a>
                  </div>
                      
                  </div>
  
          </div>
      </div>
    </div>
    <section>
            <div class="modal fade" id="addMedRecModal" tabindex="-1" aria-labelledby="addDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center align-items-center" 
                        style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                            <h2 class="modal-title">Medical History</h2>
                            </button>
                        </div>
                        <div>
                            <form action="" method="post">
                                <div class="row p-3">
                                    <div class="col-6">
                                        <div class="d-flex mt-3">
                                            <label for="age" class="form-label-medHis fw-bold">Age(weeks):</label>
                                            <input type="text" class="form-control-medHis" id="age" name="age" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="Date" class="form-label-medHis fw-bold">Date:</label>
                                            <input type="Date" class="form-control-medHis" id="Date" name="Date" required>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <label for="veterinarian" class="form-label-medHis fw-bold">Veterinarian:</label>
                                            <input type="text" class="form-control-medHis" id="veterinarian" name="veterinarian" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="history" class="form-label-medHis fw-bold">History:</label>
                                            <textarea class="form-control-medHis" id="history" name="history" rows="6" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex mt-3">
                                            <label for="physicalExam" class="form-label-medHis fw-bold">Physical Examination:</label>
                                            <textarea class="form-control-medHis" id="physicalExam" name="physicalExam" rows="6" required></textarea>
                                        </div>

                                        <div class="d-flex">
                                            <label for="diagnosis" class="form-label-medHis fw-bold">Diagnosis/ Treatment Plan:</label>
                                            <textarea class="form-control-medHis" id="diagnosis" name="diagnosis" rows="6" required></textarea>
                                        </div>
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
            <div class="modal fade" id="updateMedRecModal" tabindex="-1" aria-labelledby="updateDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center align-items-center" 
                        style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                            <h2 class="modal-title">Medical History</h2>
                            </button>
                        </div>
                        <div>
                            <form action="" method="post">
                                <div class="row p-3">
                                    <div class="col-6">
                                        <div class="d-flex mt-3">
                                            <label for="age" class="form-label-medHis fw-bold">Age(weeks):</label>
                                            <input type="text" class="form-control-medHis" id="age" name="age" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="Date" class="form-label-medHis fw-bold">Date:</label>
                                            <input type="Date" class="form-control-medHis" id="Date" name="Date" required>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <label for="veterinarian" class="form-label-medHis fw-bold">Veterinarian:</label>
                                            <input type="text" class="form-control-medHis" id="veterinarian" name="veterinarian" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="history" class="form-label-medHis fw-bold">History:</label>
                                            <textarea class="form-control-medHis" id="history" name="history" rows="6" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="d-flex mt-3">
                                            <label for="physicalExam" class="form-label-medHis fw-bold">Physical Examination:</label>
                                            <textarea class="form-control-medHis" id="physicalExam" name="physicalExam" rows="6" required></textarea>
                                        </div>

                                        <div class="d-flex">
                                            <label for="diagnosis" class="form-label-medHis fw-bold">Diagnosis/ Treatment Plan:</label>
                                            <textarea class="form-control-medHis" id="diagnosis" name="diagnosis" rows="6" required></textarea>
                                        </div>
                                    </div>
                                </div>
 
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vaccine Add and Update Modal -->
        <section>
            <div class="modal fade" id="addVaccineModal" tabindex="-1" aria-labelledby="addDModalLabel"
                aria-hidden="true" data-backdrop="false">
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
                                            <label for="age" class="form-label-vaccine fw-bold p-2">Age(weeks):</label>
                                            <input type="text" class="form-control-vaccine p-2" id="age" name="age" required>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <label for="veterinarian" class="form-label-vaccine fw-bold">Veterinarian:</label>
                                            <input type="text" class="form-control-vaccine" id="veterinarian" name="veterinarian" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="vaccine" class="form-label-vaccine fw-bold">Vaccine:</label>
                                            <select class="form-select form-control-vaccine" id="vaccine" name="vaccine" required>
                                                <option value="">Select Vaccine</option>
                                                <option value="vaccine1">Vaccine 1</option>
                                                <option value="vaccine2">Vaccine 2</option>
                                                <option value="vaccine3">Vaccine 3</option>
                                            </select>
                                        </div>

                                        <div class="d-flex">
                                            <label for="vaccineCateg" class="form-label-vaccine fw-bold">Vaccine Category:</label>
                                            <select class="form-select form-control-vaccine" id="vaccineCateg" name="vaccineCateg" required>
                                                <option value="">Select Vaccine Category</option>
                                                <option value="vaccine1">Primary Series</option>
                                                <option value="vaccine2">Annual Boosters</option>
                                                <option value="vaccine3">Deworming</option>
                                            </select>
                                        </div>

                                        <div class="d-flex">
                                            <label for="date" class="form-label-vaccine fw-bold">Date Given:</label>
                                            <input type="date" class="form-control-vaccine" id="date" name="date" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="dueDate" class="form-label-vaccine fw-bold">Due Date:</label>
                                            <div class="form-control-vaccine" id="dueDate">Due date automatically will be display after select the date given</div>
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
                aria-hidden="true" data-backdrop="false">
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
                                            <label for="age" class="form-label-vaccine fw-bold p-2">Age(weeks):</label>
                                            <input type="text" class="form-control-vaccine p-2" id="age" name="age" required>
                                        </div>
                                        
                                        <div class="d-flex">
                                            <label for="veterinarian" class="form-label-vaccine fw-bold">Veterinarian:</label>
                                            <input type="text" class="form-control-vaccine" id="veterinarian" name="veterinarian" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="vaccine" class="form-label-vaccine fw-bold">Vaccine:</label>
                                            <select class="form-select form-control-vaccine" id="vaccine" name="vaccine" required>
                                                <option value="">Select Vaccine</option>
                                                <option value="vaccine1">Vaccine 1</option>
                                                <option value="vaccine2">Vaccine 2</option>
                                                <option value="vaccine3">Vaccine 3</option>
                                            </select>
                                        </div>

                                        <div class="d-flex">
                                            <label for="vaccineCateg" class="form-label-vaccine fw-bold">Vaccine Category:</label>
                                            <select class="form-select form-control-vaccine" id="vaccineCateg" name="vaccineCateg" required>
                                                <option value="">Select Vaccine Category</option>
                                                <option value="vaccine1">Primary Series</option>
                                                <option value="vaccine2">Annual Boosters</option>
                                                <option value="vaccine3">Deworming</option>
                                            </select>
                                        </div>

                                        <div class="d-flex">
                                            <label for="date" class="form-label-vaccine fw-bold">Date Given:</label>
                                            <input type="date" class="form-control-vaccine" id="date" name="date" required>
                                        </div>

                                        <div class="d-flex">
                                            <label for="dueDate" class="form-label-vaccine fw-bold">Due Date:</label>
                                            <div class="form-control-vaccine" id="dueDate">Due date automatically will be display after select the date given</div>
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
            <div class="modal fade" id="deleteMedRecModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content-del">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                            this Medical Record?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="modal fade" id="deleteVaccineModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content-del">
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

    </section>        


    <?php
    require_once('./include/js.php')
    ?>
</body>
</php>