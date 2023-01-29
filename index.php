<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="SoulCute Store es tu tienda virtual para adquirir ropa original y marca de los ESTADO UNIDOS."
    />

    <!-- Always include this line of code!!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <link rel="manifest" href="manifest.webmanifest" />
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" /> -->
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>

    <script
      defer
      src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    <script defer src="js/script.js"></script>

    <title>Soul Cute Store &mdash; Viste tu alma</title>
  </head>
  <body>
  
  <!-- START LIBRARY APP  -->
  <?php require 'controllers/indexCONTROLLERS.php' ?>



      <?php include 'sections/header.php';?>

    <main>

      <?php include 'sections/home.php';?>

      <?php include 'sections/enterpriseFriends.php'?>
    
      <?php include 'sections/workit.php'?>

      <?php// include 'sections/brand.php'?>

      <?php// include 'sections/costumer.php'?>

      <?php// include 'sections/price.php'?>

      <?php include 'sections/contact.php'?>

    </main>

    <?php include 'sections/footer.php'?>
  </body>
</html>
