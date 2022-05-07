# CS346_Project
project of web development CS346



Al-Imam Muhammad ibn Saud Islamic University
College of Computer and Information Sciences
Computer Science Department
2nd Semester 1443 H – 2022




devloped by:

Hajar abdulaziz aljassar

Nawal Sultan 

Reema aloqayil

Reema alqahtani

Supervised by: Amal Algefes




**Descriptions:**

**Project description:**

In this project we built a player-ball game which allows the users to register, login, and playing the game, the game has two sides, a client side and a server side, the client side contains HTML, CSS and JavaScript used to design the user interface, the JavaScript was used also in the client side to handle the game logic and calculate the score, the server side we used php to handle registration, login in, and displaying the heightest score in game , the database shows the user name, password, their score , and rank of users.
Our goal in this project is to apply real world web development and use the most commonly technology and building web application functionally work.

**Game description:**

Player-ball game, in this game you will play as a player and there is a ball as an obstacle, you must jump from it, the score calculated while game start running, until you hit the ball. then the game stop running. The winner is that who has a highest score.




**Flow Chart:**

<img width="466" alt="image" src="https://user-images.githubusercontent.com/92683935/167257410-eca7713b-43fa-4956-81a5-b7c7e2b976bc.png">

**Look & Feel:**  
We design the game as player and balls, balls as an obstacle that the player 
must avoid touch it to win in the game.
In CSS style, we design a font in size, type and color, In home page font type 
'Arial Narrow' with size 20px and white color. We also use borders and 
:hover properties.



**Dynamic Components:**

1- Game.html.
2- home0.html.
3- welcome.html.

**Business Logic:**

Our database named DB1 contain three columns username, password and score, in score column we store player’s score that he got while playing.



<img width="227" alt="image" src="https://user-images.githubusercontent.com/92683935/167257461-4b4d2ead-6f05-4726-816c-03330cbf6eff.png">

we create three PHP files, Login.php, Registration.php and updatescore.php.
In Login.php, we use Session variable that hold information about user and is available to all pages (HTML and JS pages) we also use Select query to check if username is correct or not, we accessed user’s username from the form in Login.html file.
"SELECT * FROM Users WHERE user_name = '$username' and password = '$password'";

In Registration.php, we use INSERT query to add new user into the database, we accessed user’s username and password from the form in Registration.html file.
"INSERT INTO Users(user_name, password, score)VALUES ('$username','$password',0)";

In updatescore.php, we use Select query with ORDERD BY score DESC 
to display users from highest score to lowest.
"SELECT user_name, score FROM Users ORDER BY score DESC";

Also, we use UPDATE query to update user’s score if he gets higher score than that the old one.
"UPDATE Users SET score = '$score2' WHERE user_name= '$


**Screenshots**

   **Home page:**
   
   
<img width="359" alt="image" src="https://user-images.githubusercontent.com/92683935/167257492-9f615d36-fe44-470d-a748-ea5f1e4f19a6.png">

**Register into the system:**


To register into the system, from home page click on Register Now! Taking you to Registration page, enter username and password then click Register.



<img width="231" alt="image" src="https://user-images.githubusercontent.com/92683935/167257504-68701436-9cb1-4783-8555-43760cde22a8.png">. <img width="247" alt="image" src="https://user-images.githubusercontent.com/92683935/167257506-ed4fa20f-3afb-4ad9-a55c-2b5fb1585b40.png">  <img width="253" alt="image" src="https://user-images.githubusercontent.com/92683935/167257995-e7721def-95b8-4fee-bba3-61ec6ec4bb51.png">


Then you will be successfully added into database.


<img width="446" alt="image" src="https://user-images.githubusercontent.com/92683935/167257706-121e82d0-e6ed-43e2-8665-e5a4e88576cf.png">


**Login into the system:**

To login into the system, enter your username and password then click on LOGIN button, welcome page will appear.



<img width="229" alt="image" src="https://user-images.githubusercontent.com/92683935/167257738-4869d68e-5ab5-4e28-9823-739705806cfb.png">. <img width="234" alt="image" src="https://user-images.githubusercontent.com/92683935/167257749-ea581a54-fa40-47a1-bae8-a13f0b4d2434.png">


**Welcome page:**

In this page, shows to the user the Player-ball game instructions, when user click on Play button, game will start running.


<img width="427" alt="image" src="https://user-images.githubusercontent.com/92683935/167257778-963f4d13-91cd-4a0e-953f-5bdd5e51d204.png">


**Player-ball game running:**

Now game is running, until the player hit the ball game become Over.


<img width="446" alt="image" src="https://user-images.githubusercontent.com/92683935/167257794-1bcf905b-d806-414b-89d9-806790fd952b.png">



**Game Over:**

The player hit the ball, game over! 

<img width="446" alt="image" src="https://user-images.githubusercontent.com/92683935/167257818-99a0c4a1-f23b-497f-ac53-21b173fe9e07.png">



**Player’s score window:**

Player’s scores appear in this window, based on his score he decides if he want to play again or show the highest score, if he wants to play again will click on Try again button, and game will start run again.


<img width="247" alt="image" src="https://user-images.githubusercontent.com/92683935/167257835-b2cabdf4-8657-476b-b3d2-b4982e234ea6.png">



**Show highest score of players:**

Player clicks on show highest scores button, scores appear from highest to lowest score.

<img width="446" alt="image" src="https://user-images.githubusercontent.com/92683935/167257872-8908a515-044d-45f8-bf60-1950ee64091a.png">




**References**

Flowchart drawing tool

-	lucidchart. (2022). [Software]. https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiHhZyZzMv3AhVViv0HHZu_DAQQFnoECAsQAQ&url=https%3A%2F%2Fapp.lucidchart.com%2Fdocuments&usg=AOvVaw3BPuNfxAboRIdyAf3NweXL


Game Code

-	Chrome Dinosaur Game. (2019, June 18). The Coding Train. https://thecodingtrain.com/CodingChallenges/147-chrome-dinosaur.html



CSS Style

-	CSS Tutorial. (2016). W3schools. https://www.w3schools.com/css/default.asp


PHP Connect to MySQL

-	PHP Connect to MySQL. (2016). W3schools. https://www.w3schools.com/php/php_mysql_connect.asp

