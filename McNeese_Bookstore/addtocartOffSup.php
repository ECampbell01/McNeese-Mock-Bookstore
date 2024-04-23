<!--
    PHP file for the add to cart function for the office supplies
    Author: Jett Rogers
    Created On: 4/22/2024
-->
<?php
    include("connectdatabase.php");

// Check if the Supply ID is provided
    if(isset($_POST['office_supply_id'])) {
        // Retrieve the supply id
        $office_supply_id = $_POST['office_supply_id'];

        // Assume the customer ID is 1 for now
        $customer_id = 1;

        // Query to insert the office supply into the cart
        $query = "INSERT INTO Cart (CustomerId, SupplyId, TotalCost) VALUES (?, ?, ?)";
        $statement = $conn->prepare($query);

        // Calculate total cost
        $total_cost = $_POST['price'];

        // Bind parameters and execute the query
        $statement->bind_param("iii", $customer_id, $office_supply_id, $total_cost);
        if ($statement->execute()) {
            // Supply added to cart successfully
            echo "<script>alert('Supply added to cart successfully.');</script>";
            include("index.php");
        } 
        else {
            // Failed to add Supply to cart
            echo "<script>alert('Failed to add supply to cart. Please try again.');</script>";
        }
    } 
    else {
        // Supply id is not provided
        echo "<script>alert('Supply ID is missing.');</script>";
    }
?>