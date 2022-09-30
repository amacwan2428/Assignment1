var checking_am = 5000;

function onsubmitClick(){
    var intamt = document.getElementById('amount').value;
    if(document.getElementById('payeename').value==""){
        document.getElementById('payN').innerHTML = "Enter payee name";
    }else{
        document.getElementById('payN').innerHTML = "";
    }
    if(document.getElementById('payeeemail').value==""){
        document.getElementById('payE').innerHTML = "Enter payee email";
    }else{
        document.getElementById('payE').innerHTML = "";
    }
    if(document.getElementById('payeename').value==""){
        document.getElementById('payN').innerHTML = "Enter payee name";
    }else{
        document.getElementById('payN').innerHTML = "";
    }
    if(document.getElementById('payeename').value==""){
        document.getElementById('payN').innerHTML = "Enter payee name";
    }else{
        document.getElementById('payN').innerHTML = "";
    }
    if(document.getElementById('payeename').value==""){
        document.getElementById('payN').innerHTML = "Enter payee name";
    }else{
        document.getElementById('payN').innerHTML = "";
    }
    if(document.getElementById('payeename').value==""){
        document.getElementById('payN').innerHTML = "Enter payee name";
    }else{
        document.getElementById('payN').innerHTML = "";
    }

    if(checking_am < intamt ){
          window.alert("Not enough balance");
    } else {
        window.alert("Money Sent: " + intamt + "CAD" );
        
    }
}