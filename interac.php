<?php 
session_start();
include('includes/db_connection.php');
$nameVar = $emailVar = $phoneVar = $secQVar = $secAVar = $amtVar = "";
$balanceGlobal = 0;
$idAccountGlobal = 0;

$err1 = $err2 = $err3 = $err4 = $err5 = $err6 = $err7 = $correct = ""; 

if(isset($_POST['submit'])){
        
    

    if(empty($_POST['payeename'])){
        $err1 = 'enter name';
    }else{
        $err1 = "";
        $nameVar = $_POST['payeename'];
    }
    if(empty($_POST['payeemail'])){
        $err2 = 'enter email';
    }else{
        $err2 = "";
        $emailVar = $_POST['payeemail'];
    }
    if(empty($_POST['payeenumber'])){
        $err3 = 'enter phone number';
    }else{
        $err3 = "";
        $phoneVar = $_POST['payeenumber'];
    }
    if(empty($_POST['secQ'])){
        $err4 = 'enter security question';
    }else{
        $err4 = "";
        $secQVar= $_POST['secQ'];
    }
    if(empty($_POST['secA'])){
        $err5 = 'enter security answer';
    }else{
        $err5 = "";
        $secAVar = $_POST['secA'];
    }
    if(empty($_POST['amount'])){
        $err6 = 'enter amount';
    }else{
        $err6 = "";
        $amtVar = $_POST['amount'];
    }

    $amt = $_POST['balanceGlob'];


    if ($err1 == "" && $err2 == "" && $err3 == "" && $err4 == "" && $err5 == "" && $err6 == ""){
        if($amtVar > $amt){
            $err7 = "insufficient balance";
        }else{
            $err7 = "";                      
        
            $tidAccount = $_POST['tidAccount'];
            
            
            $query = "insert into etransac values(0,'$tidAccount','$nameVar','$emailVar','$phoneVar','$secQVar','$secAVar','$amtVar')";
            $insert = mysqli_query($db,$query);
            if($insert){
                $correct = "Money send";
                $err7 = "";
                $nameVar = $emailVar = $phoneVar = $secQVar = $secAVar = $amtVar = "";
            }else{
                $err7 =  "Error";
                $correct = "";
            }
            
        }
    }
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
<!DOCTYPE html>
<html>
    <head >
        
        <title>Bank Name</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <script src="scripts/interacscript.js"></script>
        

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
            <form method="post">
            <h3>Interac E-transfer</h3> 
            <div class = "error" id="payAm"><?php echo $err7; ?></div><br>
            <label>Checking Initial Balance:</label>
            <?php

                $idclient = $_SESSION['user']['idclient'];                
                $query = "SELECT balance,idaccount FROM account where idclient = '$idclient' and type = 'SAVINGS'";
                $result = $db->query($query);
                $row = $result->fetch_assoc();

                if($row){
                    $balanceGlobal = $row['balance'];
                    $idAccountGlobal = $row['idaccount'];
                }
            ?>
            <input type="hidden" id="tidAccount" name="tidAccount" value="<?php echo $idAccountGlobal ?>">
            <input type="hidden" id="balanceGlob" name="balanceGlob" value="<?php echo $balanceGlobal ?>">
            <input type = "text" name="balanceGlobT" title="balanceGlobT" id="balanceGlobT" value="$ <?php echo $balanceGlobal; ?>" disabled> <br><br>
            <label>Payee Name:</label>
            <input type = "text" name="payeename" title="payeename" id="payeename" value="<?php echo $nameVar ?>"> <br>
            <div class = "error" id="payN"> <?php echo $err1; ?></div><br>
            <label>Payee Email:</label>
            <input type = "text" name="payeemail" title="payeemail" id="payeeemail" value="<?php echo $emailVar ?>"> <br>
            <div class = "error" id="payE"><?php echo $err2; ?></div><br>
            <label>Payee Phone Number:</label>
            <input type = "number" name="payeenumber" title="payeenumber" id="payeenum" value="<?php echo $phoneVar ?>"> <br>
            <div class = "error" id="payPN"><?php echo $err3; ?></div><br>
            <label>Security Question:</label>
            <input type = "text" name="secQ" title="secQ" id="secQ" value="<?php echo $secQVar ?>"> <br>
            <div class = "error" id="paySQ"><?php echo $err4; ?></div><br>
            <label>Security Answer:</label>
            <input type = "text" name="secA" title="secA" id="secA" value="<?php echo $secAVar ?>"> <br>
            <div class = "error" id="paySA"><?php echo $err5; ?></div><br>
            <label>Amount:</label>

            <input type = "number" name="amount" title="amount" id="amount" value="<?php echo $amtVar ?>"> <br>
            <div class = "error" id="payAm"><?php echo $err6; ?></div><br>

            <input type = "submit" text = "Submit"  name="submit"><br>
            <div class = "greenL" id="payAm"><?php echo $correct; ?></div>
</form>
        </main>

        <footer> <h4>Call us - (563)0001111</h4>
            <h4>Reach out through Mail - WaterlooBank_customerservice@gmail.com</h4>
         <h4>Address - 151 conestoga street</h4>
         <img src="images/insta logo.png" alt="Instagram" width="25px">
         <img src="images/twitter logo.png" alt="twitter" width="45px"> 
         <img src="images/fb logo.png" alt="twitter" width="50px">
         <img src="images/linkedin logo.png" alt="twitter" width="25px"></footer>


</html>