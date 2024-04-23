<!--
    PHP file that deletes office supply from cart
    Author: Jett Rogers
    Created On: 4/22/2024
-->
<?php
    if(isset($_POST['productId'])){

        $deleteId = $_POST['productId'];
        $customerId = $_POST['customerId'];

        // Query to get cart information
        $query = "DELETE TOP(1) FROM cart WHERE `cart`.`SupplyId` = ? AND 'cart'.'CustomerId' = ?";

        $statement = $conn->prepare($query);
        $statement->bind_param("ii", $deleteId, $customerId);

        if ($statement->execute()) {
            // Item successfully removed
            echo "<script>alert('Item successfully removed.');</script>";
            include("cart.php");
        } else {
            // Error removing Item
            echo "<script>alert('Error removing item. Please try again.');</script>";
        }

    }
    else {
        // Supply id is not provided
        echo "<script>alert('Supply ID is missing.');</script>";
    }
?> 
