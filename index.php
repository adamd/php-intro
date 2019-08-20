<!DOCTYPE html>
<html>
  <head>
    <title>This is a title</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php

    $products['Computer']=750;
    $products['Car']=15000;
    $products['iPhone']=1000;
    $products['Toaster']=75;

      $tax_value = .0825; // This is the tax value
      $value = 750 * (1+$tax_value); // The price of the computer multiplied by tax
      $selected_product = "Computer"; // This is the product we are looking for

      echo "<h1> The ".$selected_product." is $".$value." after tax. </h1>";

    foreach($products as $key => $value){
	    echo "The ".$key." costs ".$value;
    }
    ?>
  </body>
</html>
