<!--
    PHP file for the McNeese Bookstore Cart
    Author: Jett Rogers
    Created On: 4/22/2024
-->
<?php
    if(isset($_POST['productId'])){

        $deleteId = $_POST['productId'];

        // Query to get cart information
        $query = "DELETE TOP(1) FROM cart WHERE `cart`.`SupplyId` = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $deleteId);
        echo"hello";
        if ($statement->execute()) {
            // Item successfully removed
            echo "<script>alert('Item successfully removed.');</script>";
            include("index.php");
        } else {
            // Error removing Item
            echo "<script>alert('Error removing item. Please try again.');</script>";
        }

    }
?> 