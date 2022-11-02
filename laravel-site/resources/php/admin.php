<?php
/*
*This page allows admins to check stock, list of customers, and current orders.
*A check needs to be preformed, to make sure the user is an admin.
*They can then access admin controls.
*/
session_start();
if(!isset($_SESSION['Username'])) { #If no username is set, refuse assess.
    header("Location:landingpage.html"); #Send user back home.
    exit();
}
#Fetch account type by the username.
$sqlType = $db->prepare('SELECT FROM AccountType FROM databasename WHERE Email= usernameHere');
$sqlType->exec(array($_POST['AccountType']));
if($_session['Username']/*...*/) { #Checks the user is an admin, if not run this
    echo '<script>popup.js</script>';
    header("Location:landingpage.html");
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
    <body>
        <header id="main-header">Admin Pannel</header>
    </body>
</html>