--Sql file that inserts data into the tables
--Created on 3/10/2024
--Author: Jett Rogers

--Insert Status types into itemstatus table
INSERT INTO ItemStatus(StatusType)
VALUES
    ('Available'),
    ('On-Hold'),
    ('Not In Stock');

--Insert into office supplies table
--Insert staples data
INSERT INTO OfficeSupply
    (SupplyId, Name, Brand, StatusId, Quantity, Price, PhotoFilePath)
VALUES
    (1, 'Premium Gold Staples', 'Bostitch', 1, 25, 5.99, 'Staples.jpg'),
    (2, 'Optima Premium Staples', 'Swingline', 1, 15, 4.49, 'Staples.jpg'),
    (3, 'Heavy-Duty Staples', 'Arrow Fastener', 3, 0, 3.99, 'Staples.jpg'),
    (4, 'PowerEase Staples', 'PaperPro', 1, 30, 6.49, 'Staples.jpg'),
    (5, 'Precision Staples', 'Stanley Bostitch', 1, 52, 7.99, 'Staples.jpg');

--Insert paper data
INSERT INTO OfficeSupply
    (SupplyId, Name, Brand, StatusId, Quantity, Price, PhotoFilePath)
VALUES
    (6, 'Premium White Printer Paper', 'Hammermill', 1, 25, 10.99, 'Paper.jpg'),
    (7, 'Recycled Copy Paper', 'Boise Paper', 3, 0, 8.49, 'Paper.jpg'),
    (8, 'Bright Multipurpose Paper', 'HP Paper', 1, 12, 12.99, 'Paper.jpg'),
    (9, 'Eco-Friendly Printing Paper', 'Double A', 1, 16, 14.95, 'Paper.jpg'),
    (10, 'Professional Laser Paper', 'Xerox', 2, 5, 11.79, 'Paper.jpg');

--Insert notebook data
INSERT INTO OfficeSupply
    (SupplyId, Name, Brand, StatusId, Quantity, Price, PhotoFilePath)
VALUES
    (11, 'Premium Spiral Notebook Paper', 'Mead', 2, 10, 4.99, 'Notebook.jpg'),
    (12, 'College-Ruled Filler Paper', 'Five Star', 3, 0, 5.49, 'Notebook.jpg'),
    (13, 'Eco-Friendly Composition Paper', 'TOPS', 1, 15, 3.99, 'Notebook.jpg'),
    (14, 'Classic Hardcover Notebook', 'Moleskine', 1, 19, 12.95, 'Notebook.jpg'),
    (15, 'Wirebound Quad-Ruled Notebook Paper', 'Roaring Spring', 1, 35, 6.99, 'Notebook.jpg');

--Insert Calculator data
INSERT INTO OfficeSupply
    (SupplyId, Name, Brand, StatusId, Quantity, Price, PhotoFilePath)
VALUES
    (16, 'Scientific Calculator', 'Texas Instruments', 2, 2, 17.99, 'GraphingCalculator.jpg'),
    (17, 'Graphing Calculator', 'Casio', 3, 0, 5.49, 'GraphingCalculator.jpg'),
    (18, 'Financial Calculator', 'HP (Hewlett Packard)', 1, 10, 29.99, 'GraphingCalculator.jpg'),
    (19, 'Basic Calculator', 'Sharp', 1, 20, 7.99, 'GraphingCalculator.jpg'),
    (20, 'Programmable Graphing Calculator', 'TI-84 Plus CE', 1, 5, 119.99, 'GraphingCalculator.jpg');

--Insert stapler data
INSERT INTO OfficeSupply
    (SupplyId, Name, Brand, StatusId, Quantity, Price, PhotoFilePath)
VALUES
    (21, 'Classic Desktop Stapler', 'Swingline', 2, 5, 12.99, 'Stapler.jpg'),
    (22, 'Heavy-Duty Stapler', 'Bostitch', 1, 23, 24.95, 'Stapler.jpg'),
    (23, 'Compact Stapler', 'PaperPro', 1, 14, 9.99, 'Stapler.jpg'),
    (24, 'Electric Stapler', 'Rexel', 3, 0, 36.99, 'Stapler.jpg'),
    (25, 'Ergonomic Stapler', 'Novus', 1, 26, 19.99, 'Stapler.jpg');

