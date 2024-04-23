<!--
    PHP file for the home page
    Author: Ethan Campbell
    Created On: 4/22/2024
--> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>McNeese Bookstore</title>
        <link rel="stylesheet" href="style.css"> <!--Link to CSS file-->
        <style>
            .book-cover {
                width: 100px;
                height: 100px;
                border: 5px solid #ccc;
            }

            .row-of-books {
                display: flex;
                gap: 20px;
            } 

            .book-container {
                text-align: center; /*Align the text to the center*/
                background-color: white;
                padding: 20px;
                max-width: 250px; 
                max-height: 300px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .book-link {
                text-decoration: none; /* Remove underline */
                color: rgba(4,82, 156, 255);
            }

            .book-link:hover {
                color: blue; /* Change text color on hover */
            }
        </style>
    </head>
    <body>
        <?php include("connectdatabase.php"); ?>
        <!--Home Page-->
        <div id="homePage">
            <h2>New Arrivals</h2>
            <!--Display books-->
            <div class="row-of-books">
                <?php foreach (array_slice($books, 0, 5) as $book): ?>
                    <a href="bookdetails.php?id=<?php echo htmlspecialchars($book["BookId"]); ?>" class="book-link">
                        <div class="book-container">
                            <img src="Images/<?php echo htmlspecialchars($book["PhotoFilePath"]); ?>" alt="Book Cover" class="book-cover">
                            <h2><?php echo htmlspecialchars($book["Title"]); ?></h2>
                            <p><?php echo htmlspecialchars($book["Author"]); ?></p>
                            <p><?php echo '$' . htmlspecialchars($book["Price"]); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <h2>Best Sellers</h2>
            <!-- Display books -->
            <div class="row-of-books">
                <?php foreach (array_slice($books, 5, 5) as $book): ?>
                    <a href="bookdetails.php?id=<?php echo htmlspecialchars($book["BookId"]); ?>" class="book-link">
                        <div class="book-container">
                            <img src="Images/<?php echo htmlspecialchars($book["PhotoFilePath"]); ?>" alt="Book Cover" class="book-cover">
                            <h2><?php echo htmlspecialchars($book["Title"]); ?></h2>
                            <p><?php echo htmlspecialchars($book["Author"]); ?></p>
                            <p><?php echo '$' . htmlspecialchars($book["Price"]); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <h2>Special Offers</h2>
            <!-- Display books -->
            <div class="row-of-books">
                <?php foreach (array_slice($books, 10, 5) as $book): ?>
                    <a href="bookdetails.php?id=<?php echo htmlspecialchars($book["BookId"]); ?>" class="book-link">
                        <div class="book-container">
                            <img src="Images/<?php echo htmlspecialchars($book["PhotoFilePath"]); ?>" alt="Book Cover" class="book-cover">
                            <h2><?php echo htmlspecialchars($book["Title"]); ?></h2>
                            <p><?php echo htmlspecialchars($book["Author"]); ?></p>
                            <p><?php echo '$' . htmlspecialchars($book["Price"]); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>