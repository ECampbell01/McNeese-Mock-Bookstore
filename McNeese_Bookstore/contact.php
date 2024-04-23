<!--
    PHP file for the contact us page
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
    </head>
    <body>
        <?php 
            include("connectdatabase.php"); 
            include("header.html"); 
        ?>
        <div id="contactPage">
            <div id="contact-info">
                <h1>Contact Us</h1>
                <h2>Store Contact Information</h2>
                <p>McNeese University Bookstore</p>
                <p>Box 90695</p>
                <p>Lake Charles, LA 70609</p>
                <p>Phone: 1-337-475-5494</p>
            </div>
        </div>
        <?php include("footer.html"); ?>
    </body>
</html>