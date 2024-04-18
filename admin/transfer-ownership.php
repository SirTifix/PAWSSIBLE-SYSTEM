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
      <div class="veterinarian-head">
          <p>Transfer Ownership</p>
        </div>
    </section>

    <section class="vet-form-con row">
      <div class="head-form col-12 d-flex justify-content-between align-items-center">
        <i class="fa-solid fa-user " aria-hidden="true"></i>
        <i class="fa-solid fa-paw" aria-hidden="true"></i>
      </div>

      <div class="create-vet-form col-12">
        <div class="vet-head-form">
          <p>Current Owner Information</p>
        </div>
        <form action="" method="post">
            <div class="form-body d-flex flex-wrap row">
              <div class="d-flex mt-3 align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="firstname" class="forms-label">First Name:</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" required value="Elize">
                </div>
        
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="middlename" class="forms-label">Middle Name (Optional):</label>
                  <input type="text" class="form-control" id="middlename" name="middlename" required value="Lim">
                </div>
              </div>
      
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="lastname" class="forms-label">Last Name:</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required value="Smith">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="dob" class="forms-label">DOB:</label>
                  <input type="date" class="form-control" id="dob" name="dob" required value="01/22/1999">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="address" class="forms-label">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" required value="Ruste Drive, San Jose Road, Zamboanga City">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="city" class="forms-label">City:</label>
                  <input type="text" class="form-control" id="city" name="city" required value="Zamboanga">
                </div>
              </div>
              
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="email" class="forms-label">Email:</label>
                  <input type="text" class="form-control" id="email" name="email" required value="elize.smith@gmail.com">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="state" class="forms-label">State /Province:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Zamboanga del Sur">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="code" class="forms-label">Zip code /Postal:</label>
                  <input type="text" class="form-control" id="code" name="code" required value="7000">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="num" class="forms-label">Phone Number:</label>
                  <input type="text" class="form-control" id="num" name="num" required value="09159894038">
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
                  <label for="petname" class="forms-label fw-bold">Pet Name:</label>
                  <input type="text" class="form-control" id="petname" name="petname" required value="Belgy">
                </div>

                <div class="d-flex">
                  <label for="state" class="forms-label fw-bold">Birth Date:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="3">
                </div>

                <div class="d-flex">
                  <label for="state" class="forms-label fw-bold">Pet Age:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="2/25/2020">
                </div>

                <div class="d-flex">
                  <label for="state" class="forms-label fw-bold">Breed:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Malinoise">
                </div>

                <div class="d-flex">
                  <label for="state" class="forms-label fw-bold">Pet Type:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Dog">
                </div>

                <div class="d-flex">
                  <label for="state" class="forms-label fw-bold">Gender:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Female">
                </div>

                <div class="d-flex">
                  <label for="state" class="forms-label fw-bold">Weight:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="15kg">
                </div>

                <div class="d-flex">
                  <label for="state" class="forms-label fw-bold">Color:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Black">
                </div>
              </div>
            </div>

            <div class="vet-head-form mt-4">
              <p>New Owner Information</p>
            </div>

            <div class="mt-3 mx-5 d-flex justify-content-between">
              <div>
                <form action="#" method="post">
                  <label class="pe-2 fw-medium">
                    <input type="radio" name="customer" value="existing">
                    Existing Customer
                  </label>
                  <label class="ps-2 fw-medium">
                    <input type="radio" name="customer" value="new">
                    New Customer
                  </label>
                </form>
              </div>
    
              <div class="search-container col-4 d-flex justify-content-center">
                <div class="search-wrapper d-flex align-items-center m-0 row">
                    <input type="text" class="search col-10" placeholder="search.....">
                    <i class="search-icon fas fa-search col-2" aria-hidden="true"></i>
                </div>
              </div>
            </div>
  
            <div class="form-body d-flex flex-wrap row">
              <div class="d-flex mt-3 align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="firstname" class="forms-label">First Name:</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" required value="Elize">
                </div>
        
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="middlename" class="forms-label">Middle Name (Optional):</label>
                  <input type="text" class="form-control" id="middlename" name="middlename" required value="Lim">
                </div>
              </div>
      
              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="lastname" class="forms-label">Last Name:</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required value="Smith">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="dob" class="forms-label">DOB:</label>
                  <input type="date" class="form-control" id="dob" name="dob" required value="01/22/1999">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="address" class="forms-label">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" required value="Ruste Drive, San Jose Road, Zamboanga City">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="city" class="forms-label">City:</label>
                  <input type="text" class="form-control" id="city" name="city" required value="Zamboanga">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="email" class="forms-label">Email:</label>
                  <input type="text" class="form-control" id="email" name="email" required value="elize.smith@gmail.com">
                </div>
    
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="state" class="forms-label">State /Province:</label>
                  <input type="text" class="form-control" id="state" name="state" required value="Zamboanga del Sur">
                </div>
              </div>

              <div class="d-flex align-items-center col-12 row">
                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="code" class="forms-label">Zip code /Postal:</label>
                  <input type="text" class="form-control" id="code" name="code" required value="7000">
                </div>

                <div class="my-1 d-flex align-items-center col-6 ps-5">
                  <label for="num" class="forms-label">Phone Number:</label>
                  <input type="text" class="form-control" id="num" name="num" required value="09159894038">
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <div>
                <a href="update-customer.php" class="back-btn btn-secondary">Cancel</a>
              </div>
            <div>
              <button type="submit" class="save-vet-btn btn-secondary" id="addStaffButton">Transfer</button>
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