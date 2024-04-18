<!--
    PHP file for the sign in
    Author: Jett Rogers
    Created On: 4/17/2024
-->

<?php 
    include("connectdatabase.php");

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sqlStatement = 'SELECT Username, Password FROM Customer WHERE Username=? AND Password=?';
        $stmt = mysqli_prepare($conn, $sqlStatement);
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);

        //If username and password are correct
        if(mysqli_num_rows($results) > 0)
        {
            session_start();
            $_SESSION['loggedin'] = true;
            echo "Welcome Back";
        }

        //If username and password are incorrect
        else{
            echo "Incorrect Email or Password";
        }
    }
?>