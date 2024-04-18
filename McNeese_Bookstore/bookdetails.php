<!--
    PHP file for the book details
    Author: Ethan Campbell
    Created On: 4/2/2024
-->

<?php
    // Include header and connect to the database
    include("header.html");
    include("connectdatabase.php");

    // Retrieve the book ID from the query parameters
    $book_id = $_GET['id'];

    // Query the database to get the details of the selected book
    $query = "SELECT * FROM Book WHERE BookID = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param("i", $book_id);
    $statement->execute();
    $result = $statement->get_result();

    // Fetch the book details as an associative array
    $book = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>McNeese Bookstore</title>
        <style>

            #container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin: 20px;
            }

            #container .book-info {
                width: 60%;
            }

            #container .book-image {
                width: 30%;
            }

            .add-to-cart {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }

            #container .book-image img {
                max-width: 400px;
                height: 400px;
            }
        </style>
        <script src="navbar.js" defer></script> 
    </head>
    <body>
        <!-- Display book details -->
        <div id="container">
            <div class="book-image">
                <img src="Images/<?php echo htmlspecialchars($book["PhotoFilePath"]); ?>" alt="Book Cover">
            </div>
            <div class="book-info">
                <h2><?php echo htmlspecialchars($book["Title"]); ?></h2>
                <p>Author: <?php echo htmlspecialchars($book["Author"]); ?></p>
                <p>Price: $<?php echo htmlspecialchars($book["Price"]); ?></p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </body>
</html>
<?php
    include("footer.html");
?>