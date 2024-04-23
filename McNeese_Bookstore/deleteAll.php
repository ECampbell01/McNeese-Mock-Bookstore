<!--
    PHP file that deletes items from cart
    Author: Jett Rogers
    Created On: 4/22/2024
-->
<?php
    include("connectdatabase.php");

    if(isset($_POST['customerId'])) {

        $customerId = $_POST['customerId'];

        $query = "DELETE FROM Cart WHERE `cart`.`CustomerId` = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $customerId);


        if ($statement->execute()) {
            // Items successfully removed
            echo "<script>alert('Items successfully removed.');</script>";
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
