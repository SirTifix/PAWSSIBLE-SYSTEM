<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Secretary';
    require_once('./include/admin-head.php');
    require_once('../classes/secretary.class.php');
    require_once  './tools/functions.php';

    if(isset($_POST['submit'])){
      $secretaryClass = new Secretary();
      $currentDateTime = date('Y-m-d H:i:s');

      $secretaryClass->secretaryFirstname = htmlentities($_POST['secretaryFirstname']);
      $secretaryClass->secretaryMiddlename = htmlentities($_POST['secretaryMiddlename']);
      $secretaryClass->secretaryLastname = htmlentities($_POST['secretaryLastname']);
      $secretaryClass->secretaryPhone = htmlentities($_POST['secretaryPhone']);
      $secretaryClass->secretaryEmail = htmlentities($_POST['secretaryEmail']);
      $secretaryClass->secretaryUsername = htmlentities($_POST['secretaryUsername']);
      $secretaryClass->secretaryPassword = htmlentities($_POST['secretaryPassword']);
      $secretaryClass->created_at = $currentDateTime;

      if(validate_field($secretaryClass->secretaryFirstname) && 
      validate_field($secretaryClass->secretaryLastname) &&
      validate_field($secretaryClass->secretaryEmail) && 
      validate_field($secretaryClass->secretaryUsername) &&
      validate_field($secretaryClass->secretaryPassword) &&
      validate_password($secretaryClass->secretaryPassword) &&
      validate_email($secretaryClass->secretaryEmail))
      {
        if($secretaryClass->add())
        {
          header('location: secretary.php');
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
          <p>Create Secretary Account</p>
        </div>
    </section>

    <section class="vet-form-con row">
      <div class="head-form col-12 d-flex justify-content-between align-items-center">
        <i class="fa-solid fa-user " aria-hidden="true"></i>
        <i class="fa-solid fa-paw" aria-hidden="true"></i>
      </div>

      <div class="create-vet-form col-12">
        <div class="vet-head-form">
          <p>Secretary Account</p>
        </div>
        <form action="" method="post">
          <div class="forms-body row d-flex justify-content-center">
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="secretaryFirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="secretaryFirstname" name="secretaryFirstname" required>
                      </div>
                      <div>
                          <label for="secretaryMiddlename" class="form-label">Middle Name (Optional)</label>
                          <input type="text" class="form-control" id="secretaryMiddlename" name="secretaryMiddlename">
                      </div>
                      <div>
                          <label for="secretaryLastname" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="secretaryLastname" name="secretaryLastname" required>
                      </div>
                      <div>
                          <label for="secretaryPhone" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" id="secretaryPhone" name="secretaryPhone" required>
                      </div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="secretaryEmail" class="form-label">Email Address</label>
                          <input type="text" class="form-control" id="secretaryEmail" name="secretaryEmail" required>
                      </div>
                      <div>
                          <label for="secretaryUsername" class="form-label">Username</label>
                          <input type="text" class="form-control" id="secretaryUsername" name="secretaryUsername" required>
                      </div>
                      <div>
                          <label for="secretaryPassword" class="form-label">Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="secretaryPassword" name="secretaryPassword" required>
                          </div>
                      </div>
                      <div>
                          <label for="secretaryRePassword" class="form-label">Re-enter Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="secretaryRePassword" name="secretaryRePassword" required>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-3">
              <div>
                  <a href="secretary.php" class="back-btn btn-secondary">Cancel</a>
              </div>
              <div>
                  <button type="submit" name="submit" class="create-secretary-btn btn-secondary" id="addStaffButton">Create Account</button>
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