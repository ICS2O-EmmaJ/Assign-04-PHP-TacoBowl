<?php

  // declaring variables
  $base_cost = 0;

  // get the user input
	$size = $_POST['size'];

  // declaring constants for sizes
  define("PEQUENA_COST", 7.45);
  define("MEDIANA_COST", 9.35);
  define("GRANDE_COST", 11.95);

  // calculating base cost using if statements. If the size is pequena the base is $7.45
  if ($size == "pequena") {
    $base_cost = PEQUENA_COST;
  }
  // calculating base cost using if statements. If the size is mediana the base is $9.35
  else if ($size == "mediana") {
    	$base_cost = MEDIANA_COST;
  	}
  // calculating base cost using if statements. If the size is grande the base is $11.95
  	else if ($size == "grande") {		
    	$base_cost = GRANDE_COST;
  	}    
  // declaring constant topping price
  define("TOPPING_PRICE", 0.50);

  // initializing topping cost variable
  $num_toppings = 0;

  // adding to topping cost based on checkboxes checked (if guacamole is clicked)
  if (isset($_POST["topping1"])) {
    $num_toppings++;
  }
  // if pico de gallo is clicked
  if (isset($_POST["topping2"])) {
    $num_toppings++;
  }
  // if mexican crema is clicked
  if (isset($_POST["topping3"])) {
    $num_toppings++;
  }
  // if medium cheddar is clicked
  if (isset($_POST["topping4"])) {
    $num_toppings++;
  }
  // if cilantro lime rice is clicked
  if (isset($_POST["topping5"])) {
    $num_toppings++;
  }
  // if black beans is clicked
  if (isset($_POST["topping6"])) {
    $num_toppings++;
  }
  
  // determining topping cost
  $topping_cost = $num_toppings * TOPPING_PRICE;

  // declaring variables for side and drink

  // declaring constants for side and drink
  define("NACHOS_PRICE", 4.25);
  define("NO_NACHOS", 0);
  define("MARGARITA_PRICE", 8.15);
  define("NO_MARGARITA", 0);

  // determining whether user wants a margarita or not by determining which radio button is selected
  $sideDrinkChecked = $_POST["sidedrink"];

  if ($sideDrinkChecked == "sidedrink-yes") {
    $side_drink = MARGARITA_PRICE;
  }
    
  else if ($sideDrinkChecked == "sidedrink-no") {
    $side_drink = NO_MARGARITA;
  }

  //determining whether or not user wants a chips and salsa side order based on which radio button is selected
  $sideOrderChecked = $_POST["sideorder"];

  if ($sideOrderChecked == "sideorder-yes") {
    $side_nachos = NACHOS_PRICE;
  }

  else if ($sideOrderChecked == "sideorder-no") {
    $side_nachos = NO_NACHOS;
  }

  // calculating subtotal
  $subtotal = $base_cost + $topping_cost + $side_drink + $side_nachos;
  $subrounded = number_format($subtotal, 2);

  // calculating tax
  define("HST", 0.13);
  $tax = $subtotal * HST;
  $taxrounded = number_format($tax, 2);

  // calculating total
  $total = $subtotal + $tax;
  $totalrounded = number_format($total, 2);

  // display the message
  echo "Your subtotal is $$subrounded <br>Your HST is $$taxrounded <br>Your total is $$totalrounded.";
?>

