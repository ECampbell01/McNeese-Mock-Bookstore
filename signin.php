<?php 
    include("connectdatabase.php");

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sqlStatement = 'SELECT Username, Password FROM Customer.Customer WHERE Username='. $email .
                        ' AND Password='. $password;

        $results = mysqli_query($conn, $sqlStatement);

        if($results->num_rows > 0)
        {
            $_SESSION['loggedin'] = true;
            echo "Welcome Back";
        }
        else
        {
            echo "Incorrect Email or Password"
        }
    }
?>
