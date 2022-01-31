<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/UserPremium.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/CreditCard.php';

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

      echo ("<br><h3>Gandalf</h3>");
      var_dump($user01);

      echo ("<br><h3>Aragorn</h3>");
      var_dump($user02);

      echo ("<br><h3>Frodo</h3>");
      $user03 = new UserPremium("Frodo", "Baggins", "frodo.baggins@gmail.com", "via Contea 1", "+39 3336669900", "2015-01-30");
      var_dump($user03);

      echo ("<br><h3>Frodo Livello Premium</h3>");
      $user03_lvl = $user03->getLevel();
      var_dump($user03->getName() . "'s Premium Level = " . $user03_lvl);

      echo ("<br><h3>Frodo Sconto</h3>");
      $user03_discount = $user03->getDiscount($user03_lvl);
      var_dump($user03->getName() . "'s Discount = " . $user03_discount . "%");

      echo ("<br><h3>CartaCredito</h3>");
      $creditCard01 = new CreditCard("Frodo Baggins", "0000111122223333", 123, "2024-03");
      var_dump($creditCard01);

      echo("<br><h3>Frodo + CartaCredito</h3>");
      $user03->insertCreditCard($creditCard01);
      var_dump($user03);
      ?>
    </div>
  </div>
</body>

</html>