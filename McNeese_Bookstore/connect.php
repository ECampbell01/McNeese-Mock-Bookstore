<?php
/*
    PHP file that connects MySQL database to the website
    Author: Ethan Campbell
    Created On: 2/28/2024
*/
    $db_server = "localhost"; // server name
    $db_username = "root"; //username
    $db_password = ""; //password
    $db_name = "mcNeeseBookstore​"; //name of database

    // Create connection to database
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    // Check connection to database
    if($conn){
        echo"You are connected"; //If there is a connection, display message
    }
    else{
        echo"Connection failed"; //If there is not a connection, display error message
    }

    $bookId = 1; //BookID set to 1 for now to test

    // Fetch data from the database
    $query = "SELECT Title, Author, Price FROM book WHERE BookId = $bookId";
    $result = $mysqli->query($query);

    if($result->num_rows > 0) {
    // Fetch and store the data
    $row = $result->fetch_assoc();
    $title = $row['Title'];
    $author = $row['Author'];
    $price = $row['Price'];
    } 
    else{
    // Handle the case where the book with the given ID is not found
    $title = "Not Found";
    $author = "Not Found";
    $price = "Not Found";
    }
    
    $mysqli->close(); // Close the database connection
?>