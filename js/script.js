// Validation du formulaire de contact
document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault();

  // Récupération des valeurs du formulaire
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  // Validation basique
  if (name && email && message) {
    document.getElementById("formMessage").innerHTML = "<p style='color: green;'>Merci, " + name + "! Votre message a été envoyé.</p>";
    document.getElementById("contactForm").reset();
  } else {
    document.getElementById("formMessage").innerHTML = "<p style='color: red;'>Veuillez remplir tous les champs.</p>";
  }
});
