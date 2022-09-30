document.addEventListener('DOMContentLoaded', function() {
  var today = new Date().getHours();
  if (today >= 12 && today <= 18) {
    document.getElementById("messageLogin").innerHTML = "Good Afternoon"
  } 
  if (today >=19 && today <= 24) {
    document.getElementById("messageLogin").innerHTML = "Good Evening"
  } 
  if (today >=1 && today <= 11) {
    document.getElementById("messageLogin").innerHTML = "Good Morning"
  } 
});

function loginclick(){

  
  const user = document.getElementById('username');
  const password = document.getElementById('password'); 

  if (user.value.length === 0 || password.value.length === 0) {
    document.getElementById("loginResult").innerHTML = "Values Incorrects";
  } else {
    window.location.href = "accountSummary.html";
  }
}