--Insert data into Books table
INSERT INTO Book (BookId, Title, Author, ISBN, StatusId, Quantity, Price, PhotoFilePath)
VALUES
    (1, 'Introduction to Psychology', 'James W. Kalat', '978-1305271555', 1, 50, 90.0000, 'IntroToPsych.jpg'),
    (2, 'Principles of Microeconomics', 'N. Gregory Mankiw', '978-1305971493', 2, 0, 120.0000, 'Microeconomics.jpg'),
    (3, 'Chemistry: The Central Science', 'Theodore L. Brown, H. Eugene LeMay Jr., Bruce E. Bursten', '978-0321910417', 3, 0, 150.0000, 'Chemistry.jpg'),
    (4, 'Calculus: Early Transcendentals', 'James Stewart', '978-1285741550', 2, 0, 110.0000, 'Calculus.jpg'),
    (5, 'Introduction to Sociology', 'Anthony Giddens, Mitchell Duneier, Richard P. Appelbaum, Deborah Carr', '978-0393922196', 1 , 25, 80.0000, 'Sociology.png'),
    (6, 'Biology: Concepts and Investigations', 'Mariëlle Hoefnagels', '978-1259824906', 3, 15, 100.0000, 'Biology.jpg'),
    (7, 'Fundamentals of Financial Management', 'Eugene F. Brigham, Joel F. Houston', '978-1337395250', 1, 0, 130.0000, 'FinancialManagement.jpg'),
    (8, 'Computer Science: An Overview', 'J. Glenn Brookshear, Dennis Brylow', '978-0133760064', 1, 25, 95.0000, 'ComputerScience.jpg'),
    (9, 'Organic Chemistry', 'Paula Yurkanis Bruice', '978-0134042282', 1, 10, 140.0000, 'OrganicChemistry.jpg'),
    (10, 'American Government: Institutions and Policies', 'James Q. Wilson, John J. DiIulio Jr., Meena Bose', '978-1305956346', 1, 7, 110.0000, 'AmericanGovernment.jpg'),
    (11, 'Physics for Scientists and Engineers', 'Raymond A. Serway, John W. Jewett', '978-1337603319', 1, 5, 125.0000, 'Physics.jpg'),
    (12, 'The Norton Anthology of World Literature', 'Martin Puchner', '978-0393602876', 1, 35, 75.0000, 'Anthology.jpg'),
    (13, 'Marketing Management', 'Philip T. Kotler, Kevin Lane Keller', '978-0133856460', 1, 5, 115.0000, 'MarketingManagement.jpg'),
    (14, 'Statistics: Concepts and Controversies', 'David S. Moore, William I. Notz, Michael A. Fligner', '978-1319058954', 1, 56, 105.0000, 'Statistics.jpg'),
    (15, 'Human Anatomy & Physiology', 'Elaine N. Marieb, Katja Hoehn', '978-0134652333', 1, 3, 160.0000, 'AnatomyPhysiology.jpg'),
    (16, 'Macroeconomics','Paul Krugman, Robin Wells', '978-1319106051', 1, 12, 95.0000, 'Macroeconomics.jpg'),
    (17, 'Essentials of Investments', 'Zvi Bodie, Alex Kane, Alan J. Marcus', '978-1259277177', 1, 12, 120.0000, 'Investments.jpg'),
    (18, 'Psychology: Themes and Variations', 'Wayne Weiten', '978-1337336567', 1, 16, 110.0000, 'PsychologyThemes.jpg'),
    (19, 'Business Law: Text and Cases', 'Kenneth W. Clarkson, Roger LeRoy Miller, Frank B. Cross', '978-1337404532', 1, 10, 125.0000, 'BusinessLaw.jpg'),
    (20, 'Human Resource Management', 'Gary Dessler', '978-0134739724', 1, 30, 105.0000, 'HumanResourceManagement.jpg'),
    (21, 'Sociology: A Brief Introduction', 'Richard T. Schaefer', '978-1260074953', 1, 40, 80.0000, 'SociologyIntro.jpg'),
    (22, 'Essential Cell Biology', 'Bruce Alberts, Dennis Bray, Karen Hopkin, Alexander D. Johnson, Julian Lewis, Martin Raff, Keith Roberts, Peter Walter', '978-0815344544', 1, 50, 130.0000, 'CellBiology.jpg'),
    (23, 'Financial Accounting', 'Robert Libby, Patricia Libby, Daniel G. Short', '978-1260247875', 3, 0, 110.0000, 'FinancialAccounting.jpg'),
    (24, 'Strategic Management: Concepts and Cases', 'Fred R. David, Forest R. David', '978-0134167848', 1, 10, 140.0000, 'StrategicManagement.jpg'),
    (25, 'Communication in Everyday Life', 'Steve Duck, David T. McMahan', '978-1319059678', 1, 10, 90.0000, 'Communication.jpg');