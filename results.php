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

  // determining how many toppings the user selected by counting number of checkboxes checked (code taken from https://stackoverflow.com/questions/18572351/counting-how-many-checkbox-are-checked-php-html
  $num_checkboxes = $_POST['checkbox'];
  $num_toppings = count($num_checkboxes);

  // declaring constant topping price
  define("TOPPING_PRICE", 0.50);

  // determining topping cost
  $topping_cost = $num_toppings * TOPPING_PRICE;

  // declaring variables
  $side_cost = 0;
  $side_drink = 0;

  // determining whether user wants chips and salsa or not by determining which radio button is selected (code taken from https://www.geeksforgeeks.org/how-to-check-whether-a-radio-button-is-selected-with-javascript/#:~:text=Using%20Input%20Radio%20checked%20property,id%20is%20check%20or%20not.)
  if (isset($_POST["sideorder-yes"])) {
    $side_cost = 4.25;
  }
    
  else if (isset($_POST["sideorder-no"])) { 
    $side_cost = 0;
  }

  // determining whether user wants a margarita or not by determining which radio button is selected (code taken from https://www.geeksforgeeks.org/how-to-check-whether-a-radio-button-is-selected-with-javascript/#:~:text=Using%20Input%20Radio%20checked%20property,id%20is%20check%20or%20not.)
  if (isset($_POST["sidedrink-yes"])) {
    $side_drink = 8.15;
  }
    
    else if (isset($_POST["sidedrink-no"])) {
    $side_drink = 0;
  }

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

