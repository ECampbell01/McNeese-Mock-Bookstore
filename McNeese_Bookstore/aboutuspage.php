<!--
    PHP file for the about us page
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
        <div id="aboutUsPage">
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
        <?php include("footer.html"); ?>
    </body>
</html>