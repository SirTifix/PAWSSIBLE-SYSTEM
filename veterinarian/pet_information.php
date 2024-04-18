<!DOCTYPE html>
<html lang="en">
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




  <section class="customer-title">  
          <div class="customer-info-head pt-4">
              <h2>Customer Information</h2>
          </div>   
  </section>
<div class="container">
  <div class="pet-information">
     <div class="row justify-content-center">
      <div class="title-medical">
        <h2> Pet Information </h2>
    </div>  
            <div class="col-md-5 pet-bg1 ">  
                        
                      <div class="icon-box">
                          <i class="icon fa fa-solid  fa-image mr-2 mt-1" ></i> 
                        </div>
                        
                            </form>
                            <div>
                              <a href="medical-history.php" class="pet-btn btn-secondary">View Medical History</a>
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
        

</body>
</php>