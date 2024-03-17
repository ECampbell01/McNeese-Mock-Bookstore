<!--
    PHP file for the McNeese Bookstore body
    Author: Ethan Campbell
    Created On: 3/4/2024
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
        </style>
    </head>

    <body>
        <!--Home Page-->
        <div id="homePage">

            <h2>New Arrivals</h2>
            <!--Display books-->
            <div class="row-of-books">
                <?php
                include("connectdatabase.php");
                foreach ($books_new_arrivals as $book) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo htmlspecialchars($book["PhotoFilePath"]); ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo htmlspecialchars($book["Title"]); ?></h2>
                        <p><?php echo htmlspecialchars($book["Author"]); ?></p>
                        <p><?php echo '$' . htmlspecialchars($book["Price"]); ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <h2>Best Sellers</h2>
            <!-- Display books -->
            <div class="row-of-books">
                <?php
                foreach ($books_best_sellers as $book) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo htmlspecialchars($book["PhotoFilePath"]); ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo htmlspecialchars($book["Title"]); ?></h2>
                        <p><?php echo htmlspecialchars($book["Author"]); ?></p>
                        <p><?php echo '$' . htmlspecialchars($book["Price"]); ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <h2>Special Offers</h2>
            <!-- Display books -->
            <div class="row-of-books">
                <?php
                foreach ($books_special_offers as $book) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo htmlspecialchars($book["PhotoFilePath"]); ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo htmlspecialchars($book["Title"]); ?></h2>
                        <p><?php echo htmlspecialchars($book["Author"]); ?></p>
                        <p><?php echo '$' . htmlspecialchars($book["Price"]); ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <!--Sale page. Hidden until the sale section is clicked on the nav bar-->
        <div id="salePage" style="display: none;">

            <h2>Textbooks on Sale</h2>
            <!--Display books-->
            <div class="row-of-books">
                <?php
                include("connectdatabase.php");
                foreach ($books_sale as $book) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo $book["PhotoFilePath"]; ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo $book["Title"]; ?></h2>
                        <p><?php echo $book["Author"]; ?></p>
                        <p><?php echo '$' . $book["Price"]; ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <h2>Office Supplies on Sale</h2>
            <!-- Display books -->
            <div class="row-of-books">
                <?php
                foreach ($office_supplies_sale as $officesupply) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo $officesupply["PhotoFilePath"]; ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo $officesupply["Brand"]; ?></h2>
                        <p><?php echo $officesupply["Name"]; ?></p>
                        <p><?php echo '$' . $officesupply["Price"]; ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <!--Office Supplies page. Hidden until the office supplies section is clicked on the nav bar-->
        <div id="officeSuppliesPage" style="display: none;">

            <h2>Calculators</h2>
            <!--Display Office Supplies-->
            <div class="row-of-books">
                <?php
                include("connectdatabase.php");
                foreach ($office_supplies_calculators as $officesupply) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo $officesupply["PhotoFilePath"]; ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo $officesupply["Brand"]; ?></h2>
                        <p><?php echo $officesupply["Name"]; ?></p>
                        <p><?php echo '$' . $officesupply["Price"]; ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <h2>Staplers and Staples</h2>
            <!-- Display Office Supplies -->
            <div class="row-of-books">
                <?php
                foreach ($office_supplies_staplers as $officesupply) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo $officesupply["PhotoFilePath"]; ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo $officesupply["Brand"]; ?></h2>
                        <p><?php echo $officesupply["Name"]; ?></p>
                        <p><?php echo '$' . $officesupply["Price"]; ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>

            <h2>Notebooks and Paper</h2>
            <!-- Display Office Supplies -->
            <div class="row-of-books">
                <?php
                foreach ($office_supplies_notebooks as $officesupply) {
                    ?>
                    <div class="book-container">
                        <img src="Images/<?php echo $officesupply["PhotoFilePath"]; ?>" alt="Book Cover" class="book-cover">
                        <h2><?php echo $officesupply["Brand"]; ?></h2>
                        <p><?php echo $officesupply["Name"]; ?></p>
                        <p><?php echo '$' . $officesupply["Price"]; ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <!--Textbooks page. Hidden until the textbooks section is clicked on the nav bar-->
        <div id="textbooksPage" style="display: none;">
            <h2>Search for books by name or by course</h2>

            <!--Search bar for searching the book by name-->
            <div class="search-by-name">
                <h3>Search for Book</h3>
                <input type="text" class="search-name" placeholder="Enter Name of Textbook">
            </div>

            <!--Search by Course-->
            <div class="search-by-course">
                <h3>Search by Course</h3>

                <!--Label and dropdown menu for selecting the term-->
                <label for="term">Term:</label>
                <select id="term" name="term">
                    <option value="spring">Spring 2024</option>
                    <option value="summer">Summer 2024</option>
                    <option value="fall">Fall 2024</option>
                </select>

                <!--Label and dropdown menu for selecting the department-->
                <label for="department">Department:</label>
                <select id="department" name="department">
                    <option value="agri">AGRI</option>
                    <option value="art">ART</option>
                    <option value="biol">BIOL</option>
                    <option value="buds">BUDS</option>
                    <option value="chem">CHEM</option>
                    <option value="edpr">EDPR</option>
                    <option value="enfl">ENFL</option>
                    <option value="engr">ENGR</option>
                    <option value="gnst">GNST</option>
                    <option value="h&hp">H&HP</option>
                    <option value="hist">HIST</option>
                    <option value="math">MATH</option>
                    <option value="mcom">MCOM</option>
                    <option value="musc">MUSC</option>
                    <option value="nurs">NURS</option>
                    <option value="psyc">PSYC</option>
                    <option value="rmls">RMLS</option>
                    <option value="sosc">SOSC</option>
                </select>

                <!--Search bar for searching by the course, section, and instructor-->
                <div class="search-by-course">
                    <label for="course">Search the Course, Section, and Instructor:</label>
                    <input type="text" class="search-course" placeholder="Course-Section-Instructor">
                </div>
            </div>
        </div> 

        <!--About Us page. Hidden until the about us section is clicked on the nav bar-->
        <div id="aboutUsPage" style="display: none;">
            <h1>About Our Bookstore</h1>
            <p>The McNeese State University Bookstore is owned and operated by McNeese State University
                and is located in the Student Union Complex on Beauregard Drive. Our regular business hours are 7:30 a.m. to 5:00 p.m.,
                Monday through Thursday and 7:30 a.m. to 11:30 a.m. on Friday. During the first two weeks of each semester the Bookstore
                is open late hours to better serve all students. The Bookstore offers an interest free student charge plan (PTA) to
                assist students with purchase of books and supplies. The PTA is only available to active students who have paid all 
                of their tuition and fees. In order to open a PTA, students must present a valid picture I.D. PTA payments are not taken
                at the Bookstore and may be made at the Cashier's Office in Smith Hall or online through Banner Self-Service.
                For further information, please call us at 337- 475-5494 or 1-800-622-3352 ext 5494. You may also email us through
                our contact form or send us a message through our Facebook page.
            </p>
            <h5>At the beginning of the spring and fall semesters,
                the Bookstore is opened late for two weeks for your convenience.
            </h5>
            <h3>PLEASE ALLOW AT LEAST 24 HOURS FOR PROCESSING ON ALL WEB ORDERS. ORDERS PLACED DURING PEAK TIMES WILL
                TAKE LONGER TO PROCESS. IF YOU HAVE SPECIFIED THAT YOU WOULD LIKE TO PICK UP YOUR ORDER IN-STORE,
                YOU WILL BE NOTIFIED VIA EMAIL WHEN THE ORDER IS READY.
            </h3>
        </div>

        <!--Contact page. Hidden until the contact section is clicked on the nav bar-->
        <div id="contactPage" style="display: none;">
            <div id="contact-info">
                <h1>Contact Us</h1>
                <h2>Store Contact Information</h2>
                <p>McNeese University Bookstore</p>
                <p>Box 90695</p>
                <p>Lake Charles, LA 70609</p>
                <p>Phone: 1-337-475-5494</p>
            </div>
        </div>
        <script src="navbar.js" defer></script> <!--Link to javascript file-->
    </body>
</html>