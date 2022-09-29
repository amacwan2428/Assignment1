var checking_am = 5000;

function onsubmitClick(){
    var intamt = document.getElementById('amount').value;
    if(checking_am < intamt ){
          window.alert("Can't pay, does not have enough balance");
    } else {
        window.alert("Payment Successfull: " + intamt );
        
    }
}