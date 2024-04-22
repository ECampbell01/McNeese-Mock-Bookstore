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
            include("connectdatabase.php");

            // Assume the customer ID is 1 for now
            $customer_id = 1;

            // Query to get cart information
            $query = "SELECT Book.Title, Book.Author, Book.Price, Cart.TotalCost 
                    FROM Cart 
                    INNER JOIN Book ON Cart.BookId = Book.BookId 
                    WHERE Cart.CustomerId = ?";
            $statement = $conn->prepare($query);
            $statement->bind_param("i", $customer_id);
            $statement->execute();
            $result = $statement->get_result();
            $total_cost = 0;

            // Check if cart is empty
            if ($result->num_rows === 0) {
                echo "<p>Your cart is empty.</p>";
            } else {
                // Display cart items
                while ($row = $result->fetch_assoc()) {
                    echo "<p>Title: " . htmlspecialchars($row["Title"]) . "</p>";
                    echo "<p>Author: " . htmlspecialchars($row["Author"]) . "</p>";
                    echo "<p>Price: $" . htmlspecialchars($row["Price"]) . "</p>";
                    echo "<hr>";
                    // Keep track of total cost for each item
                    $total_cost += $row["TotalCost"];
                }
                // Display total cost
                echo "<p><strong>Total Cost: $" . htmlspecialchars($total_cost) . "</strong></p>";
            }
        ?>
    </body>
</html>