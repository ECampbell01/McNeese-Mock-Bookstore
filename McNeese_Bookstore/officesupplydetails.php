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

    <?php
        include("header.html");
        include("connectdatabase.php");

        // Retrieve the office supply id
        $office_supply_id = $_GET['id'];

        // Query the database to get the details of the selected office supply
        $query = "SELECT * FROM OfficeSupply WHERE SupplyId = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("i", $office_supply_id);
        $statement->execute();
        $result = $statement->get_result();

        // Fetch the office supply details as an associative array
        $office_supply = $result->fetch_assoc();

        // Check if office supply details are retrieved successfully
        if ($office_supply) {
            // Office supply details found, display them
            ?>
            <div id="container">
                <div class="book-image">
                    <img src="Images/<?php echo htmlspecialchars($office_supply["PhotoFilePath"]); ?>" alt="Office Supply Image">
                </div>
                <div class="book-info">
                    <h2><?php echo htmlspecialchars($office_supply["Name"]); ?></h2>
                    <p>Brand: <?php echo htmlspecialchars($office_supply["Brand"]); ?></p>
                    <p>Price: $<?php echo htmlspecialchars($office_supply["Price"]); ?></p>

                    <!-- Add to Cart button -->
                    <form action="addtocartOffSup.php" method="post">
                        <input type="hidden" name="price" value="<?php echo htmlspecialchars($office_supply["Price"]); ?>">
                        <input type="hidden" name="office_supply_id" value="<?php echo htmlspecialchars($office_supply["SupplyId"]); ?>">
                        <input type="submit" value="Add to Cart" class="add-to-cart">
                    </form>
                </div>
            </div>
            <?php
        } 
        else {
            // Office supply details not found, display an error message
            echo "<p>Office supply details not found.</p>";
        }
        include("footer.html"); // Display footer
        ?>
    </body>
</html>
