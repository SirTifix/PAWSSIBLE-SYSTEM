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
            exit;
        }
    } else {
        echo "Customer ID is missing.";
        exit; 
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          $customer = new Customer();
  
          $customerFirstname = $_POST['customerFirstname'];
          $customerMiddlename = $_POST['customerMiddlename'];
          $customerLastname = $_POST['customerLastname'];
          $customerDOB = $_POST['customerDOB'];
          $customerCity = $_POST['customerCity'];
          $customerAddress = $_POST['customerAddress'];
          $customerEmail = $_POST['customerEmail'];
          $customerState = $_POST['customerState'];
          $customerPostal = $_POST['customerPostal'];
          $customerPhone = $_POST['customerPhone'];

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
          $customer->customerID = $customer_id;

          $customerUpdateResult = $customer->update();
          if ($customerUpdateResult) {
              $pet = new Pet();
  
              $petName = $_POST['petName'];
              $petBirthdate = $_POST['petBirthdate'];
              $petAge = $_POST['petAge'];
              $petBreed = $_POST['petBreed'];
              $petType = $_POST['petType'];
              $petGender = $_POST['petGender'];
              $petWeight = $_POST['petWeight'];
              $petColor = $_POST['petColor'];
  
              $pet->petName = $petName;
              $pet->petBirthdate = $petBirthdate;
              $pet->petAge = $petAge;
              $pet->petBreed = $petBreed;
              $pet->petType = $petType;
              $pet->petGender = $petGender;
              $pet->petWeight = $petWeight;
              $pet->petColor = $petColor;
              $pet->customerID = $customer_id;

              $petUpdateResult = $pet->update();
              header('location: customers.php');
              exit;
          }
          else
          {

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
                                <input type="text" class="form-control" id="customerFirstname" name="customerFirstname" required
                                    value="<?php echo $customerData['customerFirstname']; ?>">
                            </div>

                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="middlename" class="forms-label">Middle Name (Optional):</label>
                                <input type="text" class="form-control" id="customerMiddlename" name="customerMiddlename"
                                    value="<?php echo $customerData['customerMiddlename']; ?>">
                            </div>
                        </div>

                        <div class="d-flex align-items-center col-12 row">
                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="lastname" class="forms-label">Last Name:</label>
                                <input type="text" class="form-control" id="customerLastname" name="customerLastname" required
                                    value="<?php echo $customerData['customerLastname']; ?>">
                            </div>

                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="dob" class="forms-label">DOB:</label>
                                <input type="date" class="form-control" id="customerDOB" name="customerDOB" required
                                    value="<?php echo $customerData['customerDOB']; ?>">
                            </div>
                        </div>

                        <div class="d-flex align-items-center col-12 row">
                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="address" class="forms-label">Address:</label>
                                <input type="text" class="form-control" id="customerAddress" name="customerAddress" required
                                    value="<?php echo $customerData['customerAddress']; ?>">
                            </div>

                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="city" class="forms-label">City:</label>
                                <input type="text" class="form-control" id="customerCity" name="customerCity" required
                                    value="<?php echo $customerData['customerCity']; ?>">
                            </div>
                        </div>

                        <div class="d-flex align-items-center col-12 row">
                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="email" class="forms-label">DOB:</label>
                                <input type="text" class="form-control" id="customerEmail" name="customerEmail" required
                                    value="<?php echo $customerData['customerEmail']; ?>">
                            </div>

                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="state" class="forms-label">State /Province:</label>
                                <input type="text" class="form-control" id="customerState" name="customerState" required
                                    value="<?php echo $customerData['customerState']; ?>">
                            </div>
                        </div>

                        <div class="d-flex align-items-center col-12 row">
                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="code" class="forms-label">Zip code /Postal:</label>
                                <input type="text" class="form-control" id="customerPostal" name="customerPostal" required
                                    value="<?php echo $customerData['customerPostal']; ?>">
                            </div>

                            <div class="my-1 d-flex align-items-center col-6 ps-5">
                                <label for="num" class="forms-label">Phone Number:</label>
                                <input type="number" class="form-control" id="customerPhone" name="customerPhone" required
                                    value="<?php echo $customerData['customerPhone']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="vet-head-form mt-4">
                        <p>Pet Information</p>
                    </div>

                    <div class="d-flex justify-content-around">
                        <div class="position-relative mt-5">
                            <input type="file" id="fileInput" style="display: none;" accept="image/*">
                            <img src="./assets/img/upload-photo.png" alt="Profile Picture" class="profile-pic"
                                id="profilePic">
                            <label for="fileInput" class="upload-icon"><i class="fa-solid fa-plus"></i>
                            </label>
                        </div>

                        <div class="form-body">
                            <?php
                $pets = $pet->fetchByCustomerId($customer_id);
                if ($pets) {
                  foreach ($pets as $petData) { 
                    ?>
                            <div class="d-flex mt-3">
                                <label for="petName" class="forms-label fw-bold">Pet Name:</label>
                                <input type="text" class="form-control" id="petName" name="petName" required
                                    value="<?php echo $petData['petName']; ?>">
                            </div>

                            <div class="d-flex">
                                <label for="petBirthdate" class="forms-label fw-bold">Birth Date:</label>
                                <input type="date" class="form-control" id="petBirthdate" name="petBirthdate" required
                                    value="<?php echo $petData['petBirthdate']; ?>">
                            </div>

                            <div class="d-flex">
                                <label for="petAge" class="forms-label fw-bold">Pet Age:</label>
                                <input type="text" class="form-control" id="petAge" name="petAge" required
                                    value="<?php echo $petData['petAge']; ?>">
                            </div>

                            <div class="d-flex">
                                <label for="petBreed" class="forms-label fw-bold">Breed:</label>
                                <input type="text" class="form-control" id="petBreed" name="petBreed" required
                                    value="<?php echo $petData['petBreed']; ?>">
                            </div>

                            <div class="d-flex">
                                <label for="petType" class="forms-label fw-bold">Pet Type:</label>
                                <input type="text" class="form-control" id="petType" name="petType" required
                                    value="<?php echo $petData['petType']; ?>">
                            </div>

                            <div class="d-flex">
                                <label for="petGender" class="forms-label fw-bold">Gender:</label>
                                <input type="text" class="form-control" id="petGender" name="petGender" required
                                    value="<?php echo $petData['petGender']; ?>">
                            </div>

                            <div class="d-flex">
                                <label for="petWeight" class="forms-label fw-bold">Weight:</label>
                                <input type="text" class="form-control" id="petWeight" name="petWeight" required
                                    value="<?php echo $petData['petWeight']; ?>">
                            </div>

                            <div class="d-flex">
                                <label for="petColor" class="forms-label fw-bold">Color:</label>
                                <input type="text" class="form-control" id="petColor" name="petColor" required
                                    value="<?php echo $petData['petColor']; ?>">
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
                            <a href="transfer-ownership.php?petID=<?php $customer_id?>" class="transfer-btn btn-secondary">Transfer Ownership</a>
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
                    <button type="submit" name="save" class="save-vet-btn btn-secondary"
                        id="addCustomerButton">Save</button>
                </div>
            </div>
        </section>

        </form>
    </main>
    <script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function() {
                document.getElementById('profilePic').src = reader.result;
            };
            reader.readAsDataURL(file);
        }
    });
    </script>
</body>

</html>