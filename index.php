<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserPremium.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eCommerce</title>
  <link rel="shortcut icon" href="#">

  <!-- MYCSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h1>eCommerce</h1>
    <div class="php-show">
      <?php

      $user01 = new User("Gandalf", "il Bianco", "gandalf.ilbianco@gmail.com", "via Palantir dal Mondo 10", "+39 3334442211");
      $user02 = new User("Aragorn", "Grampasso", "aragorn.grampasso@gmail.com", "largo Minas Tirith 1", "+39 3334445566");

      var_dump($user01);
      echo ("<br><br>");
      var_dump($user02);
      echo ("<br><br>");

      $user03 = new UserPremium("Frodo", "Baggins", "frodo.baggins@gmail.com", "via Contea 1", "+39 3336669900", "2015-01-30");
      var_dump($user03);
      $user03->getDiscount($user03->getLevel());


      ?>
    </div>
  </div>
</body>

</html>