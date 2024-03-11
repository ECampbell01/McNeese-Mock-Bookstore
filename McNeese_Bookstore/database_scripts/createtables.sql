--Sql file that creates the database, tables, and alterations to the tables
--Created on 3/10/2024
--Author: Jett Rogers

--Create database
CREATE DATABASE mcNeeseBookstore;

--Create table that stores book information
CREATE TABLE Book (
    BookId INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(75) NOT NULL,
    Author VARCHAR(50) NOT NULL,
    ISBN VARCHAR(25) NOT NULL,
    StatusId INT NOT NULL,
    Quantity INT NOT NULL,
    Price DECIMAL(10, 2) NOT NULL
);

--Create table that stores office supply information
CREATE TABLE OfficeSupply (
    SupplyId INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(75) NOT NULL,
    Brand VARCHAR(50) NOT NULL,
    StatusId INT NOT NULL,
    Quantity INT NOT NULL,
    Price DECIMAL(10, 2) NOT NULL
);

--Create table that stores item status information
CREATE TABLE ItemStatus (
    StatusId INT PRIMARY KEY AUTO_INCREMENT,
    StatusType VARCHAR(25) NOT NULL
);

--Create table that stores cart information
CREATE TABLE Cart (
    CartId INT PRIMARY KEY AUTO_INCREMENT,
    CustomerId INT NOT NULL,
    BookId INT,
    SupplyId INT,
    TotalCost DECIMAL(10, 2)
);

--Create table that stores customer information
CREATE TABLE Customer (
    CustomerId INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(75) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    Username VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL
);

--Create table that stores purchase history information
CREATE TABLE PurchaseHistory (
    PurchaseId INT PRIMARY KEY AUTO_INCREMENT,
    CustomerId INT NOT NULL,
    BookId INT,
    SupplyId INT,
    TotalCost DECIMAL(10, 2)
);

--Alter book table to include file path for photos and add foreign key
ALTER TABLE Book
ADD COLUMN PhotoFilePath VARCHAR(255),
ADD CONSTRAINT FK_StatusBook FOREIGN KEY (StatusId) REFERENCES ItemStatus(StatusId);

--Alter officesupply table to add foreign key
ALTER TABLE OfficeSupply
ADD CONSTRAINT FK_StatusOS FOREIGN KEY (StatusId) REFERENCES ItemStatus(StatusId);

--Alter cart table to add foreign keys
ALTER TABLE cart
ADD CONSTRAINT FK_Customer FOREIGN KEY (CustomerId) REFERENCES Customer(CustomerId);

ALTER TABLE Cart
ADD CONSTRAINT FK_Book FOREIGN KEY (BookId) REFERENCES Book(BookId);

ALTER TABLE Cart
ADD CONSTRAINT FK_OfficeSupply FOREIGN KEY (SupplyId) REFERENCES OfficeSupply(SupplyId);

--Alter office supply table to add column for file path of photos
ALTER TABLE OfficeSupply
ADD COLUMN PhotoFilePath VARCHAR(255);