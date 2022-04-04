
                                CSI 3140 - WWW Structures

                                        Winter 2022

                                Professor - Dr. Andrew Forward

                                        Deliverable 4

                                        Project Report

                                        April 4th, 2022







                                    - Parth Sharma 300057574

                                    - Kishan Mrug 300069420


# About
This is the final deliverable of the project for the course CSI3140 taken in winter 2022.
We implemented a fully functional website named "Rapid Grocers" which lets any user buy products from a variety of categorries including electronics, dairy, vegetables, snacks etc with 15 different kinds of items per category. 
Rapid grocers is detailed to be user friendly, follows a systematic color scheme , includes all pages needed for a functional online grocery website including cart, receipt, homepage, login etc.
We have implemented the website using HTML, CSS, js, php, bootstrap functions and it also contains a fully functional bidirectioanl input storage database.

The color scheme used throughout our deliverable is :
rgb(248, 77, 105)
rgb(77, 77, 255)

The font style used throughout our deliverable is Arial

We added a header and footer to every page of our website, and our header looks like :

(ss of header logo)

Below is a detailed description of the various things we implemented in the project.

**Table of Contents**
1. Implementation of features Server/Client/HTML/CSS
2. Software documentation (installing,testing and developing)
3. Adherence to UI design system
4. Seeding application with sample data
5. Application v1.0 (quality versus quantity)
6. Git usage (commit messages, all students involved)
7. Screenshots and pictures taken


**1. Implementation of features Server/Client/HTML/CSS** 
1.1 IMPLEMENTATION OF HTML/CSS
    
    1.1.1 Login Page
    The login page is a big box divided into 3 sections, a header which says "Welcome to Rapid Grocers", the left side has a picture of a grocery produce and right side is where a user can sign in (if he/she is an exister customer), or click on "Register now" to be diverted to the Info page where they can sign up.
    Once either of the two paths are completed, the user is then given access to the home page to continue with their shopping.

    (login page photo)

    1.1.2 Info Page
    For this file, we implented a bootstrap feature an also a google API which helps the user to auto fill his/her delivery address. The design is very user friendly, the user has to input his/her full name, email address and create a password. These three information are stored in our database through which a returing customer need not make a new account.

    (2 ss ; info page photo; google api)

    1.1.3 Home page
    The home page is the main page of our website it where users can browse for products and make selections. 
    
    (ss of plain page)
    
    At first the user can see all the products available, but if a user wants to search for a particular category of products, he/she can use the category drop down menu which will open up six categories inlcuding dairy, beverages, electronics etc.

    (ss of categories)

    The user can also use the search bar option where if a string is input, it will show all the products that include that string. For example, if some one inputs 'grape', the person will see "grapes", "grape fruit", "grape juice". 
    
    (ss of grape search)

    The photo cards are made using javascript where upon clickng the card, the user can add or decrease the amount of item that needs to be produced. 
    
    (ss of photo card)

    Finally we have a menu button in nav bar which has option of loggin out, checking out and contacting us.  
    
    (ss of menu)

    1.1.4 Cart
    Adding or removing items from clicking the car automatically affects the cart, which is a button on the nav bar , which upon clicking shows the cart the user has at the point. It automatically updates itself along with the subtotal bill.

    (ss of cart)

    1.1.5 Checkout
    The checkout page is split in 2 sections where on the left side, it shows the final shopping cart, pre-tax that the viewer can see for one last time before paying. The table is a scrollable table where if there are more than 9 items, the scrolling feature would automaticlly function.

    (ss of page ;cart ss; show scroll)

    The right side of the page includes the payment information, where the user has to enter his/her credit card number, expiry date and CVV. This information is not stored in our database so the user has to enter it everytime he/she uses the website to maintain privacy.

    Finally the user can click on "place order" which would send the user to the reciept page and conclude the transaction. 

    1.1.6 Reciept
    The reciept page as the name suggests shows the user reciept after everything has been purchased and payed. It contains two divisions in page, the left side showing confirmation that the order has been placed, along with the address where the shopping list would be dropped off, and at what time. The right side has two tables, the first includes item, price, quantity and total price per item and the second table includes subtotal (sum of all the total prices per item), tax (calculated at 15%) and TOTAL (final amount due to the user after everything).

    The second table is hoverable so that it's easier for the user to view each rows with ease

    (ss of hoverable reciept)

    1.1.7 Contact Us
    The contact us page is also essentially divided into 2 parts, where the left side of the page shows the means a user can reach out to us using any of our four given information - instagram, email, mailing address, phone number. The 4 information are made using the cards feature of bootstrap 
    The right side of the page includes a feedback box, where a user can enter his name, email and write a constructive feedback for our website and service. The feedback box has a character limit of 1000 characters and it shows the user how many characters are remaining for them to finish the feedback.

    (ss of random filled message)

    1.1.8 Common_partials/
    This folder contains files to our header, footer and navigation bar. The name is common_partials since all these 3 are used in all the web page files and are referenced accordingly using "<? php include ....>" syntax

    (ss of folder including files)

