document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // prevent the form from submitting normally
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username === "hatim" && password === "agentDOW") {
    window.location.href = "gerer.html"; // redirect to the dashboard page
    } else {
    alert("Nom ou Mot de passe est invalide."); // display an error message
    }
  });