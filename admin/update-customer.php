<?php
require_once('../classes/customer.class.php');
require_once('../classes/pet.class.php');
require_once('./tools/functions.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['customerID'])) {
    $_SESSION['customerID'] = $_GET['customerID'];
    $customerID = $_GET['customerID'];
    $customer = new Customer();
    $customerData = $customer->fetch($customerID);
    if (!$customerData) {
        echo "Error: Customer data not found.";
        exit();
    }
} else {
    echo "Error: Customer ID not provided.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $requiredFields = ['firstname', 'middlename', 'lastname', 'dob', 'city', 'address', 'email', 'state', 'code', 'num'];
    $missingFields = array_diff($requiredFields, array_keys($_POST));
    if (!empty($missingFields)) {
        error_log("Missing POST parameters: " . implode(', ', $missingFields));
        echo "Error: Missing POST parameters.";
        exit();
    }

    $customerID = $_SESSION['customerID'];

    $customerFirstname = $_POST['firstname'];
    $customerMiddlename = $_POST['middlename'];
    $customerLastname = $_POST['lastname'];
    $customerDOB = $_POST['dob'];
    $customerCity = $_POST['city'];
    $customerAddress = $_POST['address'];
    $customerEmail = $_POST['email'];
    $customerState = $_POST['state'];
    $customerPostal = $_POST['code'];
    $customerPhone = $_POST['num'];

    $customer->customerID = $customerID;
    $customer->customerFirstname = $customerFirstname;
    $customer->customerMiddlename = $customerMiddlename;
    $customer->customerLastname = $customerLastname;
    $customer->customerDOB = $customerDOB;
    $customer->customerCity = $customerCity;
    $customer->customerAddress = $customerAddress;
    $customer->customerEmail = $customerEmail;
    $customer->customerState = $customerState;
    $customer->customerPostal = $customerPostal;
    $customer->customerPhone = $customerPhone;

    $success = $customer->update();
    if ($success) { 
      $pet = new Pet();
        $pet->petName = $_POST['petName'];
        $pet->petBirthdate = $_POST['petBirthdate'];
        $pet->petAge = $_POST['petAge'];
        $pet->petBreed = $_POST['petBreed'];
        $pet->petType = $_POST['petType'];
        $pet->petGender = $_POST['petGender'];
        $pet->petWeight = $_POST['petWeight'];
        $pet->petColor = $_POST['petColor'];

        $successPetUpdate = $pet->update();
        if ($successPetUpdate) {
            header('Location: customers.php');
            exit();
        } else {
            echo "Error: Failed to update pet data.";
            exit();
        }
    } else {
        echo "Error: Failed to update customer data.";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
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
    <section class="veterinarian-con">
      <div class="d-flex justify-content-start mb-4">
        <div class="veterinarian-head">
          <p>Update Customer Information</p>
        </div>
      </div>
    </section>

    <section class="vet-form-con row">
      <div class="head-form col-12 d-flex justify-content-between align-items-center">
        <i class="fa-solid fa-user " aria-hidden="true"></i>
        <i class="fa-solid fa-paw" aria-hidden="true"></i>
      </div>

      <div class="create-vet-form col-12">
        <div class="vet-head-form">
          <p>Customer Information</p>
        </div>
        <form action="" method="post">
            <div class="form-body d-flex flex-wrap row">
              <div class="d-flex mt-3 align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="firstname" class="forms-label">First Name:</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" required value="<?php echo $customerData['customerFirstname']; ?>">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="middlename" class="forms-label">Middle Name (Optional):</label>
                  <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $customerData['customerMiddlename']; ?>">
                </div>
              </div>
      
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="lastname" class="forms-label">Last Name:</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required value="<?php echo $customerData['customerLastname']; ?>">
                </div>
                
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="dob" class="forms-label">DOB:</label>
                  <input type="date" class="form-control" id="dob" name="dob" required value="<?php echo $customerData['customerDOB']; ?>">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="address" class="forms-label">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" required value="<?php echo $customerData['customerAddress']; ?>">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="city" class="forms-label">City:</label>
                  <input type="text" class="form-control" id="city" name="city" required value="<?php echo $customerData['customerCity']; ?>">
                </div>
              </div>
              
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="email" class="forms-label">DOB:</label>
                  <input type="text" class="form-control" id="email" name="email" required value="<?php echo $customerData['customerEmail']; ?>">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="state" class="forms-label">State /Province:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $customerData['customerState']; ?>">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="code" class="forms-label">Zip code /Postal:</label>
                  <input type="text" class="form-control" id="code" name="code" required value="<?php echo $customerData['customerPostal']; ?>">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="num" class="forms-label">Phone Number:</label>
                  <input type="number" class="form-control" id="num" name="num" required value="<?php echo $customerData['customerPhone']; ?>">
                </div>
              </div>
            </div>

            <div class="vet-head-form mt-4">
              <p>Pet Information</p>
            </div>

            <div class="d-flex justify-content-around">
              <div class="position-relative mt-5">
                  <input type="file" id="fileInput" style="display: none;" accept="image/*">
                  <img src="./assets/img/upload-photo.png" alt="Profile Picture" class="profile-pic" id="profilePic">
                  <label for="fileInput" class="upload-icon"><i class="fa-solid fa-plus"></i>
                  </label>
              </div>

              <div class="form-body">
                <?php
                $pet = new Pet();
                $pets = $pet->fetchByCustomerId($customerID);
                if ($pets) {
                  foreach ($pets as $petData) { 
                    ?>
                <div class="d-flex mt-3">
                  <label for="petName" class="forms-label fw-bold">Pet Name:</label>
                  <input type="text" class="form-control" id="petName" name="petName" required value="<?php echo $petData['petName']; ?>">
                </div>

                <div class="d-flex">
                  <label for="petBirthdate" class="form-label fw-bold">Birth Date:</label>
                  <input type="text" class="form-control" id="petBirthdate" name="petBirthdate" required value="<?php echo $petData['petBirthdate']; ?>">
                  <label for="petBirthdate" class="forms-label fw-bold">Birth Date:</label>
                  <input type="date" class="form-control" id="petBirthdate" name="petBirthdate" required value="<?php echo $petData['petBirthdate']; ?>">
                </div>

                <div class="d-flex">
                  <label for="petAge" class="forms-label fw-bold">Pet Age:</label>
                  <input type="text" class="form-control" id="petAge" name="petAge" required value="<?php echo $petData['petAge']; ?>">
                </div>

                <div class="d-flex">
                  <label for="petBreed" class="forms-label fw-bold">Breed:</label>
                  <input type="text" class="form-control" id="petBreed" name="petBreed" required value="<?php echo $petData['petBreed']; ?>">
                </div>

                <div class="d-flex">
                  <label for="petType" class="forms-label fw-bold">Pet Type:</label>
                  <input type="text" class="form-control" id="petType" name="petType" required value="<?php echo $petData['petType']; ?>">
                </div>

                <div class="d-flex">
                  <label for="petGender" class="forms-label fw-bold">Gender:</label>
                  <input type="text" class="form-control" id="petGender" name="petGender" required value="<?php echo $petData['petGender']; ?>">
                </div>

                <div class="d-flex">
                  <label for="petWeight" class="forms-label fw-bold">Weight:</label>
                  <input type="text" class="form-control" id="petWeight" name="petWeight" required value="<?php echo $petData['petWeight']; ?>">
                </div>

                <div class="d-flex">
                  <label for="petColor" class="forms-label fw-bold">Color:</label>
                  <input type="text" class="form-control" id="petColor" name="petColor" required value="<?php echo $petData['petColor']; ?>">
                </div>
                <?php
                    }
                } else {
                    echo "No pets found for this customer.";
                }
                ?>
              </div>
            </div>

            <div class="m-4 d-flex justify-content-between align-items-center">
              <div>
                <a href="transfer-ownership.php" class="transfer-btn btn-secondary">Transfer Ownership</a>
              </div>
              <div>
                <a href="update-medicalRecord.php" class="back-btn btn-secondary">View Medical History</a>
              </div>
            </div>
          
      </div>
    </section>

    <section class="">
      <div class="d-flex justify-content-around align-items-center ms-5 ps-5 pt-2">
        <div class="ms-5 ps-5">
            <a href="customers.php" class="back-btn btn-secondary">Back</a>
        </div>
        <div class="ms-5 ps-5">
            <button type="submit" name="save" class="save-vet-btn btn-secondary" id="addCustomerButton">Save</button>
        </div>
      </div>
    </section>
    </form>
  </main>
  <script>
           document.getElementById('fileInput').addEventListener('change', function (event) {
      const file = event.target.files[0];
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function () {
          document.getElementById('profilePic').src = reader.result;
        };
        reader.readAsDataURL(file);
      }
    });

    </script>
</body>
</html>