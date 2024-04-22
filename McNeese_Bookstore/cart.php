<!--
    PHP file for the McNeese Bookstore Cart
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
        <?php
            include("header.html");
            include("connectdatabase.php");
        ?>
        <div class="cart">
            <div class="header">
                <h1>Shopping Cart</h1>
                <h3>Price</h3>
            </div>
            <hr>
            <?php
                // Assume the customer ID is 1 for now
                $customer_id = 1;

                // Query to get cart information
                $query = "SELECT Book.BookId, Book.Title, Book.Author, Book.Price, Cart.TotalCost 
                        FROM Cart 
                        INNER JOIN Book ON Cart.BookId = Book.BookId 
                        WHERE Cart.CustomerId = ?";
                $statement = $conn->prepare($query);
                $statement->bind_param("i", $customer_id);
                $statement->execute();
                $bookResult = $statement->get_result();
                $total_cost = 0;

                $query = "SELECT officesupply.SupplyId, officesupply.Name, officesupply.Brand, officesupply.Price, Cart.TotalCost 
                        FROM Cart 
                        INNER JOIN officesupply ON Cart.SupplyId = officesupply.SupplyId 
                        WHERE Cart.CustomerId = ?";
                $statement = $conn->prepare($query);
                $statement->bind_param("i", $customer_id);
                $statement->execute();
                $officeSupplyResult = $statement->get_result();

                // Check if cart is empty
                if ($bookResult->num_rows === 0 && $officeSupplyResult->num_rows === 0) {
                    echo "<p>Your cart is empty.</p>";
                } else {
                    // Display cart items
                    while ($row = $bookResult->fetch_assoc()) {
                        ?>
                        <div class="item">
                            <div class="info">
                                <?php
                                echo "<p>Title: " . htmlspecialchars($row["Title"]) . "</p>";
                                echo "<p>Author: " . htmlspecialchars($row["Author"]) . "</p>";
                                ?>
                            </div>
                            <?php
                            echo "<p>$" . htmlspecialchars($row["Price"]) . "</p>";
                            ?>
                            <form action="delete.php">
                                <input type="hidden" name="productId" value="<?php echo $row['BookId']; ?>">
                                <input type="submit" name="delete" class="deleteBTN" value="X" onClick="javascript:history.go(-1)">
                            </form>
                        </div>
                        <?php
                        // Keep track of total cost for each item
                        $total_cost += $row["TotalCost"];
                    }

                    while ($row = $officeSupplyResult->fetch_assoc()) {
                        ?>
                        <div class="item">
                            <div class="info">
                                <?php
                                echo "<p>Item: " . htmlspecialchars($row["Name"]) . "</p>";
                                echo "<p>Brand: " . htmlspecialchars($row["Brand"]) . "</p>";
                                ?>
                            </div>
                            <?php
                            echo "<p>$" . htmlspecialchars($row["Price"]) . "</p>";
                            ?>
                            <form action="delete.php">
                                <input type="hidden" name="productId" value="<?php echo $row['SupplyId']; ?>">
                                <input type="submit" name="delete" class="deleteBTN" value="X" onClick="javascript:history.go(-1)">
                            </form>
                        </div>
                        <?php
                        // Keep track of total cost for each item
                        $total_cost += $row["TotalCost"];
                    }

                    // Display total cost
                    echo "<hr><p><strong>Total Cost: $" . htmlspecialchars($total_cost) . "</strong></p>";
                    ?>
                    <button id="checkout">Checkout</button>
        </div>            
                <?php
                }
                include("footer.html"); //Display footer
            ?>
        
        <script src="navbar.js" defer></script>
    </body>
</html>
