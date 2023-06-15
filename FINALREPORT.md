
![image](https://github.com/akmxlsz/foodies/assets/106504907/ed243943-03d1-4b91-b5e4-70c396715d96)

1.0 TITLE OF THE PROJECT

Foodies & Co


2.0 INTRODUCTION

Foodies & Co is an innovative web application designed to streamline and simplify food and beverage operations for businesses. Built using the Laravel Model, View and Controller (MVC) framework, Foodies & Co offers a user-friendly platform for buyers and sellers to perform buying and selling operations.


3.0 OBJECTIVES


There are three main objectives of our project:

To provide a user-friendly ordering process. The interface of the application will be simple and minimalist. This is to make sure that users can easily select food and drinks and add them to the cart. This is to ensure that the ordering process is straightforward, with clear instructions and the most important thing is that the application just only requires minimal steps for users to complete an order.

To develop an efficient order management system. This involves creating a back-end functionality that allows restaurant staff to receive and process orders effectively. We will implement features such as real-time order notifications and order tracking. The goal is to streamline the order flow, minimise errors, and ensure timely delivery or pickup.

To ensure that the application that we will develop could be accessible across many types of devices including desktops, tablets, ipads and smartphones. The ideal is to make sure that the application gives a responsive design that adapts to different screen sizes so that the user can access on any types of devices.


4.0 FEATURES AND FUNCTIONALITY 


There are several functions that we will implement on our project:

User Registration and Authentication: allow users to create accounts, log in, and manage their profiles.

Shopping Cart: enable users to view their selected items, modify quantities and remove items if they have changed their mind.

Payment Integration: integrate a secure payment gateway to process online payments so that users can complete transactions using various payment methods such as credit/debit cards, digital wallets, or online banking.

Order Tracking: implement a feature that allows users to track the status of their orders.

User Reviews and Ratings: allow users to leave feedback and ratings for the food they have ordered, and the important thing is to help future customers make decisions.

6.0 SEQUENCE DIAGRAM


Figure 1
 shows sequence diagram



7.0 PROJECT SYSTEM CAPTURED SCREEN AND EXPLANATION


Figure 1
This is the Welcome Page. Once the user clicks on our website link, they will go directly to this page. At the top and right of the page, there is a “Login” and “Register” button. For the first time user, they need to click on the “Register” button and register their account first. For the regular user that has already created an account, they just need to click on “Login” button.

Figure 2
This is the Register Page. Once the user clicks on the “Register” button from the Welcome Page, they will go directly to this page. There are four columns which are Name, Email, Password and Forgot Password that the user needs to fill in to register. After that, the user will need to click on the “Register” button that is located at the bottom and right of the form.


Figure 3
 This is our “Login Page” where the user can log into the Foodies & Co. website if they have the account already. By filling in the email and password the user is able to log into their account and if they forgot their password, they can press the “Forgot your password?” button to go to the “Forgot Password” page.

Figure 4
This is the “Forgot Password” page where they can enter their email to reset their password and by pressing the “EMAIL PASSWORD RESET LINK” button, there will be a prompt that will be sent to their email to reset their password.

Figure 5
 This is our “Dashboard” page where we can learn more about our project which is Foodies & Co. and what Foodies & Co. offers as a company/website.


Figure 6
This is the “Profile” page where we can change the password, delete the account and change our name and email.


Figure 7
This is the Main Page for our website where we can see everything on the dashboard and all the options on the header on top.

Figure 8
This is the “Add Order” page where customers fill their order by filling their full name/surname, their email, their phone number, and what they want to eat. All of these details will be shown in the order history tab and the database for the website.



Figure 9
This is our “Menu” page and under the Foods option where we can see the multiple choices of food that we wanted to eat and can be ordered. 

Figure 10
By selecting the drink menu, we can take a look at the Drinks option and choose over the variety of options that are shown in the drink tab.



Figure 11
This is the “Make Your Payment” page where the user will be using to pay for their food to confirm the order. By entering the price of their food that they need to pay, their card number, the expiry date and the CVV of the card.



Figure 12
This is the “Payment Status/ History” page of the user of what they have bought and how much they pay for their food. They can see the history of the transactions and the receipts. 

Figure 13
There are also two buttons for the users to click, which are the “Read Review” where you can read what others' reviews are and also the “Write Review” where we can write the review of the food ourselves.

Figure 14
This is the review application page where after we click the “Write Review” for this example on the dish fried taufu, we can put in our name and what we think of the dish and by pressing submit it will go to the database.
	

Figure 15
By clicking the “Read Review” button, the user will be redirected here where they can read the history/ past review of what the other users think about the dish.



8.0 WHAT IS THE CHALLENGE/DIFFICULTIES TO DEVELOP THE APPLICATION

Particularly for developers who are new to the framework, in this case us students, laravel has a steep learning curve. It has a vast ecosystem of features, libraries, and concepts to comprehend. To fully comprehend the architectural patterns, best practices, and conventions of Laravel, developers must devote time and effort.

Configuring the development environment, including installing PHP and a web server (such as Apache), is necessary for setting up a Laravel application. For us novices, correctly configuring these components can be quite challenging.

Understanding software architecture principles is quite challenging for us because it is necessary for creating a well-structured and easy-to-maintain Laravel application. When dealing with complex business logic, designing a clear separation of concerns and managing dependencies is quite challenging.

Testing the website can help us avoid any regression and ensure code quality and this is encouraged by laravel itself. However, when dealing with complex interactions between various application components, writing effective tests and setting up testing environments can be difficult for us, who are just starting to learn about laravel.

Other than that, we also encounter some problems trying to make the order status page, where the user can see their order status whether it is still being prepared or has been delivered.


