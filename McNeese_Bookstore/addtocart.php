<!--
    PHP file for the add to cart function
    Author: Ethan Campbell
    Created On: 4/21/2024
-->
<?php
    include("connectdatabase.php");

    // Check if the book id is provided
    if(isset($_POST['book_id'])) {

        // Retrieve the book id
        $book_id = $_POST['book_id'];

        // Assume the customer ID is 1 for now
        $customer_id = 1;

        // Query to insert the book into the cart
        $query = "INSERT INTO Cart (CustomerId, BookId, TotalCost) VALUES (?, ?, ?)";
        $statement = $conn->prepare($query);

        // Calculate total cost
        $total_cost = $_POST['price'];

        // Bind parameters and execute the query
        $statement->bind_param("iii", $customer_id, $book_id, $total_cost);
        if ($statement->execute()) {
            // Book added to cart successfully
            echo "<script>alert('Book added to cart successfully.');</script>";
            include("index.php");
        } 
        else {
            // Failed to add book to cart
            echo "<script>alert('Failed to add book to cart. Please try again.');</script>";
        }
    } 
    else {
        // Book ID is not provided
        echo "<script>alert('Book ID is missing.');</script>";
    }
?>