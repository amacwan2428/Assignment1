<?php
session_start();
include('includes/db_connection.php');

// Select accounts from db
$query = "SELECT * from account";
$result = $db->query($query);
$accounts = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head >
        
        <title>Waterloo Name</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>

    <body>

    <header class = "logo">
        <img src="images/bank_logo.png" alt = "bank logo" width="100px" >
        <h3>Waterloo Bank</h3>
    </header>

    <nav class="menu">                                   
        <a href="accountSummary.php">Account Summary</a>
        <a href="customerInfo.php">Customer Info</a>
        <a href="interac.php">Interac e-Transfer</a>        
        <div class="menu-right">
          <a href="index.php">Logout</a>    
        </div> 
      </nav>

    <main >    
        
    
            <section class = "content">
                <h2>Account Summary</h2>
                <?php
                    if(isset($accounts))
                    {
                        foreach($accounts as $acc)
                        {
                            if($acc['isCreditCard'] == 0)
                            {
                                echo '<section class = "balance-info">';
                                echo '<h3>' . $acc['type'] . ' account</h3>';
                                echo '<p>Balance:' . $acc['balance'] . '$</p>';
                                echo '</section>'; 
                            }
                        }
                    }
                ?>

            <section class = "content">
                
                <h2>Credit cards</h2>
                <?php
                    if(isset($accounts))
                    {
                        foreach($accounts as $acc)
                        {
                            if($acc['isCreditCard'] == 1)
                            {
                                echo '<section class = "balance-info">';
                                echo '<h3>' . $acc['type'] . ' ' .$acc['number'].'</h3>';
                                echo '<p>Balance:' . $acc['balance'] . '$</p>';
                                echo '</section>'; 
                            }
                        }
                    }
                ?>
            </section>  
    </main>

    <footer> <h4>Call us - (563)0001111</h4>
        <h4>Reach out through Mail - WaterlooBank_customerservice@gmail.com</h4>
     <h4>Address - 151 conestoga street</h4>
     <img src="images/insta logo.png" alt="Instagram" width="25px">
     <img src="images/twitter logo.png" alt="twitter" width="45px"> 
     <img src="images/fb logo.png" alt="twitter" width="50px">
     <img src="images/linkedin logo.png" alt="twitter" width="25px"></footer>

</html>