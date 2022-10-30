<?php
/*
*This PHP requires a HTML form to take information from.
*Once the HTML is created, we can integrate this into the HTML.
*This pushes the user information to the database, and creates an account.
*/

if(isset($_POST['submitted'])) { #If the submit button on the form is clicked:
    require_once('connect.php'); #Connect to the database.
    try {
        $name=isset($_POST['name'])?$_POST['name']:false; #This takes the user input from the HTML form field, and sets it to a variable.
        $email=isset($_POST['email'])?$_POST['email']:false;
        $password=isset($_POST['password'])?password_hash($_POST['password'],PASSWORD_DEFAULT):false; #Setting password, but hashing the password too.
        $accounttype=isset($_POST['accounttype'])?$_POST['accounttype']:false;
        $phone=isset($_POST['phone'])?$_POST['phone']:false;
        $sql="INSERT INTO databaseName (Name, AccountType, Password, Phone, Email) VALUES ('$name','$accounttype','$password','$phone','$email)"; #Won't work until database complete.
        $db->exec($sql); #Runs the SQL query in the database, adding all fields. 
    } catch (PDOException $e) {
        echo "Unable to create account."; #If an error occurs.
        echo $e;
    }
}
?>