<?php
    require_once('../classes/customer.class.php');
    require_once('../classes/pet.class.php');
    require_once('./tools/functions.php');

    /*if(isset($_GET['customerID'])) {
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
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
    require_once('./include/vet-head.php');
?>
<body>
    <?php
        require_once('./include/vet-header.php')
    ?>
    <main>
    <?php
        require_once('./include/vet-sidepanel.php')
    ?>
    <section class="veterinarian-con">
      <div class="d-flex justify-content-between mb-4">
        <div class="veterinarian-head">
          <p>Customer Information</p>
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
                  <input type="text" class="form-control" id="firstname" name="firstname" required value="<?php //echo $customerData['customerFirstname']; ?>">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="middlename" class="forms-label">Middle Name (Optional):</label>
                  <input type="text" class="form-control" id="middlename" name="middlename" value="<?php //echo $customerData['customerMiddlename']; ?>">
                </div>
              </div>
      
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="lastname" class="forms-label">Last Name:</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required value="<?php //echo $customerData['customerLastname']; ?>">
                </div>
                
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="dob" class="forms-label">DOB:</label>
                  <input type="date" class="form-control" id="dob" name="dob" required value="<?php //echo $customerData['customerDOB']; ?>">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="address" class="forms-label">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" required value="<?php //echo $customerData['customerAddress']; ?>">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="city" class="forms-label">City:</label>
                  <input type="text" class="form-control" id="city" name="city" required value="<?php //echo $customerData['customerCity']; ?>">
                </div>
              </div>
              
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="email" class="forms-label">DOB:</label>
                  <input type="text" class="form-control" id="email" name="email" required value="<?php //echo $customerData['customerEmail']; ?>">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="state" class="forms-label">State /Province:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="<?php //echo $customerData['customerState']; ?>">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="code" class="forms-label">Zip code /Postal:</label>
                  <input type="text" class="form-control" id="code" name="code" required value="<?php //echo $customerData['customerPostal']; ?>">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="num" class="forms-label">Phone Number:</label>
                  <input type="number" class="form-control" id="num" name="num" required value="<?php //echo $customerData['customerPhone']; ?>">
                </div>
              </div>
            </div>
          </form>
      </div>
    </section>

    <section class="">
      <div class="d-flex justify-content-end me-4 pe-5 pt-3">
          <a href="customer_information.php" class="top-back btn-secondary">Back</a>
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