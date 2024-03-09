<?php
    require_once('../classes/customer.class.php');
    require_once('../classes/pet.class.php');
    require_once('./tools/functions.php');

    if(isset($_GET['customerID'])) {
        $customer_id = $_GET['customerID'];

        $customer = new Customer();

        $customerData = $customer->fetch($customer_id);

        if($customerData) {
            $pet = new Pet();
            $petData = $pet->fetchByCustomerId($customer_id);
        } else {
            echo "Customer not found.";
        }
    } else {
        echo "Customer ID is missing.";
        exit; 
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
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="veterinarian-head">
          <p>Update Customer Information</p>
        </div>
        <div>
          <a href="customers.php" class="top-back btn-secondary pe-5"><i class="fa-solid fa-chevron-left me-3"></i> BACK</a>
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
                  <label for="firstname" class="form-label">First Name:</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" required value="<?php echo $customerData['customerFirstname']; ?>">
                </div>
        
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="lastname" class="form-label">Last Name:</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required value="<?php echo $customerData['customerLastname']; ?>">
                </div>
              </div>
      
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="dob" class="form-label">DOB:</label>
                  <input type="date" class="form-control" id="dob" name="dob" required value="<?php echo $customerData['customerDOB']; ?>">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="city" class="form-label">City:</label>
                  <input type="text" class="form-control" id="city" name="city" required value="<?php echo $customerData['customerCity']; ?>">
                </div>
              </div>

              <div class="address-form align-items-center col-12 ps-5">
                <label for="address" class="form-label ms-2">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required style="width: 82.5%;" value="<?php echo $customerData['customerAddress']; ?>">
            </div>
            

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="email" class="form-label">DOB:</label>
                  <input type="text" class="form-control" id="email" name="email" required value="<?php echo $customerData['customerEmail']; ?>">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="state" class="form-label">State /Province:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $customerData['customerState']; ?>">
                </div>
              </div>

            <div class="d-flex align-items-center col-12 row">
              <div class="my-1 d-flex align-items-center col-6 ps-5">
                <label for="code" class="form-label">Zip code /Postal:</label>
                <input type="text" class="form-control" id="code" name="code" required value="<?php echo $customerData['customerPostal']; ?>">
              </div>

              <div class="my-1 d-flex align-items-center col-6 ps-5">
                <label for="num" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" id="num" name="num" required value="<?php echo $customerData['customerPhone']; ?>">
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
                <div class="d-flex mt-3">
                  <label for="petname" class="form-label fw-bold">Pet Name:</label>
                  <input type="text" class="form-control" id="petname" name="petname" required value="<?php echo $petData['petName']; ?>">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Birth Date:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petBirthdate']; ?>">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Pet Age:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petAge']; ?>">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Breed:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petBreed']; ?>">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Pet Type:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petType']; ?>">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Gender:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petGender']; ?>">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Weight:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petWeight']; ?>">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Color:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petColor']; ?>">
                </div>

              </div>
            
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <div>
                <a href="transfer-ownership.php" class="transfer-btn btn-secondary">Transfer Ownership</a>
              </div>
            <div>
              <button type="submit" class="save-vet-btn btn-secondary" id="addStaffButton">View More </button>
            </div>
            </div>
  </form>
        
      </div>
    </section>
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