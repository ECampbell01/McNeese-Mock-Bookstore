<!--
    HTML file for the McNeese Bookstore Cart function
    Author: Jett Rogers
    Created On: 3/28/2024
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bookstore Cart</title>
        <link rel="stylesheet" href="Cart.css"> <!--Link to CSS file-->
    </head>

    <body>
        


        <div class="cart">
            <h1>Cart</h1>
            <p class="item">
            <?php
                $sql_cart = "SELECT BookId, SupplyId, TotalCost FROM Cart"; 
                $result = mysqli_query($conn, $sql_cart);
                if (mysqli_num_rows($result) > 0) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $items[] = $row;
                    }
                }

                foreach($items as $item):

                endforeach;
            ?>
            <div class="checkout">
                <div class="total">0</div>
                <div class="closeCart">Checkout</div>
            </div>
        </div>

        <script src="Cart.js"></script>
    </body>
</html>
