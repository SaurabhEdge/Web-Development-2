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
    <h2>Order Receipt:</h2>

    <?php 
    
        //Declaring variable as per attribute
        $noTopping=0.0; 
        $oneTopping=2.00; 
        $twoTopping=3.00; 
        $threeTopping=3.75;
        $personalPizza=25.00; 
        $smallPizza=10.00; 
        $mediumPizza=15.00;
         $largePizza=20.00;
        $tax=1.60;
         $totalAmount=0.0; 
         $FinalpizzaAmout=0.0;
          $FinalTax=0.0;
        $finalTopping=0.0; 
        $tax_p=3.60; 
        $tax_m=2.4; $tax_l=3.0;

        // Getting user Value for calculation 
        $cName = $_POST["customerName"];
        $cId = $_POST["customerID"];
        $pizzasize = $_POST["pizzaSize"];
        $toppings = $_POST["toppings"];  


            // Switch case to handle values & trigger conditions

        switch ($pizzasize) {
            case "S":
                    if($toppings == "zero"){
                        $totalAmount = $tax + $noTopping + $smallPizza;
                        $finalTopping = $noTopping;
                        $FinalTax = $tax;
                        $FinalpizzaAmout = $smallPizza;
                    }
                    else {

                        if($toppings == "first"){
                            $totalAmount = $tax + $oneTopping + $smallPizza;
                            $finalTopping = $oneTopping;
                            $FinalTax = $tax;
                            $FinalpizzaAmout = $smallPizza;
                        } 

                        else {
                                if($toppings == "second"){
                                    $totalAmount = $tax + $twoTopping + $smallPizza;
                                    $finalTopping = $twoTopping;
                                    $FinalTax = $tax;
                                    $FinalpizzaAmout = $smallPizza;
                                }
                                else {

                                    $totalAmount = $tax + $threeTopping + $smallPizza;
                                    $finalTopping = $threeTopping;
                                    $FinalTax = $tax;
                                    $FinalpizzaAmout = $smallPizza;
                

                                }

                        }
                    }
              break;
            case "M":
                if($toppings == "zero"){
                    $totalAmount = $tax_m + $noTopping + $mediumPizza;
                    $finalTopping = $noTopping;
                    $FinalTax = $tax_m;
                    $FinalpizzaAmout = $mediumPizza;
                }
                else {

                    if($toppings == "first"){
                        $totalAmount = $tax_m + $oneTopping + $mediumPizza;
                        $finalTopping = $oneTopping;
                        $FinalTax = $tax_m;
                        $FinalpizzaAmout = $mediumPizza;
                    } 

                    else {
                            if($toppings == "second"){
                                $totalAmount = $tax + $twoTopping + $mediumPizza;
                                $finalTopping = $twoTopping;
                                $FinalTax = $tax_m;
                                $FinalpizzaAmout = $mediumPizza;
                            }
                            else {

                                $totalAmount = $tax + $threeTopping + $mediumPizza;
                                $finalTopping = $threeTopping;
                                $FinalTax = $tax_m;
                                $FinalpizzaAmout = $mediumPizza;
            

                            }

                    }
                }
              break;
            case "P":
                if($toppings == "zero"){
                    $totalAmount = $tax_p + $noTopping + $personalPizza;
                    $finalTopping = $noTopping;
                    $FinalTax = $tax_p;
                    $FinalpizzaAmout = $personalPizza;
                }
                else {

                    if($toppings == "first"){
                        $totalAmount = $tax_p + $oneTopping + $personalPizza;
                        $finalTopping = $oneTopping;
                        $FinalTax = $tax_p;
                        $FinalpizzaAmout = $personalPizza;
                    } 

                    else {
                            if($toppings == "second"){
                                $totalAmount = $tax_p + $twoTopping + $personalPizza;
                                $finalTopping = $twoTopping;
                                $FinalTax = $tax_p;
                                $FinalpizzaAmout = $personalPizza;
                            }
                            else {

                                $totalAmount = $tax_p + $threeTopping + $personalPizza;
                                $finalTopping = $threeTopping;
                                $FinalTax = $tax_p;
                                $FinalpizzaAmout = $personalPizza;
            

                            }

                    }
                }

              break;
            default:
                    if($toppings == "zero"){
                        $totalAmount = $tax_l + $noTopping + $smallPizza;
                        $finalTopping = $noTopping;
                        $FinalTax = $tax_l;
                        $FinalpizzaAmout = $smallPizza;
                    }
                    else {

                        if($toppings == "first"){
                            $totalAmount = $tax_l + $oneTopping + $largePizza;
                            $finalTopping = $oneTopping;
                            $FinalTax = $tax_l;
                            $FinalpizzaAmout = $largePizza;
                        } 

                        else {
                                if($toppings == "second"){
                                    $totalAmount = $tax_l + $twoTopping + $largePizza;
                                    $finalTopping = $twoTopping;
                                    $FinalTax = $tax_l;
                                    $FinalpizzaAmout = $largePizza;
                                }
                                else {

                                    $totalAmount = $tax_l + $threeTopping + $largePizza;
                                    $finalTopping = $threeTopping;
                                    $FinalTax = $tax_l;
                                    $FinalpizzaAmout = $largePizza;
                

                                }

                        }
                    }
              
          }
    ?> 
    
          <!-- Displaying values to receipt page -->
        <h3> Customer Name : <?php echo $cName ?> </h3>
        <h3> Order ID : <?php echo $cId ?> </h3>
        <h4>Pizza price : $<?php echo $FinalpizzaAmout ?></h4>
        <h4>Topping price : $<?php echo $finalTopping ?> </h4>
        <h4>Tax amount : $<?php echo $FinalTax ?> </h4>
        <h4>Total cost of your order is: $<?php echo $totalAmount ?></h4>

      </div>
<footer>Dan's Pizza Shoppe &reg;</footer>
</body>
</html>


