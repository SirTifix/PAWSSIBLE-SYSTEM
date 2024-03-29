<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
    require_once('./include/sec-head.php');
?>
<body>
    <?php
        require_once('./include/sec-header.php')
    ?>
    <main>
    <?php
        require_once('./include/sec-sidepanel.php')
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
                  <input type="text" class="form-control" id="firstname" name="firstname" required value="Elize">
                </div>
        
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="lastname" class="form-label">Last Name:</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required value="Smith">
                </div>
              </div>
      
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="dob" class="form-label">DOB:</label>
                  <input type="date" class="form-control" id="dob" name="dob" required value="01/22/1999">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="city" class="form-label">City:</label>
                  <input type="text" class="form-control" id="city" name="city" required value="Zamboanga">
                </div>
              </div>

              <div class="address-form align-items-center col-12 ps-5">
                <label for="address" class="form-label ms-2">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required style="width: 82.5%;" value="Ruste Drive, San Jose Road, Zamboanga City">
            </div>
            

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="email" class="form-label">DOB:</label>
                  <input type="text" class="form-control" id="email" name="email" required value="elize.smith@gmail.com">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="state" class="form-label">State /Province:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Zamboanga del Sur">
                </div>
              </div>

            <div class="d-flex align-items-center col-12 row">
              <div class="my-1 d-flex align-items-center col-6 ps-5">
                <label for="code" class="form-label">Zip code /Postal:</label>
                <input type="text" class="form-control" id="code" name="code" required value="7000">
              </div>

              <div class="my-1 d-flex align-items-center col-6 ps-5">
                <label for="num" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" id="num" name="num" required value="09159894038">
              </div>
            </div>
            
  </div>
            <div class="vet-head-form mt-4">
              <p>Pet Information</p>
            </div>

            <div class="d-flex justify-content-around">
              <div class="upload-pic-con">
              <form action="upload.php" method="post" enctype="multipart/form-data">
                  <input type="submit" value="Upload Image" name="submit">
                </form>
              </div>

              <div class="form-body">
                <div class="d-flex mt-3">
                  <label for="petname" class="form-label fw-bold">Pet Name:</label>
                  <input type="text" class="form-control" id="petname" name="petname" required value="Belgy">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Birth Date:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="3">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Pet Age:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="2/25/2020">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Breed:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Malinoise">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Pet Type:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Dog">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Gender:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Female">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Weight:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="15kg">
                </div>

                <div class="d-flex">
                  <label for="state" class="form-label fw-bold">Color:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Black">
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
</body>
</html>