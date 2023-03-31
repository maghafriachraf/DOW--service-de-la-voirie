// Get the Problème dropdown element
const problemeDropdown = document.getElementById("probleme");

// Get the Autre input field element
const autreInput = document.getElementById("autre");

// Add an event listener to the Problème dropdown
problemeDropdown.addEventListener("change", function() {
  if (problemeDropdown.value === "autre") {
    // If the user selects "Autre", show the Autre input field
    autreInput.style.display = "block";
  } else {
    // Otherwise, hide the Autre input field
    autreInput.style.display = "none";
  }
});


