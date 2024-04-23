<!--
    PHP file that deletes office supply from cart
    Author: Jett Rogers
    Created On: 4/22/2024
-->

<?php
    include("connectdatabase.php");

    if(isset($_POST['productId'])) {
        $product_id = $_POST['productId']; // Get product ID from form

        $query = "DELETE FROM Cart WHERE `SupplyId` = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $product_id); // Bind product ID

        if ($statement->execute()) {
            // Item successfully removed
            echo "<script>alert('Item successfully removed.');</script>";
            // Redirect back to cart
            header("Location: cart.php");
            exit();
        } else {
            // Error removing item
            echo "<script>alert('Error removing item. Please try again.');</script>";
            // Redirect back to cart
            header("Location: cart.php");
            exit();
        }
    } else {
        // Product ID is not provided
        echo "<script>alert('Product ID is missing.');</script>";
        // Redirect back to cart
        header("Location: cart.php");
        exit();
    }
?>