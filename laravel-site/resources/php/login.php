<?php
/*
*This PHP is used to login the user.
*Requires a HTML form, with username and password.
*Uses sessions.
*/

if(isset($_POST['submitted'])) { #If the submission button is clicked, run this PHP
    if(!isset($_POST['username'], $_POST['password'])) { #Checks fields in HTML form are filled in (Validation!).
        exit("Please enter a username and password.");
    }
    require_once("connect.php"); #Connects to the database through the connect.php file.
    try {
        $status = $db->prepare('SELECT password FROM databasename WHERE email = ?'); #Protects from SQLInjection, preparing SQL query. 
        $status->execute(array($_POST['username'])); #Running the query.
        if($status->rowCount()>0) { #Check username exists.
            $row = $status->fetch(); #Get username
            if(password_verify($_POST['password'], $row['password'])) { #Checks passwords match.
                session_start(); #Starts session to keep user logged in.
                $_SESSION['username']=$_POST['username'];
                header("Location:landingpage.html"); #Redirects user to landing page, logged in.
                exit();
            } else {
                echo "Error, password doesn't match"; #Displays error if password donesn't match.
            }
        } else {
            echo "No username found. Please check username."; #Displays errors if username isn't found.
        }

    } catch (PDOException $e) {
        echo "An error occured when trying to login. Please try again."; #If a error occours, like database connection, display error.
        echo $e;
    }
}
?>