1.2 IMPLEMENTATION OF SERVER

    1.2.1 We used the PgAdmin4 db with SQL language to implement our database. It was complemented by the SQL server within XAMPP
    
    (ss of db)
    
    The databse is bidirectional, i.e values inputted and stored in db can make a user profile in the website (used for test cases) and also if a new user inputs value, it automatically gets stored in the database. 
    
    (2 ss, user adding ?)
    
    The databse has "x" colums indicating name, email address, phone number etc.
    No credit card information is stored to protect the privacy of our customers. 
    If someone tries to login in with invalid username/password, we give a warning prompt saying invalid userid/password 
    
    (ss of error promt)

    1.2.2 The apache server used is from XAMPP, which helped us in implementing and integrating our php files (helped in smooth conversion from html to php). 

    (ss of apache server window)

    The local host used is 192.168.64.2 which connected the php files and helped us complete testing of our v1.0


1.3 IMPLEMENTATION OF CLIENT??
The client is basically the user which is using the website


**2. Software documentation (installing,testing and developing)** 
    
2.1 The application was developed in HTML language primarily and in addition to that we used concepts from CSS, Js, php and bootstrap to make our website look good, more user friendly and functional.
    
    2.1.1 The backend of our website includes various files divided into sections to make it easier for us to merge them as well as to fix minor bugs so that the entire website doesn't go down in case something needs to be changed, all of those are done using HTML and php. 
        
    (ss of folder with files)
        
    Database is also a key part of our backend as it stores all user information and uses it when either a new user is logging in or an existing customer wants to retrieve his/her profile account, it is achieved through PgAdmin4 database using the SQL language

    (ss of db folder)

    2.1.2 The front end of our website went through minor changes in color and design from deliverable 1 to deliverable 4 where we implemnted our first functional (non-mockup) page back in deliverable 3. Now the website is fully functional like any other website has all the features including loggin out, viewing cart, adding items to cart etc, all of this was achieved by Js, CSS and Bootstrap. 

    (ss of home page with all buttons open ? )

2.2 For testing, we had to use the server XAMPP where all the files were stored in a folder called htdocs and it was then through a local host server we were able to inlude and view php and databse changes (and complete website in general).

    (ss of xampp)

    (ss of path of htdocs/www-proj/deliv-4/pageName.ext)

2.3 For installation, we had to dwonload xampp, pagadmin, and VSCode. Everything was done with these three softwares.
    2.3.1 XAMPP - it a localhost server which helps in integrating php documentation with the databse
    to install - https://www.apachefriends.org/download.html and choose the version according to the operating system of your choice.

    2.3.2 PgAdmin4 - the databse where our user information is stored. everything added was using SQL queries.
    to install - https://www.pgadmin.org/download/ and choose the version according to the operating system of your choice.

    2.3.3 VSCode - The IDE used to document all the php, css and HTML files.
    to install - https://code.visualstudio.com/download and choose the version according to the operating system of your choice.


**3. Adherence to UI design system** 
We have sticked with the original UI designed as envisioned in our deliverable 1 with some different color scheme. The application is very user friendly and we have implemented a bunch of UI design systems to make the use of website easier for any customer to operate. 
We have included :-
    a) with 1 line desc also and small ss, each
    b)
    c)
    d)
    e)
    f)
    ...
    x)

**4. Seeding application with sample data** 
We had already implemented and connected our database with our website in the previous deliverable and labs.
As seen in the screenshots down below, we have some input data values present already in our database.

(dabase values ss)

We implemented the application website as a proper functioning website where if a user registers through the application, the database gets populated simulateously with that new value, so we are not dependant on hard coding user values in backend, and in essence, any user from anywhere can use our front end website to register as a customer at our website

(add 2 ss; new value input in fromt end; db ss wi=hcih includes new row, recently added)

**5. Application v1.0 (quality versus quantity)**
The application works like any normal online grocery shopping website. The user upon reaching the website finds himself in the login page, where they can either create new account or log in to existing account (if it is saved in the database). 
If the user is new, he is sent to the information page, where he has to enter his credentials which would be stored in the database. After that, the user is sent to the main page where he can browse freely the numerous items we have on display. If the user wants to search for a specific item he can write that down in the search bar and hit enter and it will show all the products which has that string in its name.
All items are shown as cards, and upon clicking the card, a green + sign and red - sign appears by which the user can increase or decrease the quantity of the item. During the chopping, the user can view his cart and subtotal by clicking on the icon cart.
Once done, the user can click on checkout button which is a drop down menu . 
The user is now sent to the checkout page where he can view his cart and enter the bank credentials. Upon hitting enter, the user goes to the reciept page which shows the invoice of the purchase, the address it is delivered and approximate time it will arrive.
The website also has a feedback page where a user can find our contact information and also send a constructive feedback (limit 1000chr). Throughout the shopping experience, the user also has the option to log out. 

For any developers who want to add features/fix bugs - download all the files mentioned in the deliverable 4 folder, open XAMPP and find htdocs document and paste them there. Using the localhost server, the user can view on an internet explorer how the website looks and with the code in hand, making changes is easier to follow.


**6. Git usage (commit messages, all students involved)** 
The project was completed with collaboration of Parth Sharma (300057574) and Kishan Mrug (300069420). Both of us brainstromed ideas to implement, divided the work among us, completed the assigned work at our own devices and finally merged & commited them on github to view progress of the entire project via the deliverables.
We also made side-branches for deliverable 2 and 4, where we added stuff which were later pushed and merged into the main branch so as to not have any merge conflicts and better understand the working and collaboration on github.

(git commit pics from each deliverable)

This project has been very informative for us where we understood and experienced the value of collaborating in a team and expressing creativity which would be helping us in future.

**7. Screenshots and pictures taken**
The folder "__________" contains all the pictures we used for our products and it also contains all the screenshots we took for each page which are shown all throughout this documentation.

###		
###

