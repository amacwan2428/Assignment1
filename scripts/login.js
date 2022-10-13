document.addEventListener('DOMContentLoaded', function() {
  var today = new Date().getHours();
  if (today >= 12 && today <= 14) {
    document.getElementById("messageLogin").innerHTML = "Good Afternoon"
  } 
  if (today >=15 || today <= 2) {
    document.getElementById("messageLogin").innerHTML = "Good Evening"
  } 
  if (today >=3 && today <= 11) {
    document.getElementById("messageLogin").innerHTML = "Good Morning"
  } 
});
