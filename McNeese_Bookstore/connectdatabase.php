<?php
/*
    PHP file that connects to the MySQL database
    and selects Book and Office Supply information
    Author: Ethan Campbell
    Created On: 2/28/2024
*/
    $db_server = "localhost"; // server name
    $db_username = "root"; //username
    $db_password = ""; //password
    $db_name = "mcNeeseBookstore"; //name of database
    $conn = new mysqli($db_server, $db_username, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Set charset to UTF-8
    $conn->set_charset("utf8");

    // Store all book data into an array
    $books = array();

    $sql_books = "SELECT BookId, Title, Author, Price, PhotoFilePath FROM Book"; //Selecting book data
    $result_books = mysqli_query($conn, $sql_books);
    if (mysqli_num_rows($result_books) > 0) {
        while ($row = mysqli_fetch_assoc($result_books)) {
            $books[] = $row;
        }
    }

    // Store all office supply data into an array
    $office_supplies = array();

    $sql_office_supplies = "SELECT SupplyId, Brand, Name, Price, PhotoFilePath FROM OfficeSupply"; //Select office supply data
    $result_office_supplies = mysqli_query($conn, $sql_office_supplies);
    if (mysqli_num_rows($result_office_supplies) > 0) {
        while ($row = mysqli_fetch_assoc($result_office_supplies)) {
            $office_supplies[] = $row;
        }
    }
?>