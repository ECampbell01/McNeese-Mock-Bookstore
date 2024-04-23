<!--
    PHP file that deletes items from cart
    Author: Jett Rogers
    Created On: 4/22/2024
-->
<?php
    include("connectdatabase.php");

    if(isset($_POST['customerId'])) {

        $office_supply_id = $_POST['customerId'];

        $query = "DELETE FROM cart WHERE `cart`.`CustomerId` = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $customerId);


        if ($statement->execute()) {
            // Items successfully removed
            echo "<script>alert('Item successfully removed.');</script>";
            include("index.php");
            } else {
                // Error removing Item
                echo "<script>alert('Error removing item. Please try again.');</script>";
                include("index.php");
        }
        
        
    } 
    else {
        // Customer id is not provided
        echo "<script>alert('Customer ID is missing.');</script>";
    }
?>