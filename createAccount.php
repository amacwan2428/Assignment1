<?php 
session_start();
include('includes/db_connection.php');
$password = $name = $email = $phone = $adress = $username = "";
$balanceGlobal = 0;
$idAccountGlobal = 0;

$err1 = $err2 = $err3 = $err4 = $err5 = $err6 = $err7 = $correct = ""; 
if(isset($_POST['return'])){
    header("Location:  index.php");
}

if(isset($_POST['submit'])){
        
    

    if(empty($_POST['name'])){
        $err1 = 'enter name';
    }else{
        $err1 = "";
        $name = $_POST['name'];
    }
    if(empty($_POST['email'])){
        $err2 = 'enter email';
    }else{
        $err2 = "";
        $email = $_POST['email'];
    }
    if(empty($_POST['phone'])){
        $err3 = 'enter phone number';
    }else{
        $err3 = "";
        $phone = $_POST['phone'];
    }
    if(empty($_POST['adress'])){
        $err4 = 'enter adress';
    }else{
        $err4 = "";
        $adress= $_POST['adress'];
    }
    if(empty($_POST['username'])){
        $err5 = 'enter username';
    }else{
        $err5 = "";
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        $err6 = 'enter password';
    }else{
        $err6 = "";
        $password = $_POST['password'];
    }

    $amt = $_POST['balanceGlob'];


    if ($err1 == "" && $err2 == "" && $err3 == "" && $err4 == "" && $err5 == "" && $err6 == ""){
        
        $err7 = "";                      
    
        $tidAccount = $_POST['tidAccount'];
        
        
        $query = "insert into client values(0,'$username','$password','$name','$adress','$phone','$email')";
        $insert = mysqli_query($db,$query);
        if($insert){            
            $password = $name = $email = $phone = $adress = $username = "";
            header("Location:  index.php");
        }else{
            $err7 =  "Error";
            $correct = "";
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

        <main>
            <form method="post">
            <h3>Create Account</h3> 
            <div class = "error" id="payAm"><?php echo $err7; ?></div><br>            
            
            <input type="hidden" id="tidAccount" name="tidAccount" value="<?php echo $idAccountGlobal ?>">
            <input type="hidden" id="balanceGlob" name="balanceGlob" value="<?php echo $balanceGlobal ?>">
            
            <label>Name:</label>
            <input type = "text" name="name" title="name" id="name" value="<?php echo $name ?>"> <br>
            <div class = "error" id="payN"> <?php echo $err1; ?></div><br>
            <label>Email:</label>
            <input type = "text" name="email" title="email" id="email" value="<?php echo $email ?>"> <br>
            <div class = "error" id="payE"><?php echo $err2; ?></div><br>
            <label>phone:</label>
            <input type = "number" name="phone" title="phone" id="phone" value="<?php echo $phone ?>"> <br>
            <div class = "error" id="payPN"><?php echo $err3; ?></div><br>
            <label>Adress :</label>
            <input type = "text" name="adress" title="adress" id="adress" value="<?php echo $adress ?>"> <br>
            <div class = "error" id="paySQ"><?php echo $err4; ?></div><br>            
            <label>user name:</label>
            <input type = "text" name="username" title="username" id="username" value="<?php echo $username ?>"> <br>
            <div class = "error" id="payAm"><?php echo $err5; ?></div><br>

            <label>password:</label>

            <input type = "password" name="password" title="password" id="password" value="<?php echo $password ?>"> <br>
            <div class = "error" id="payAm"><?php echo $err6; ?></div><br>

            <input type = "submit" text = "Submit"  value="Create" name="submit">
            <input type = "submit" text = "Return" value="return" name="return"><br>
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