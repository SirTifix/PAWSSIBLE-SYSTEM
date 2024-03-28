<?php
require_once('../classes/customer.class.php');
require_once('../classes/pet.class.php');
require_once('./tools/functions.php');

if (isset($_GET['customerID'])) {
  $customer_id = $_GET['customerID'];

  $customer = new Customer();

  $customerData = $customer->fetch($customer_id);

  if ($customerData) {
    $pet = new Pet();
    $petData = $pet->fetchByCustomerId($customer_id);
  } else {
    echo "Customer not found.";
    exit;
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
      <div class="d-flex justify-content-start mb-4">
        <div class="veterinarian-head">
          <p>Customer Information</p>
        </div>
      </div>
    </section>

    <section class="vet-form-con row">
      <div class="head-form d-flex justify-content-between align-items-center col-12">
        <i class="fa-solid fa-user " aria-hidden="true"></i>
        <i class="fa-solid fa-paw" aria-hidden="true"></i>
      </div>

      <div class="row">
        <div class="col-lx-7 col-lg-7 col-md-12">
          <div class="create-vet-form-info">
            <div class="icon-expand d-flex justify-content-end">
                <a href="customer-expand-info.php?customerID=<?= $customer_id ?>" class=""><i class="fa fa-expand" aria-hidden="true" style="color: black;"></i></a>
            </div>
            <form action="" method="post">
              <div class="form-customer-info">
                <div class="d-flex">
                  <label for="id" class="forms-label fw-bold">ID:</label>
                  <input type="text" class="form-control" id="id" name="id" required
                    value="<?php echo $customerData['customerID']; ?>">
                </div>

                <div class="d-flex">
                  <label for="name" class="forms-label fw-bold">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" required
                    value="<?php echo $customerData['customerFirstname'] . ' ' . $customerData['customerLastname']; ?>">
                </div>

                <div class="d-flex">
                  <label for="address" class="forms-label fw-bold">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" required
                    value="<?php echo $customerData['customerAddress'] . ' ' . $customerData['customerCity']; ?>">
                </div>

                <div class="d-flex">
                  <label for="email" class="forms-label fw-bold">Email:</label>
                  <input type="text" class="form-control" id="email" name="email" required
                    value="<?php echo $customerData['customerEmail']; ?>">
                </div>

                <div class="d-flex">
                  <label for="num" class="forms-label fw-bold">Phone Number:</label>
                  <input type="number" class="form-control" id="num" name="num" required
                    value="<?php echo $customerData['customerPhone']; ?>">
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lx-5 col-lg-5 col-md-12">
          <div class="create-vet-form-info-pet">
            <div class="d-flex justify-content-between">
              <div class="pt-2">
                <h3>Pets:</h3>
              </div>
              <div class="pt-2">
                <button class="add-pet-btn-info" type="button" data-bs-toggle="modal" data-bs-target="#addPetModal">
                <i class="fa-solid fa-circle-plus m-1" aria-hidden="true"></i> Add Pet</button>
              </div>
            </div>
            <form action="" method="post">
              <?php
              $pets = $pet->fetchByCustomerId($customer_id);
              if ($pets) {
                foreach ($pets as $petData) { 
                  ?>
                  <div class="form-pet-info">
                    <div class="pet-info-box">
                      <div class="mb-3 ps-3">
                        <div class="d-flex">
                          <label for="petName" class="forms-label-pet pe-5" style="font-weight: bold;">Name:</label>
                          <input type="text" class="form-control-pet" id="petName" name="petName" required
                            value="<?php echo $petData['petName']; ?>">
                        </div>
                        <div class="d-flex">
                          <label for="petType" class="forms-label-pet pe-4" style="font-weight: bold;">Pet Type:</label>
                          <input type="text" class="form-control-pet" id="petType" name="petType" required
                            value="<?php echo $petData['petType']; ?>">
                        </div>
                      </div>
                      <a href="" class="view-pet-btn" data-bs-toggle="modal" data-bs-target="#viewPetModal<?php //echo $petData['petId']; ?>">View</a>
                    </div>
                  </div>

                  <div class="modal fade" id="viewPetModal<?php echo $petData['petId']; ?>" tabindex="-1" aria-labelledby="viewPetModalLabel<?php echo $petData['petId']; ?>" aria-hidden="true">

                  </div>
                  <?php 
                }
              } else {
                echo "No pets found for this customer.";
              } 
              ?>
          </form>
        </div>
      </div>
    </section>

    <section class="">
      <div class="d-flex justify-content-end me-4 pe-5 pt-3">
          <a href="customers.php" class="top-back btn-secondary">Back</a>
      </div>
    </section>

    <!--Add Pet Modal-->
    <section>
      <div class="modal fade" id="addPetModal" tabindex="-1" aria-labelledby="addPetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <div class="d-flex align-items-center w-100">
                <div class="mt-4 text-center w-100">
                  <h2 class="modal-title fw-bold" id="addPetModalLabel">Pet Information</h2>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="d-flex justify-content-around">
                
              <div class="position-relative mt-5">
                  <input type="file" id="fileInput" style="display: none;" accept="image/*">
                  <img src="./assets/img/upload-photo.png" alt="Profile Picture" class="profile-pic" id="profilePic">
                  <label for="fileInput" class="upload-icon"><i class="fa-solid fa-plus"></i>
                  </label>
              </div>

                <form action="" method="post">
                  <div class="form-body">
                    <div class="d-flex mt-3">
                      <label for="petName" class="forms-label fw-bold">Pet Name:</label>
                      <input type="text" class="form-control" id="petName" name="petName" required value="<?php echo $petData['petName']; ?>">
                    </div>

                    <div class="d-flex">
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
                  </div>
              </div>
              <div class="modal-footer mt-3 d-flex justify-content-between align-items-center">
                <div>
                  <a href="customer-info.php" class="back-btn btn-secondary">Cancel</a>
                </div>
                <div>
                  <button type="submit" class="save-vet-btn btn-secondary" id="addStaffButton">Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--View Pet Modal-->
    <section>
      <div class="modal fade" id="viewPetModal" tabindex="-1" aria-labelledby="viewPetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <div class="d-flex align-items-center w-100">
                <div class="mt-4 text-center w-100">
                  <h2 class="modal-title fw-bold" id="addPetModalLabel">Pet Information</h2>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="d-flex justify-content-around">
                
              <div class="position-relative mt-5">
                  <input type="file" id="fileInput" style="display: none;" accept="image/*">
                  <img src="./assets/img/upload-photo.png" alt="Profile Picture" class="profile-pic" id="profilePic">
                  <label for="fileInput" class="upload-icon"><i class="fa-solid fa-plus"></i>
                  </label>
              </div>

                <form action="" method="post">
                  <div class="form-body">
                    <div class="d-flex mt-3">
                      <label for="petname" class="forms-label fw-bold">Pet Name:</label>
                      <input type="text" class="form-control" id="petname" name="petname" required value="<?php echo $petData['petName']; ?>">
                    </div>

                    <div class="d-flex">
                      <label for="state" class="forms-label fw-bold">Birth Date:</label>
                      <input type="date" class="form-control" id="state" name="state" required value="<?php echo $petData['petBirthdate']; ?>">
                    </div>

                    <div class="d-flex">
                      <label for="state" class="forms-label fw-bold">Pet Age:</label>
                      <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petAge']; ?>">
                    </div>

                    <div class="d-flex">
                      <label for="state" class="forms-label fw-bold">Breed:</label>
                      <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petBreed']; ?>">
                    </div>

                    <div class="d-flex">
                      <label for="state" class="forms-label fw-bold">Pet Type:</label>
                      <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petType']; ?>">
                    </div>

                    <div class="d-flex">
                      <label for="state" class="forms-label fw-bold">Gender:</label>
                      <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petGender']; ?>">
                    </div>

                    <div class="d-flex">
                      <label for="state" class="forms-label fw-bold">Weight:</label>
                      <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petWeight']; ?>">
                    </div>

                    <div class="d-flex">
                      <label for="state" class="forms-label fw-bold">Color:</label>
                      <input type="text" class="form-control" id="state" name="state" required value="<?php echo $petData['petColor']; ?>">
                    </div>
                  </div>
              </div>
              <div class="modal-footer mt-5 d-flex justify-content-between align-items-center">
                <div>
                  <a href="customer-info.php" class="back-btn btn-secondary">Cancel</a>
                </div>
                <div>
                <a href="view-medicalRecord.php" class="back-btn btn-secondary">View Medical Record</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php
  require_once('./include/js.php')
    ?>
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

      // Get the file input element
      const fileInput = document.getElementById('fileInput');
        // Get the image preview element
        const imagePreview = document.getElementById('imagePreview');

        // Add event listener to file input change event
        fileInput.addEventListener('change', function(event) {
            // Get the selected file
            const file = event.target.files[0];
            // Create a FileReader object
            const reader = new FileReader();
            // Set up the onload event for the reader
            reader.onload = function(e) {
                // Create an img element
                const img = document.createElement('img');
                // Set the src attribute of the img element to the data URL of the selected file
                img.src = e.target.result;
                // Append the img element to the image preview container
                imagePreview.innerHTML = '';
                imagePreview.appendChild(img);
            };
            // Read the selected file as a data URL
            reader.readAsDataURL(file);
        });
    </script>

</body>

</html>
