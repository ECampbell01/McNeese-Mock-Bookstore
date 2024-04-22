<!--
    PHP file for the add to cart function
    Author: Jett Rogers
    Created On: 4/22/2024
-->
<?php
    include("connectdatabase.php");

// Check if the Supply ID is provided
    if(isset($_POST['office_supply_id'])) {
        // Retrieve the supply ID from the form data
        $office_supply_id = $_POST['office_supply_id'];

        // Assume the customer ID is 1 for now (replace this with your actual customer ID handling logic)
        $customer_id = 1;

        // Query to insert the Supply into the cart
        $query = "INSERT INTO Cart (CustomerId, SupplyId, TotalCost) VALUES (?, ?, ?)";
        $statement = $conn->prepare($query);

        // Calculate total cost (assuming it's the same as Supply price for now)
        $total_cost = $_POST['price']; // Assuming you have the price sent with the form data

        // Bind parameters and execute the query
        $statement->bind_param("iii", $customer_id, $office_supply_id, $total_cost);
        if ($statement->execute()) {
            // Supply added to cart successfully
            echo "<script>alert('Supply added to cart successfully.');</script>";
            include("index.php");
        } else {
            // Failed to add Supply to cart
            echo "<script>alert('Failed to add supply to cart. Please try again.');</script>";
        }
    } else {
        // Supply ID is not provided
        echo "<script>alert('Supply ID is missing.');</script>";
    }
?>