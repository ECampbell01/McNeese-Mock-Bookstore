<!--
    TechTitans
    McNeese Online Bookstore
    Author: Ethan Campbell
    Created On: 2/12/2024
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
    <?php include 'connect.php'; ?>
        <!--Header-->
        <div class="header-container">
            <img src="Images/Logo.png" alt="McNeese" id="mcneese-logo-top"> <!--Mcneese logo-->

            <!--Search bar-->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Enter Title, ISBN, Author, or Product Name">
                <div class="search-icon"></div>
            </div>

            <!--Sign in button-->
            <a href="signin.html" id="sign-in">
                <div class="sign-in-button">
                    <button>Sign In
                        <img id="signinImage" src="Images/SignIn.png" alt="Sign In">
                    </button>
                </div>
            </a>

            <!--Cart button-->
            <a href="signin.html" id="cart">
                <div class="cart-button">
                    <button>Cart
                        <img id="cartImage" src="Images/ShoppingCart.png" alt="Shopping Cart">
                    </button>
                </div>
            </a>
        </div>

        <!--Navigation bar-->
        <nav>
            <ul class="nav-bar1">
                <li><a href="#" onclick="showHomePage()">Home</a></li> <!--When clicked, shows the home page-->
                <li><a href="#" onclick="showSalePage()">Sale</a></li> <!--When clicked, shows the sale page-->
                <li><a href="#" onclick="showOfficeSuppliesPage()">Office Supplies</a></li> <!--When clicked, shows the office supplies page-->
                <li><a href="#" onclick="showTextbooksPage()">Textbooks</a></li> <!--When clicked, shows the textbooks page-->
                <li><a href="#" onclick="showMerchandisePage()">Merchandise</a></li> <!--When clicked, shows the merchandise page-->
                <li><a href="#" onclick="showAboutUsPage()">About Us</a></li> <!--When clicked, shows the about us page-->
                <li><a href="#" onclick="showContactPage()">Contact</a></li> <!--When clicked, shows the contact page-->
            </ul>
        </nav>

        <!--Home Page-->
        <div id="homePage">
                <h2>New Arrivals</h2>

                <!--Display books-->
                <div class="row-of-books">
                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2> <?php echo $title; ?> </h2>
                        <p> <?php echo $author; ?> </p>
                        <p> <?php echo $price; ?> </p>
                    </div>
            
                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>
                </div>

                <h2>Best Sellers</h2>

                <!--Display books-->
                <div class="row-of-books">
                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>
            
                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>
                </div>

                <h2>Special Offers</h2>

                <!--Display books-->
                <div class="row-of-books">
                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>
            
                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>

                    <div class="book-container">
                        <img src="book_cover.png" alt="Book Cover">
                        <h2>Title: Title</h2>
                        <p>Author: Author</p>
                        <p>Cost: Price</p>
                    </div>
                </div>
        </div>

        <!--Sale page. Hidden until the sale section is clicked on the nav bar-->
        <div id="salePage" style="display: none;">
            <h2>Textbooks on Sale</h2>

            <!--Display books-->
            <div class="row-of-books">
                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>
        
                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>
            </div>

            <h2>Office Supplies on Sale</h2>

            <!--Display books-->
            <div class="row-of-books">
                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>
        
                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>
            </div>

            <h2>Merchandise on Sale</h2>

            <!--Display books-->
            <div class="row-of-books">
                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>
        
                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>

                <div class="book-container">
                    <img src="book_cover.png" alt="Book Cover">
                    <h2>Title: Title</h2>
                    <p>Author: Author</p>
                    <p>Cost: Price</p>
                </div>
            </div>
        </div>

        <!--Office Supplies page. Hidden until the office supplies section is clicked on the nav bar-->
        <div id="officeSuppliesPage" style="display: none;">
            <h2>Calculators</h2>
            <h2>Folders and Notebooks</h2>
            <h2>Scantrons</h2>
            <h2>Writing Utensils</h2>
            <h2>Calendars and Planners</h2>
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

        <!--Merchandise page. Hidden until the merchandise section is clicked on the nav bar-->
        <div id="merchandisePage" style="display: none;">
            <h2>Men's Clothing</h2>
            <h2>Women's Clothing</h2>
            <h2>Children's Clothing</h2>
            <h2>Accessories</h2>
            <h2>Miscellaneous</h2>
            <h2>Bags</h2>
            <h2>Sports</h2>
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

        <!--Footer-->
        <footer>
            <img src="Images/Logo2.png" alt="McNeese" id="mcneese-logo-footer"> <!--Mcneese logo-->

            <div class="social-media">
                <!--Social media logos that bring you to the social media accounts when clicked on-->
                <ul>
                    <li><a href="https://www.facebook.com/McNeeseStateU/" target="_blank"><img src="Images/Facebook.png" alt="Facebook"></a></li>
                    <li><a href="https://twitter.com/mcneese" target="_blank"><img src="Images/Twitter.png" alt="Twitter"></a></li>
                    <li><a href="https://www.youtube.com/user/McNeeseStateU" target="_blank"><img src="Images/Youtube.png" alt="Youtube"></a></li>
                    <li><a href="https://www.instagram.com/mcneese/" target="_blank"><img src="Images/Instagram.png" alt="Instagram"></a></li>
                    <li><a href="https://www.linkedin.com/school/27461/" target="_blank"><img src="Images/LinkedIn.png" alt="LinkedIn"></a></li>
                </ul>
            </div>

            <div class="footer-container">
                <!--Text that displays the McNeese bookstore hours-->
                <div class="store-hours">
                    <h3>Store Hours</h3>
                    <p>Monday - Thursday: 7:30 AM - 5 PM<br>Friday: 7:30 AM - 11:30 AM</p>
                </div>

                <!--Text that displays McNeese's address and phone number-->
                <div class="address-phonenumber">
                    <p>McNeese State University | 4205 Ryan St, Lake Charles, LA 70605 | 800-622-3352</p>
                    <p>&copy; Copyright 2024 TechTitans Bookstore. All rights reserved.</p>
                </div>

                <!--Contact us text-->
                <div class="contact-us">
                    <h3>Contact Us</h3>
                    <p>Need to contact us? Please don't hesitate to use the Contact Form.</p>
                </div>
            </div>
        </footer>
        <script src="navbar.js" defer></script> <!--Link to javascript file-->
    </body>
</html>