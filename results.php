<?php

  // declaring variables
  $base_cost = 0;

  // get the user input
	$size = $_POST['size'];

  // calculating base cost using if statements
  if (size == "pequena") {
    $base_cost = 7.45;
  }
  else if (size == "mediana") {
    	$base_cost = 9.35;
  	}
  	else if (size == "grande") {		
    	$base_cost = 11.95;
  	}    

  // declaring constant topping price
  define("TOPPING_PRICE", 0.50);

  // initializing topping cost variable
  $topping_cost = 0;

  // adding to topping cost based on checkboxes checked (if guacamole is clicked)
  if (isset($_POST["topping1"])) {
    $topping_cost++;
  }
  // if pico de gallo is clicked
  if (isset($_POST["topping2"])) {
    $topping_cost++;
  }
  // if mexican crema is clicked
  if (isset($_POST["topping3"])) {
    $topping_cost++;
  }
  // if medium cheddar is clicked
  if (isset($_POST["topping4"])) {
    $topping_cost++;
  }
  // if cilantro lime rice is clicked
  if (isset($_POST["topping5"])) {
    $topping_cost++;
  }
  // if black beans is clicked
  if (isset($_POST["topping6"])) {
    $topping_cost++;
  }
  
  // determining topping cost
  $topping_cost = $num_toppings * TOPPING_PRICE;

  // declaring variables
  $side_drink = 0;
  $side_nachos = 0;


  // determining whether user wants a margarita or not by determining which radio button is selected 
  if (isset($_POST["sidedrink-yes"])) {
    $side_drink = 8.15;
  }
    
  else if (isset($_POST["sidedrink-no"])) {
    $side_drink = 0;
  }

  //determining whether or not user wants a chips and salsa side order based on which radio button is selected
  if (isset($_POST["sideorder-yes"])) {
    $side_nachos = 4.25;
  }

  else if (isset($_POST["sideorder-no"])) {
    $side_nachos = 0;
  }

  // determining total for side cost (drinks + nachos)
  $side_cost = $side_drink + $side_nachos;

  // calculating subtotal
  $subtotal = $base_cost + $topping_cost + $side_cost + $side_drink;
  $subrounded = number_format($subtotal, 2);

  // calculating tax
  define("HST", 0.13);
  $tax = $subtotal * HST;
  $taxrounded = number_format($tax, 2);

  // calculating total
  $total = $subtotal + $tax;
  $totalrounded = number_format($total, 2);

  // display the message
  echo "Your subtotal is $$subrounded <br>Your HST is $$taxrounded <br>Your total is$$totalrounded.";
?>

