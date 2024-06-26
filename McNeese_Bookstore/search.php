<?php
/*
    PHP file for the search function
    Author: Ethan Campbell
    Created On: 3/27/2024
*/

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "mcNeeseBookstore";
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM Book WHERE Title LIKE '%$search%' OR Author LIKE '%$search%' OR ISBN LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        include "header.html"; //display header

        //display search results
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='search-results'>
                <h3><a href='bookdetails.php?id=".$row['BookId']."'>".$row['Title']."</a></h3>
                <p>".$row['Author']."</p>
            </div>";
        }

        include "footer.html"; //display footer
    }

    else {
        include "header.html"; //display header
        echo "There are no results matching your search!";
        include "footer.html"; //display footer
    }
}

mysqli_close($conn); //close connection
?>