<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de Connexion</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">  
</head>
<body>

<div class="container">
  <div class="col-md-6">
    <h2 class="mb-4">Connexion</h2>
    <form id="loginForm" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
        <small id="emailError" class="text-danger"></small> <!-- Message d'erreur -->
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
        <small id="passwordError" class="text-danger"></small> <!-- Message d'erreur -->
      </div>
      <div>
        <a href="inscription.php">Vous n'avez pas un compte, créez en un ici</a>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
function validateForm() {
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var emailError = document.getElementById('emailError');
  var passwordError = document.getElementById('passwordError');

  // Vérification simple de l'email 
  if (!/\S+@\S+\.\S+/.test(email)) {
    emailError.innerText ="Veuillez entrer une adresse email valide.";
    return false;
  }else {
    emailError.innerText = ""; // Efface le message d'erreur si la validation réussit
  }

  // Vérification de la longueur du mot de passe 
  if (password.length < 8) {
    passwordError.innerText = "Le mot de passe doit contenir au moins 8 caractères.";
    return false;
  } else {
    passwordError.innerText = ""; // Efface le message d'erreur si la validation réussit
  }

  return true; // Soumettre le formulaire si toutes les validations sont réussies
}
</script>
</body>
</html>
