<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <nav class="menu">                                   
        <a href="accountSummary.php">Account Summary</a>
        <a href="customerInfo.php">Customer Info</a>
        <a href="interac.php">Interac e-Transfer</a>      
        <a href="logout.php">Logout</a>     
        <div class="menu-right">
            <a href="#">
                <?php  
                    if(isset($_SESSION['isLoggedIn']) )   {
                            
                    echo "Welcome, " . $_SESSION['user']['userName'];
                    }else{
                    echo "Unauthenticated user";
                    }
                ?>        
            </a>           
        </div> 
    </nav>
    <main>
        <div>
            <?php 
            echo 'Successfully logged out!';
            ?>
        </div>
    </main>
    <footer> 
        <h4>Call us - (563)0001111</h4>
                
        <h4>Reach out through Mail - WaterlooBank_customerservice@gmail.com</h4>
            
        <h4>Address - 151 conestoga street</h4>
            
        <img src="images/insta logo.png" alt="Instagram" width="25px">
            
        <img src="images/twitter logo.png" alt="twitter" width="45px"> 
            
        <img src="images/fb logo.png" alt="twitter" width="50px">
            
        <img src="images/linkedin logo.png" alt="twitter" width="25px">
    </footer>

</body>
</html>




