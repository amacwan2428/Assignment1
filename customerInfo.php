<!DOCTYPE html>
<html>
    <head >
        
        <title>Waterloo Bank</title>
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
            <a href="index.php">Logout</a>     
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
        <div class="row2">
            <div>
                <h3>Customer Information</h3>  
                <div class="c_info">
                    <img src="images/customer.png" alt="This is customer's pic" width="200" height="200" />
                    <p>Name : Joy Smith</p>
                    <p>Address : 1326, broken oak, Waterloo On, N2N1N7</p>
                    <p>Phone :8899889898</p>
                    <p>Email : joysmith@gmail.com</p>

                   
                </div>
            </div>
        </div> 
    </main>

    <footer> <h4>Call us - (563)0001111</h4>
        <h4>Reach out through Mail - WaterlooBank_customerservice@gmail.com</h4>
     <h4>Address - 151 conestoga street</h4>
     <img src="images/insta logo.png" alt="Instagram" width="25px">
     <img src="images/twitter logo.png" alt="twitter" width="45px"> 
     <img src="images/fb logo.png" alt="twitter" width="50px">
     <img src="images/linkedin logo.png" alt="twitter" width="25px"></footer>

</html>