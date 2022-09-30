var checking_am = 5000;
var e1 = e2 = e3 = e4 = e5 = e6 = 0; 
function onsubmitClick(){
    var intamt = document.getElementById('amount').value;
    if(document.getElementById('payeename').value==""){
        document.getElementById('payN').innerHTML = "Enter payee name";
        payN.style.color = "red";
        payN.style.fontSize = "12px";
        payN.style.fontWeight = "bold";
        e1 = 1;
    }else{
        document.getElementById('payN').innerHTML = "";
        e1 = 0;
    }
    if(document.getElementById('payeeemail').value==""){
        document.getElementById('payE').innerHTML = "Enter payee email";
        e2 = 1;
        payE.style.color = "red";
        payE.style.fontSize = "12px";
        payE.style.fontWeight = "bold";
    }else{
        document.getElementById('payE').innerHTML = "";
        e2 = 0;
    }
    if(document.getElementById('payeenum').value==""){
        document.getElementById('payPN').innerHTML = "Enter payee number";
        e3 = 1;
        payPN.style.color = "red";
        payPN.style.fontSize = "12px";
        payPN.style.fontWeight = "bold";
    }else{
        document.getElementById('payPN').innerHTML = "";
        e3 = 0;
    }
    if(document.getElementById('secQ').value==""){
        document.getElementById('paySQ').innerHTML = "Enter security question";
        e4 = 1;
        paySQ.style.color = "red";
        paySQ.style.fontSize = "12px";
        paySQ.style.fontWeight = "bold";
    }else{
        document.getElementById('paySQ').innerHTML = "";
        e4 = 0;
    }
    if(document.getElementById('secA').value==""){
        document.getElementById('paySA').innerHTML = "Enter security answer";
        e5 = 1;
        paySA.style.color = "red";
        paySA.style.fontSize = "12px";
        paySA.style.fontWeight = "bold";
    }else{
        document.getElementById('paySA').innerHTML = "";
        e5 = 0;
    }
    if(document.getElementById('amount').value==""){
        document.getElementById('payAm').innerHTML = "Enter amount";
        e6 = 1;
        payAm.style.color = "red";
        payAm.style.fontSize = "12px";
        payAm.style.fontWeight = "bold";
    }else{
        document.getElementById('payAm').innerHTML = "";
        e6 = 0;
    }
    if(e1 == 0 && e1 == 0 && e1 == 0 && e1 == 0 && e1 == 0 && e1 == 0 ){
        if(checking_am < intamt ){
            window.alert("Not enough balance");
      } else {
          window.alert("Money Sent: " + intamt + "CAD" );
      
    }
        
    }
}