<!-- Saurabh Shukla -->
<!-- 03/28/2021 --> 
<!-- ISTE646 Exercise 6 – PHP - Part 1 Forms -->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Selection</title>
	<link rel="stylesheet" type="text/css" href="assets/css/pizza.css" />
	<script type="text/javascript" src="assets/script/pizza.js"></script>
</head>
<body>

	<div id="wrapper">

	<h1>Eat more Pizza!</h1>
	<p><img src="assets/img/hotpizza.png"></p>
	<div id="container">
		<h2>Order a Delicious Pizza!</h2>
	
		<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
			<p>Name:  <input type="text" name="customerName"  /></p>
			<p>ID:  <input type="text"  name="customerID"  /></p>
			<p> Check the size of Pizza you would like to order:<br />
				<!-- Note the <label> tags below that allow the user to click on the text! -->
				<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
				<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
				<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
				<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
			</p>

			<!-- Topping section -->
			<p> Select the number of toppoings you want on your pizza:
			<br>
			<input type="radio" name ="toppings" value = "zero" id="zeroT" checked="true"/><label for="zeroTop">No Extra Toppings<label><br/>
			<input type="radio" name ="toppings" value = "first" id="firstT"/><label for="oneTop">One Topping<label><br/>
			<input type="radio" name ="toppings" value = "second" id="secondT"/><label for="twoTop">Two Topping<label><br/>
			<input type="radio" name ="toppings" value = "third" id="thirdT"/><label for="threeTop">Three  Topping<label><br/>


			
			</p>


			<p>
				<input type="submit"  name="Submit"  value=" Send Form"  />
			</p>
		</form>
	</div> 
	<footer>Dan's Pizza Shoppe &reg;</footer>
</body>
</html>