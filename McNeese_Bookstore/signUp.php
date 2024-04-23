<!--
    PHP file for the sign up function
    Author: Jett Rogers
    Created On: 4/21/2024
-->

<?php 
    include("connectdatabase.php");

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $address = $_POST['address'];


        $sqlStatement = 'INSERT INTO Customer(Name, Address, Username, Password)
            VALUES(?,?,?,?)';
        $stmt = mysqli_prepare($conn, $sqlStatement);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $address, $email, $password);

        
        if(mysqli_stmt_execute($stmt))
        {
            header("Location: localhost/McNeese_Bookstore/#");
        }
    }
?>