<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>La Vida en México (Taco Bowls and Authentic Mexican Cuisine)</title>
    <!-- To use Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" /> 
  </head>
  <body>
    <!-- Div for header style -->
    <div id="header">
      <?php echo "<h1>La Vida en México</h1>"; ?>
      <?php echo "<h3>~Taco Bowls and Authentic Mexican Cuisine~</h3>"; ?>
    </div
    <!-- Introductory Image of inside restaurant -->
    <img src="./images/restaurant.jpg" alt="Restaurant" width="100%">
    <br>
    <br>
    <!-- Description/Introduction for restaurant -->
    <?php echo"<h5>Welcome to La Vida en México, where we serve nothing but the freshest of taco bowls and high quality, delicious, authentic Mexican cuisine! With so many choices and ingredients, you are sure to discover a whole new world of tasty and vibrant flavours. At La Vida en México, we believe that better ingredients equals better food, so prepare to taste the best taco bowl that will have you asking for seconds in no time!</h5>"; ?>     
    <center><?php echo "<h4>Our Ingredients and Menu:</h4>"; ?></center>
        
    <!-- Row of images to show ingredients and sides -->
    <center>
    <img src="./images/chipsandsalsa.jpeg" alt="Chips and Salsa" height="150"><img src="./images/margarita.webp" alt="Margarita" height="150"><img src="./images/guacamole.webp" alt="Guacamole" height="150"><img src="./images/picodegallo.jpg" alt="Pico de Gallo" height="150"><img src="./images/mexicancrema.jpg" alt="Mexican Crema" height="150"><img src="./images/cilantrolimerice.webp" alt="Cilantro Lime Rice" height="150"><img src="./images/mediumcheddar.webp" alt="Medium Cheddar" height="150"><img src="./images/blackbeans.jpg" alt="Black Beans" height="150">
    <br>
    <br>
    <!-- MDL Table for sizes and side order/drink -->
    <table>
      <tr>
        <td>
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
      <thead>
        <tr>
          <th class="mdl-data-table__cell--non-numeric">Sizes:</th>
          <th>Price:</th>
          <th>Side Order:</th>
          <th>Price:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="mdl-data-table__cell--non-numeric"><strong>Pequeña/Small</strong></td>
          <td>$7.45</td>
          <td><strong>Chips & Salsa</strong></td>
          <td>$4.25</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric"><strong>Mediana/Medium</strong></td>
          <td>$9.35</td>
          <td><strong>Margarita</strong></td>
          <td>$8.15</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric"><strong>Grande/Large</strong></td>
          <td>$11.95</td>
          <td></td>
        </tr>
      </tbody>
    </table>
        </td>
        <td>
    <!-- MDL Wide card with share menu button -->
    <style>
    .demo-card-wide.mdl-card {
      width: 512px;
    }
    .demo-card-wide > .mdl-card__title {
      color: #fff;
      height: 176px;
      background: url('./images/cardtacobowl.jpg') center / cover;
    }
    .demo-card-wide > .mdl-card__menu {
      color: #fff;
    }
    </style>
    
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Welcome</h2>
      </div>
      <div class="mdl-card__supporting-text">
        We are open from 8AM - 11PM every day! We look forward to seeing there! 
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          Order Below
        </a>
      </div>
      <div class="mdl-card__menu">
        <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">share</i>
        </button>
      </div>
    </div>   
        </td>
    
    <!-- MDL Table for toppings -->
    <td>
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Toppings ($0.50 extra per topping):</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><strong>Guacamole</strong></td>
      <td><strong>Mexican Crema</strong></td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><strong>Pico de Gallo</strong></td>
      <td><strong>Medium Cheddar</strong></td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><strong>Cilantro Lime Rice</strong></td>
    </tr>
  </tbody>
</table>    
    </td>
  </tr>
</center> 

    <!-- User Input Selection -->
		<table>
			<tr align = "center">
				<td valign="top" align="left">
					<h5><strong>Please enter the information below to calculate the cost of your taco bowl:</strong></h5>

    <!-- Asking user for size -->
    <h5>What size would you like?</h5>
		<form action="./results.php" method="post" target="results">												
			<label for="size">Size:</label>
			<select name="size" id="size">
				  <option value="">--Size of Taco Bowl--</option>
				  <option value="pequena">Pequeña/Small</option>
	 		    <option value="mediana">Mediana/Medium</option>
				   <option value="grande">Grande/Large</option>
			</select>
			<br><br>     
    <!-- Check boxes for toppings (code taken from https://www.w3schools.com/tags/att_input_type_checkbox.asp)-->
    <h5>What toppings would you like?</h5>
    <input type="checkbox" id="topping1" name="topping1">
    <label for="topping1"> Guacamole</label><br><br>
    <input type="checkbox" id="topping2" name="topping2">
    <label for="topping2"> Pico de Gallo</label><br><br>
    <input type="checkbox" id="topping3" name="topping3">
    <label for="topping3"> Mexican Crema</label><br><br>
    <input type="checkbox" id="topping4" name="topping4">
    <label for="topping4"> Medium Cheddar</label><br><br>
    <input type="checkbox" id="topping5" name="topping5">
    <label for="topping5"> Cilantro Lime Rice</label><br><br>
    <input type="checkbox" id="topping6" name="topping6">
    <label for="topping6"> Black Beans</label>
    <br><br>
    <!-- Radio button for side order with default of No (code taken from https://bulma.io/documentation/form/radio/) -->
    <h5>Would you like a side of chips and salsa?</h5>
    <input type="radio" id="yes" name="sideorder" value="sideorder-yes">
    <label for="yes">Yes</label><br><br>
    <input type="radio" id="no" name="sideorder" value="sideorder-no" checked>
    <label for="no">No</label><br><br>
    <br>
    <br>
    <!-- Radio button for side drink with default of No (code taken from https://bulma.io/documentation/form/radio/) -->
    <h5>Would you like a Margarita with that as well?</h5>
    <input type="radio" id="yess" name="sidedrink" value="sidedrink-yes">
    <label for="yess">Yes</label><br><br>
    <input type="radio" id="noo" name="sidedrink" value="sidedrink-no" checked>
    <label for="noo">No</label><br><br>
		<input type="submit" value="Display Cost">
		</form>
    <br>
    <br> 
    <!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">
    </iframe>
				</td>
				<td valign="top" align="center">
					<img src="./images/tacobowlpic.jpg" alt="Taco Bowl" width="80%">
				</td>
			</tr>
		</table>
		</div>
		</center>
  </body>
</html>