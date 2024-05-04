<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Veterinarian';
    require_once('./include/admin-head.php');
    require_once('../classes/veterinarian.class.php');
    require_once  './tools/functions.php';

    if(isset($_POST['submit'])){
      $veterinarianClass = new Veterinarian();
      $currentDateTime = date('Y-m-d H:i:s');

      $veterinarianClass->vetFirstname = htmlentities($_POST['vetFirstname']);
      $veterinarianClass->vetMiddlename = htmlentities($_POST['vetMiddlename']);
      $veterinarianClass->vetLastname = htmlentities($_POST['vetLastname']);
      $veterinarianClass->vetPhone = htmlentities($_POST['vetPhone']);
      $veterinarianClass->vetEmail = htmlentities($_POST['vetEmail']);
      $veterinarianClass->vetUsername = htmlentities($_POST['vetUsername']);
      $veterinarianClass->vetPassword = htmlentities($_POST['vetPassword']);
      $veterinarianClass->created_at = $currentDateTime;

      if(validate_field($veterinarianClass->vetFirstname) && 
      validate_field($veterinarianClass->vetLastname) &&
      validate_field($veterinarianClass->vetEmail) && 
      validate_field($veterinarianClass->vetUsername) &&
      validate_field($veterinarianClass->vetPassword) &&
      validate_password($veterinarianClass->vetPassword) &&
      validate_email($veterinarianClass->vetEmail))
      {
        if($veterinarianClass->add())
        {
          header('location: veterinarians.php');
        }
        else
        {
          echo 'An error occured while adding in the database.';
        }
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
      <div class="veterinarian-head">
          <p>Create Veterinarian Account</p>
        </div>
    </section>

    <section class="vet-form-con row">
      <div class="head-form col-12 d-flex justify-content-between align-items-center">
        <i class="fa-solid fa-user " aria-hidden="true"></i>
        <i class="fa-solid fa-paw" aria-hidden="true"></i>
      </div>

      <div class="create-vet-form col-12">
        <div class="vet-head-form">
          <p>Veterinarian Account</p>
        </div>
        <form action="" method="post">
          <div class="forms-body row d-flex justify-content-center">
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="vetFirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="vetFirstname" name="vetFirstname" required>
                      </div>
                      <div>
                          <label for="vetMiddlename" class="form-label">Middle Name (Optional)</label>
                          <input type="text" class="form-control" id="vetMiddlename" name="vetMiddlename">
                      </div>
                      <div>
                          <label for="vetLastname" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="vetLastname" name="vetLastname" required>
                      </div>
                      <div>
                          <label for="vetPhone" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" id="vetPhone" name="vetPhone" required>
                      </div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="vetEmail" class="form-label">Email Address</label>
                          <input type="text" class="form-control" id="vetEmail" name="vetEmail" required>
                      </div>
                      <div>
                          <label for="vetUsername" class="form-label">Username</label>
                          <input type="text" class="form-control" id="vetUsername" name="vetUsername" required>
                      </div>
                      <div>
                          <label for="vetPassword" class="form-label">Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="vetPassword" name="vetPassword" required>
                          </div>
                      </div>
                      <div>
                          <label for="vetRePassword" class="form-label">Re-enter Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="vetRePassword" name="vetRePassword" required>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
              <div>
                  <a href="veterinarians.php" class="back-btn btn-secondary">Cancel</a>
              </div>
              <div>
                  <button type="submit" name="submit" class="create-vet-btn btn-secondary" id="addStaffButton">Create Account</button>
              </div>
          </div>
      </form>

      </div>
    </section>
  </main>
  <?php
    require_once('./include/js.php')
  ?>
</body>
</html>