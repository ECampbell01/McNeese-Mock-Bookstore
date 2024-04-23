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

                $count = 0;

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
                            <form action="delete.php" method="post">
                                <input type="hidden" name="productId" value="<?php echo $row['BookId']; ?>">
                                <input type="hidden" name="customerId" value="<?php echo $customer_id; ?>">
                                <input type="submit" name="delete" class="deleteBTN" value="X" onClick="javascript:history.go(-1)">
                            </form>
                        </div>
                        <?php
                        // Keep track of total cost for each item
                        $total_cost += $row["TotalCost"];
                        $count += 1;
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
                            <form action="deleteOffSup.php" method="post">
                                <input type="hidden" name="productId" value="<?php echo $row['SupplyId']; ?>">
                                <input type="hidden" name="customerId" value="<?php echo $customer_id; ?>">
                                <input type="submit" name="delete" class="deleteBTN" value="X">
                            </form>
                        </div>
                        <?php
                        // Keep track of total cost for each item
                        $total_cost += $row["TotalCost"];
                        $count += 1;
                    }

                // Display total cost
                echo "<hr><p><strong>Total Cost: $" . htmlspecialchars($total_cost) . "</strong></p>";

            ?>

            <form action="checkout.php" method="post">
                <input type="hidden" name="total" value="<?php echo $total_cost; ?>">
                <input type="hidden" name="count" value="<?php echo $count; ?>">
                <input type="submit" value="Checkout" class="checkout">
            </form>
        </div>   

        <?php
            }
            include("footer.html"); //Display footer
        ?>
    </body>
</html>
