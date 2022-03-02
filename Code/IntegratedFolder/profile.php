<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css" >
    <title>Profile</title>
</head>
<body>
    <?php 
    include "header.php";
    include "./LoginPage/Database.php";
    ?>
    <div class="centerButtons">
        <form action="profile.php" method="POST">
            <button type="submit" name="orderhistory" value="submit" class="historybutton">Order History</button>
            <button type="submit" name="logout" value="submit" class="logoutbutton">Sign out</button>
        </form>
    </div>
    <div class="profilecenter">
        <div class="profilebox">
            <form action="profile.php" method="POST">
                    <h2 class="profileheader">Change Password</h2>
                    <p><fieldset class="changePass" id="currentPassword">
                        <legend>Old Password</legend>
                        <input type="password" name="currentPassword"/>
                    </fieldset></p>
                    <p><fieldset class="changePass" id="newPassword">
                        <legend>New Password</legend>
                        <input type="password" name="newPassword"/>
                    </fieldset></p>
                    <p><fieldset class="changePass" id="confirmPassword">
                        <legend>New Password</legend>
                        <input type="password" name="confirmPassword"/>
                    </fieldset></p>
                    <div class="buttonCenter">
                        <button type="submit" name="changePass" value="submit" class="passwordButton">Change Password</button>
                    </div>
                    <?php 
                    
                    ?>
            </form>
        </div>
        <div class="usernameform">
            <form action="profile.php">
                <h2 class="profileheader">Change Username</h2>
                <p><fieldset class="changeUser" id="currentUsername"><legend>Old Username</legend>
                <input type="username" name="currentUsername">
                </fieldset></p>

                <p><fieldset class="changeUser" id="newUsername"><legend>New Username</legend>
                <input type="username" name="newUsername">
                </fieldset></p>

                <p><fieldset class="changeUser" id="newUsername"><legend>New Username</legend>
                <input type="username" name="newUsername">
                </fieldset></p>
                <div class="buttonCenter">
                    <button type="submit" name="changeUser" value="submit" class="usernameButton">Change Username</button>
                </div>
            </form>
        </div>
    </div>
    <?php 
    //include "footer.php";

    //Logout button function start
    if(isset($_POST['logout'])){
        $_SESSION ['cusId'] = 0;
        $_SESSION ['loggedIn'] = 0;
        echo $_SESSION ['loggedIn'], $_SESSION ['cusId'] ;
        echo "You are now logged out";
    }else{
        echo "Something went wrong";
    }
    //Logout button function end
    ?>

</body>
</html>