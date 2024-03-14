<!DOCTYPE html>
<html lang="en">
<?php
        require_once('./include/js.php')
    ?>
<?php
    
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
 
    <div class="customer-info-head">
        <h2>Medical History</h2>
    </div>

  </section>

  <div class="container">
  <div class="pet-information ">
     <div class="row justify-content-center">
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
               
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon fa fa-bars" style="color: rgb(255, 251, 251);"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="add-medical.php">Add</a>
                        <a class="dropdown-item" href="#">Edit</a>
                    </div>
                </div>

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
                        <td class="crud-btn"><a href="edit-medical.php" class="crud-icon-update"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
            </table>


                  <div class="title-medical">
                    <h2 class="px-5"> Vaccine </h2>
                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon fa fa-bars" style="color: rgb(255, 251, 251);"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" href="primaryseries.php">View More</a>
                    </div>
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
                    </tr>
                </tbody>
            </table>

                      
                  </div>
  
          </div>
      </div>
    </div>
            

    <script src="vendor/script.js"></script>

</body>
</php>