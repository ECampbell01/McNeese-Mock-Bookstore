<!--
    PHP file for the McNeese Bookstore Checkout
    Author: Jett Rogers
    Created On: 4/22/2024
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bookstore Cart</title>
        <link rel="stylesheet" href="checkout.css"> <!--Link to CSS file-->
    </head>
    <body> 

    <?php
        include("connectdatabase.php");
        $query ="SELECT * FROM cart WHERE CustomerId=?";
        $query->bind_param("i", $customerId);

        if ($result=mysqli_query($conn, $query))
        {
            // Return the number of rows in result set
            $rowcount=mysqli_num_rows($result);
        }
    ?>



    <div class="checkout">
        <h2>Checkout Form</h2>
        <div class="row">
            <div class="col75">
                <div class="container">
                <form action="">
                
                    <div class="row">
                    <div class="col50">
                        <h3>Billing Address</h3>
                        
                        <label for="fname">Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe">

                        <label for="email"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">

                        <label for="adr"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">

                        <label for="city"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Lake Charles">

                        <div class="row">
                            <div class="col50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="LA">
                            </div>
                            <div class="col50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="70605">
                            </div>
                        </div>
                    </div>

                    <div class="col50">
                        <h3>Payment</h3>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">

                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">

                        <div class="row">
                            <div class="col50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <input type="submit" value="Complete Checkout" class="btn">
                </form>
                </div>
            </div>
            <div class="col25">
                <div class="container">
                <h4>Cart <span class="price" style="color:black"> <b><?php echo $rowcount;?></b></span></h4>
                <hr>
                <p>Total <span class="price" style="color:black"><b><?php echo $totalCost;?></b></span></p>
                </div>
            </div>
    </div>

    
        
    </body>
    <?php
        include("footer.html");
    ?>
</html>