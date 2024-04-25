<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Veterinarian';
require_once('./include/admin-head.php');
require_once('../classes/veterinarian.class.php');
require_once  './tools/functions.php';
$veterinarianClass = new Veterinarian();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['vetID'])) {
    $_SESSION['vetID'] = $_GET['vetID']; 
    $vetID = $_GET['vetID'];
    $vetData = $veterinarianClass->fetch($vetID);
    if ($vetData) {
        $vetFirstname = $vetData['vetFirstname'];
        $vetLastname = $vetData['vetLastname'];
        $vetMiddlename = $vetData['vetMiddlename'];
        $vetEmail = $vetData['vetEmail'];
        $vetUsername = $vetData['vetUsername'];
        $vetPhone = $vetData['vetPhone'];
    } else {
        echo "Error: Veterinarian data not found.";
        exit();
    }
} else {
    echo "Error: vetID not provided.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requiredFields = ['vetFirstname', 'vetLastname', 'vetMiddlename', 'vetEmail', 'vetUsername', 'vetPhone'];
    $missingFields = array_diff($requiredFields, array_keys($_POST));
    if (!empty($missingFields)) {
        error_log("Missing POST parameters: " . implode(', ', $missingFields));
        echo "Error: Missing POST parameters.";
        exit();
    }

    // Get vetID from session
    $vetID = $_SESSION['vetID'];

    // Assign POST data to variables
    $vetFirstname = $_POST['vetFirstname'];
    $vetLastname = $_POST['vetLastname'];
    $vetMiddlename = $_POST['vetMiddlename']; 
    $vetEmail = $_POST['vetEmail'];
    $vetUsername = $_POST['vetUsername'];
    $vetPhone = $_POST['vetPhone'];
    $vetPassword = $_POST['vetPassword'];

    // Update veterinarian data
    $success = $veterinarianClass->update($vetID, $vetFirstname, $vetLastname, $vetMiddlename, $vetEmail, $vetUsername, $vetPhone, $vetPassword);
    if ($success) {
        // Redirect after successful update
        header('Location: veterinarians.php');
        exit();
    } else {
        echo "Error: Failed to update veterinarian data.";
        exit();
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
          <p>Update Veterinarian Account</p>
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
                          <label for="vetFirstname" class="form-label">Firstname</label>
                          <input type="text" class="form-control" id="vetFirstname" name="vetFirstname" value="<?php echo $vetFirstname?>" required>
                      </div>
                      <div>
                          <label for="vetLastname" class="form-label">Lastname</label>
                          <input type="text" class="form-control" id="vetLastname" name="vetLastname" value="<?php echo $vetLastname?>" required>
                      </div>
                      <div>
                          <label for="vetPhone" class="form-label">Middle name</label>
                          <input type="text" class="form-control" id="vetMiddlename" name="vetMiddlename" value="<?php echo $vetMiddlename?>" required>
                      </div>
                      <div>
                          <label for="vetPhone" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" id="vetPhone" name="vetPhone" value="<?php echo $vetPhone?>" required>
                      </div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="ms-5">
                      <div class="mt-3">
                          <label for="vetEmail" class="form-label">Email Address</label>
                          <input type="text" class="form-control" id="vetEmail" name="vetEmail" value="<?php echo $vetEmail?>" required>
                      </div>
                      <div>
                          <label for="vetUsername" class="form-label">Username</label>
                          <input type="text" class="form-control" id="vetUsername" name="vetUsername" value="<?php echo $vetUsername?>" required>
                      </div>
                      <div>
                          <label for="vetPassword" class="form-label">Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="vetPassword" name="vetPassword" required>
                              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pt-3"></span>
                          </div>
                      </div>
                      <div>
                          <label for="vetRePassword" class="form-label">Re-enter Password</label>
                          <div class="d-flex align-items-center">
                              <input type="password" class="form-control" id="vetRePassword" name="vetRePassword" required>
                              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password pt-3"></span>
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
                  <button type="submit" name="submit" class="create-vet-btn btn-secondary" id="addStaffButton">Save Account</button>
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
