<!DOCTYPE html>
<html>
  <head>
    <title>This is a title</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php
      $tax_value = .0825; // This is the tax value
      $value = 750 * (1+$tax_value); // The price of the computer multiplied by tax
      $selected_product = "Computer"; // This is the product we are looking for

      echo "<h1> The ".$selected_product." is $".$value." after tax. </h1>";
    ?>
  </body>
</html>
