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
  <div class="crud-btn col-11 justify-content-end">
    <div class="add-annual">
    <a href="add-primary.php" class="crud-text"><i class="fa-solid fa-circle-plus m-1 ml-2" aria-hidden="true"></i>Add</a>
    </div>
  </div>
      
      <div class="container">
        <div class="pet-information ">
          <div class="row justify-content-center">
            <div class="title-vaccine">
                  <button class="icon-bars">
                      <a href="deworming.php">
                          <span class="icon fa fa-caret-left" style="color: rgb(255, 251, 251);"></span> 
                      </a>
                  </button>
                  <h2>Primary Series</h2>
                  <button class="icon-bars">
                      <a href="annual.php">
                          <span class="icon fa fa-caret-right" style="color: rgb(255, 251, 251);"></span> 
                      </a>
                  </button>
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
                      <th scope="col">Action</th>
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
                      <td class="crud-btn"><a href="edit-primary.php" class="crud-icon-update"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a></td>
                  </tr>
              </tbody>
          </table>

                 <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="medical-history.html" class="back-btn btn-secondary">Cancel</a>
                  </div>
                <div>
                  <button type="submit" class="create-vet-btn btn-secondary" id="addStaffButton">Save</button>
                </div>
                </div>

                 
                
  
          </div>
      </div>
    </div>
            

    <?php
        require_once('./include/js.php')
    ?>
<script src="vendor/script.js"></script>
</body>
</html>