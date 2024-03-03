/*
Javascript file for the main navigation bar
Author: Ethan Campbell
Created On: 2/19/2024
*/

function showHomePage() {
    document.getElementById('homePage').style.display = 'block'; //Displays the home page
    document.getElementById('merchandisePage').style.display = 'none'; //Makes sure the merchandise page is not displayed
    document.getElementById('aboutUsPage').style.display = 'none'; //Makes sure the about us page is not displayed
    document.getElementById('contactPage').style.display = 'none'; //Makes sure the contact page is not displayed
    document.getElementById('salePage').style.display = 'none'; //Makes sure the sale page is not displayed
    document.getElementById('officeSuppliesPage').style.display = 'none'; //Makes sure the office supplies page is not displayed
    document.getElementById('textbooksPage').style.display = 'none'; //Makes sure the textbooks page is not displayed
}

function showSalePage() {
    document.getElementById('homePage').style.display = 'none'; //Makes sure the home page is not displayed
    document.getElementById('textbooksPage').style.display = 'none'; //Makes sure the textbooks page is not displayed
    document.getElementById('officeSuppliesPage').style.display = 'none'; //Makes sure the office supplies page is not displayed
    document.getElementById('merchandisePage').style.display = 'none'; //Makes sure the merchandise page is not displayed
    document.getElementById('aboutUsPage').style.display = 'none'; //Makes sure the about us page is not displayed
    document.getElementById('contactPage').style.display = 'none'; //Makes sure the contact page is not displayed
    document.getElementById('salePage').style.display = 'block'; //Displays the sale page
}

function showOfficeSuppliesPage() {
    document.getElementById('homePage').style.display = 'none'; //Makes sure the home page is not displayed
    document.getElementById('textbooksPage').style.display = 'none'; //Makes sure the textbooks page is not displayed
    document.getElementById('merchandisePage').style.display = 'none'; //Makes sure the merchandise page is not displayed
    document.getElementById('aboutUsPage').style.display = 'none'; //Makes sure the about us page is not displayed
    document.getElementById('contactPage').style.display = 'none'; //Makes sure the contact page is not displayed
    document.getElementById('salePage').style.display = 'none'; //Makes sure the sale page is not displayed
    document.getElementById('officeSuppliesPage').style.display = 'block'; //Displays the office supplies page
}

function showTextbooksPage() {
    document.getElementById('homePage').style.display = 'none'; //Makes sure the home page is not displayed
    document.getElementById('merchandisePage').style.display = 'none'; //Makes sure the merchandise page is not displayed
    document.getElementById('aboutUsPage').style.display = 'none'; //Makes sure the about us page is not displayed
    document.getElementById('contactPage').style.display = 'none'; //Makes sure the contact page is not displayed
    document.getElementById('salePage').style.display = 'none'; //Makes sure the sale page is not displayed
    document.getElementById('officeSuppliesPage').style.display = 'none'; //Makes sure the office supplies page is not displayed
    document.getElementById('textbooksPage').style.display = 'block'; //Displays the textbooks page
}

function showMerchandisePage() {
    document.getElementById('homePage').style.display = 'none'; //Makes sure the home page is not displayed
    document.getElementById('textbooksPage').style.display = 'none'; //Makes sure the textbooks page is not displayed
    document.getElementById('officeSuppliesPage').style.display = 'none'; //Makes sure the office supplies page is not displayed
    document.getElementById('aboutUsPage').style.display = 'none'; //Makes sure the about us page is not displayed
    document.getElementById('contactPage').style.display = 'none'; //Makes sure the contact page is not displayed
    document.getElementById('salePage').style.display = 'none'; //Makes sure the sale page is not displayed
    document.getElementById('merchandisePage').style.display = 'block'; //Displays the merchandise page
}

function showAboutUsPage() {
    document.getElementById('homePage').style.display = 'none'; //Makes sure the home page is not displayed
    document.getElementById('textbooksPage').style.display = 'none'; //Makes sure the textbooks page is not displayed
    document.getElementById('officeSuppliesPage').style.display = 'none'; //Makes sure the office supplies page is not displayed
    document.getElementById('merchandisePage').style.display = 'none'; //Makes sure the merchandise page is not displayed
    document.getElementById('salePage').style.display = 'none'; //Makes sure the sale page is not displayed
    document.getElementById('contactPage').style.display = 'none'; //Makes sure the contact page is not displayed
    document.getElementById('aboutUsPage').style.display = 'block'; //Displays the about us page
}

function showContactPage() {
    document.getElementById('homePage').style.display = 'none'; //Makes sure the home page is not displayed
    document.getElementById('textbooksPage').style.display = 'none'; //Makes sure the textbooks page is not displayed
    document.getElementById('officeSuppliesPage').style.display = 'none'; //Makes sure the office supplies page is not displayed
    document.getElementById('merchandisePage').style.display = 'none'; //Makes sure the merchandise page is not displayed
    document.getElementById('salePage').style.display = 'none'; //Makes sure the sale page is not displayed
    document.getElementById('aboutUsPage').style.display = 'none'; //Makes sure the about us page is not displayed
    document.getElementById('contactPage').style.display = 'block'; //Displays the contact page
}

showHomePage();