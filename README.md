# retro-cinema-internet
This project have been made in effort to explain the basics of database systems.I have used very simple code to achieve the user friendly and interactive movie web application.The project targets any level of user for understanding the purpose of database systems.
The codes for different web pages have been uploaded with conventional names.

Some code samples are as given description:

1.Statpage.php(Core html file mashupped by php is the introductory page)
  
"Startpage" is the index page which would display the brand and introduction to the further contents.This page does not require any database integration and can be used as is.There are creative animations in CSS as sliding image effect which has a bunch of sliding images in background.All these is achieved only by CSS animations.The page comprise of HTML elements like search , navbar , footer etc.
  

2.login.php/Register.php(Login portal for existing users)

This page is a conventional login page which takes in username and password which uniquely identifies a user and enables login facility.If the user has forgotten the password the page redirects to a separate page where by answering a personel question , access to account is granted.This page requires connection with database.The Register page offers users to enter relevant details to populate their account


3.Quelist.php(Home page for the movie items)

The movie store introduction is given here.All the latest added here.The general view of list of movies is displayed.For viewing , a user must be logged in.So if no session is active the redirection sends to the login page.


4.Profilepage.php(User account page)

This page holds the user account details.The watch history can be tracked here.The new movies are recommeneded here based on past watch history.The recommendation is a basic programm which sums up the genre watched most and recommends a relevant latest release.

5.Display components folder to comprise of all the static elements like images , CSS styling etc.


Requirements:To run this project one must have XAMPP installed and any version of Mysql removed.The database file attatched must be imported into the exact same directories and certain changes are required for accessing the data from the local server.The XAMPP uses mysql port number similar to that of Mysql localhost.Hence due to port number clashes the database work work even if XAMPP works.
