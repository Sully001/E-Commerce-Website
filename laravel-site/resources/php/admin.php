<?php
/*
*This page allows admins to check stock, list of customers, and current orders.
*A check needs to be preformed, to make sure the user is an admin.
*They can then access admin controls.
*/
session_start();
if(!isset($_SESSION['username'])) { #If no username is set, refuse assess.
    header("Location:landingpage.php"); #Send user back home.
    exit();
}
#Fetch account type by the username.
if($_session['username']/*...*/) { #Checks the user is an admin, if not run this
    echo '<script>popup.js</script>';
    header("Location:landingpage.php");
    session_destroy(); #End session after trying to access admin account.
    exit();
}
#If all checks complete, move onto admin information:
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Administrator Controls</title>
    </head>
</html>