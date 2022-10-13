<?php
    session_start();        
    $errorM = "";
    
    include('includes/db_connection.php');

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select * from client where userName = '$username' and password = '$password'";


        $result = $db->query($query);

        $row = $result->fetch_assoc();

        if($row){
            echo "welcome " . $row['userName'];
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['user'] = $row;
            header("Location:  accountSummary.php");

        }else{
            $errorM = "The username/password is incorrect";
        }
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <script src="scripts/login.js"></script>
    </head>
    <body>                     
        <main>                    
            <div class = "error"></div>
                <div class="login-form">
                    <form name="loginForm" method="post">
                        <h1>Waterloo Bank</h1>
                        <img src="Images/Logo.png" style="height: 100px;">
                        <h4 id="messageLogin"></h4>  
                        <div class = "error"><?php echo $errorM; ?></div>                      
                        <!--<Strong id="loginResult" class="error"></strong>-->
                        <div class="content">
                            <div class="input-field">
                                <input id="username" type="text" name="username" placeholder="User" autocomplete="nope">
                            </div>
                            <div class="input-field">
                                <input id="password" type="password" name="password" placeholder="Password" autocomplete="new-password">
                            </div>                        
                        </div>
                        <div class="action">          
                            <!--<input type="button" value="Login" name="submit" onclick="loginclick()">       -->   
                            <input type="submit" value="Login" name="submit">                               
                        </div>
                    </form>
                </div>                            
            </div>
        
        </main>
    </body>

</html>