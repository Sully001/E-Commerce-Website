<?php
/*
*This PHP is used to login the user.
*Requires a HTML form, with username and password.
*Uses sessions.
*/
if(isset($_POST['submitted'])) { #If the submission button is clicked, run this PHP
    if(!isset($_POST['Username'], $_POST['Password'])) { #Checks fields in HTML form are filled in (Validation!).
        exit("Please enter a username and password.");
    }
    require_once("connect.php"); #Connects to the database through the connect.php file.
    try {
        $status = $db->prepare('SELECT Password FROM databasename WHERE email = ?'); #Protects from SQLInjection, preparing SQL query. 
        $status->execute(array($_POST['Username'])); #Running the query.
        if($status->rowCount()>0) { #Check username exists.
            $row = $status->fetch(); #Get username
            if(password_verify($_POST['Password'], $row['Password'])) { #Checks passwords match.
                session_start(); #Starts session to keep user logged in.
                $_SESSION['Username']=$_POST['Username'];
                $userCheck=$_SESSION['Username'];
                $userType= $db->prepare("SELECT AdminAccount FROM databasename WHERE Username = '$userCheck'");
                $userType->execute();
                $adminChecker = $userType->fetch();
                if($adminChecker = true) { #If user IS an admin
                    header("Location:dashboard.blade.php"); #Redirect to admin page.
                    exit();
                } else { #If not an admin, go to home page.
                    header("Location:home.html");
                    exit();
                }
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