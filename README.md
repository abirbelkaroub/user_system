# user_system
User system application built with PHP using OOP and MVC architecture.
##Features
- User Registration
- User Login
- User Logout
- Password Hashing
- Session Authentication 
---


##Installation
Clone the repository
Create a MySQL database manually and update the database connection settings according to your local environment
Run the project on localhost using XAMPP or Laragon
##Project Structure 
The application follows a simple MVC architecture:
-**Model** → Handles database operations
-**View** → Displays the interface to the user 
-**Controller** → Handles application logic and user requests
##The operations flow 

###Registration 
Controller verifies if the email exists already in the DB 
Model executes the insertion query .
The password is hashed before storing it in the DB

###Login
Model verify the email, and the password is verified using ‘password_verify()’
Session variables are created after the successful authentication 

###Logout 
The session is destroyed and the user is redirected to the login page.

## Technologies Used

- PHP OOP
- MySQL
- PDO
- HTML
- CSS 

## Improvements To Add Later
- Validation messages with JavaScript
- Remember me functionality  
- CSRF protection 
- Form validation and sanitization
- Responsive UI improvements
