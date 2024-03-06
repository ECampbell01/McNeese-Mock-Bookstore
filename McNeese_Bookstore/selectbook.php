<?php
/*
    PHP file that connects to the MySQL database
    and selects Book information
    Author: Ethan Campbell
    Created On: 2/28/2024
*/
    $db_server = "localhost"; // server name
    $db_username = "root"; //username
    $db_password = ""; //password
    $db_name = "mcNeeseBookstore​"; //name of database
    $conn = "";

    //Testing the connection to the database
    try{
        $conn = mysqli_connect($db_server,
                               $db_username,
                               $db_password,
                               $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect to database! <br>";
    }

    $limit = 5; //number of books I want displayed on each row
    $sql = "SELECT * FROM Book LIMIT $limit"; //Select the book information from the books table
    $result = mysqli_query($conn, $sql);

    $books = array();

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)) {
            $books[] = $row;
        }
    }
?>