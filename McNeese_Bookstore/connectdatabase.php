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

    //Retrieve data from office supplies table
    $office_supplies_calculators = array();
    $office_supplies_staplers = array();
    $office_supplies_notebooks = array();
    $office_supplies_sale = array();

    $sql_calculators = "SELECT Brand, Name, Price, PhotoFilePath FROM OfficeSupply WHERE SupplyId BETWEEN 1 AND 5";
    $result_calculators = mysqli_query($conn, $sql_calculators);
    if (mysqli_num_rows($result_calculators) > 0) {
        while ($row = mysqli_fetch_assoc($result_calculators)) {
            $office_supplies_calculators[] = $row;
        }
    }

    $sql_staplers = "SELECT Brand, Name, Price, PhotoFilePath FROM OfficeSupply WHERE SupplyId BETWEEN 6 AND 10";
    $result_staplers = mysqli_query($conn, $sql_staplers);
    if (mysqli_num_rows($result_staplers) > 0) {
        while ($row = mysqli_fetch_assoc($result_staplers)) {
            $office_supplies_staplers[] = $row;
        }
    }

    $sql_notebooks = "SELECT Brand, Name, Price, PhotoFilePath FROM OfficeSupply WHERE SupplyId BETWEEN 11 AND 15";
    $result_notebooks = mysqli_query($conn, $sql_notebooks);
    if (mysqli_num_rows($result_notebooks) > 0) {
        while ($row = mysqli_fetch_assoc($result_notebooks)) {
            $office_supplies_notebooks[] = $row;
        }
    }

    $sql_os_sale = "SELECT Brand, Name, Price, PhotoFilePath FROM OfficeSupply WHERE SupplyId BETWEEN 16 AND 20";
    $result_os_sale = mysqli_query($conn, $sql_os_sale);
    if (mysqli_num_rows($result_os_sale) > 0) {
        while ($row = mysqli_fetch_assoc($result_os_sale)) {
            $office_supplies_sale[] = $row;
        }
    }

    //Retrieve data from books table
    $books_new_arrivals = array();
    $books_best_sellers = array();
    $books_special_offers = array();
    $books_sale = array();

    $sql_new_arrivals = "SELECT BookId, Title, Author, Price, PhotoFilePath FROM Book WHERE BookID BETWEEN 1 AND 5";
    $result_new_arrivals = mysqli_query($conn, $sql_new_arrivals);
    if (mysqli_num_rows($result_new_arrivals) > 0) {
        while ($row = mysqli_fetch_assoc($result_new_arrivals)) {
            $books_new_arrivals[] = $row;
        }
    }

    $sql_best_sellers = "SELECT Title, Author, Price, PhotoFilePath FROM Book WHERE BookID BETWEEN 6 AND 10";
    $result_best_sellers = mysqli_query($conn, $sql_best_sellers);
    if (mysqli_num_rows($result_best_sellers) > 0) {
        while ($row = mysqli_fetch_assoc($result_best_sellers)) {
            $books_best_sellers[] = $row;
        }
    }

    $sql_special_offers = "SELECT Title, Author, Price, PhotoFilePath FROM Book WHERE BookID BETWEEN 11 AND 15";
    $result_special_offers = mysqli_query($conn, $sql_special_offers);
    if (mysqli_num_rows($result_special_offers) > 0) {
        while ($row = mysqli_fetch_assoc($result_special_offers)) {
            $books_special_offers[] = $row;
        }
    }

    $sql_sale = "SELECT Title, Author, Price, PhotoFilePath FROM Book WHERE BookID BETWEEN 16 AND 20";
    $result_sale = mysqli_query($conn, $sql_sale);
    if (mysqli_num_rows($result_sale) > 0) {
        while ($row = mysqli_fetch_assoc($result_sale)) {
            $books_sale[] = $row;
        }
    }
?>