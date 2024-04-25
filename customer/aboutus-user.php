<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no">
    <title>About Us</title>
    <link rel="website icon" type="png" href="./assets/img/logo.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $title = 'Pawssible Solutions Veterinary';
    require_once('./include/aboutus-user-header.php');
    ?>

    <div class="intro-title text-center">
        <h1> About Us </h1>
    </div>

    <section>
        <div class="about-us-description">
            <h1> Our Mission </h1>
            <br>
            <h3>
                To assist clients' pets in living long, happy, and healthy lives. An excellent connection 
                with the veterinarian is essential for your pet's well-being. Everyone at Pawssible Solution 
                Veterinary Clinic is dedicated to providing professional, compassionate, and personalized service. 
                Pawssible Solution Veterinary Clinic takes pleasure in adhering to the best veterinary medicine 
                standards. We have a full-service clinic with cutting-edge veterinary medical technologies.
            </h3>
        </div>
    </section>

    <section>
        <div class="about-us-description2">
            <br>
            <h2><i class="paw fa-solid fa-paw"></i></h2>
            <h3>
                We care for our patients as if they were our own pets, 
                and we strive to provide customers with the treatment they 
                envision and deserve.
            </h3>
            
            <br>
            <h2><i class="paw fa-solid fa-paw"></i></h2>
            <h3>
                We adopt an individualized approach to each of our patients' 
                long-term care and are committed to giving our clients with enough 
                knowledge to make proper decisions on the health care of their animal 
                companions.
            </h3>
        </div>
    </section>

    <?php
        require_once('./include/footer.php');
        require_once('./include/js.php');
    ?>

    <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('navbar-links').classList.toggle('active');
        });
    </script>
</body>
</html>
