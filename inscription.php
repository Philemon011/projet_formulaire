<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de Création de Compte</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="container">
    <div class="col-md-6">
      <h2 class="mb-4">Création de Compte</h2>
      <form method="POST" id="signupForm" onsubmit="return validateForm()" action="enregister.php">
        <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom" required>
          <small id="nomError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" name="prenom" required>
          <small id="prenomError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="date">Date de naissance :</label>
          <input type="date" class="form-control" id="date" name="date" required>
          <small id="dateError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email" required>
          <small id="emailError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="numero">Numéro de téléphone :</label>
          <input type="tel" name="numero" class="form-control" id="numero" placeholder="Entrez votre numéro de téléphone" required>
          <small id="numeroError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="adresse">Adresse :</label>
          <textarea name="adresse" class="form-control" id="adresse" rows="3" placeholder="Entrez votre adresse" required></textarea>
          <small id="adresseError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="fonction">Fonction :</label>
          <select name="fonction" class="form-control" id="fonction" required>
            <option value="">Sélectionnez une fonction</option>
            <option value="finance">Finance</option>
            <option value="Management">Management</option>
            <option value="Comptabilité">Comptabilité</option>
            <option value="Système Informatique">Système Informatique</option>
            <option value="Commercial">Commercial</option>
          </select>
          <small id="fonctionError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe :</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
          <small id="passwordError" class="text-danger"></small>
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirmez le Mot de passe :</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Entrez le mot de passe" required>
          <small id="confirmPasswordError" class="text-danger"></small>
        </div>
        <div>
          <a href="login.php">Avez-vous un compte, connectez-vous ici</a>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="envoyer">Créer un compte</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function validateForm() {
      var nom = document.getElementById('nom').value.trim();
      var prenom = document.getElementById('prenom').value.trim();
      var date = document.getElementById('date').value.trim();
      var email = document.getElementById('email').value.trim();
      var numero = document.getElementById('numero').value.trim();
      var adresse = document.getElementById('adresse').value.trim();
      var fonction = document.getElementById('fonction').value.trim();
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirmPassword').value;





      var nomError = document.getElementById('nomError');
      var prenomError = document.getElementById('prenomError');
      var dateError = document.getElementById('dateError');
      var emailError = document.getElementById('emailError');
      var numeroError = document.getElementById('numeroError');
      var adresseError = document.getElementById('adresseError');
      var fonctionError = document.getElementById('fonctionError');
      var passwordError = document.getElementById('passwordError');
      var confirmPasswordError = document.getElementById('confirmPasswordError');

      var dateNaissance = new Date(document.getElementById('date').value); // Récupère la date de naissance du champ de date
      var maintenant = new Date(); // Date actuelle

      // Calcul de l'âge en soustrayant l'année de naissance de l'année actuelle
      var age = maintenant.getFullYear() - dateNaissance.getFullYear();


      // regex numéro bénin 
      var regexNumeroBenin = /^(?:9[023456789]|6[0123456]|2[0123]|4[012])[0-9]{6}$/;



      // Vérification simple du nom et prénom
      if (nom === "") {
        nomError.innerText = "Veuillez entrer votre nom.";
        return false;
      } else if (/[^a-zA-Z]/.test(nom)) {
        nomError.innerText = "Le nom ne doit contenir que des lettres alphabétiques.";
        return false;
      } else {
        nomError.innerText = "";
      }

      if (prenom === "") {
        prenomError.innerText = "Veuillez entrer votre prénom.";
        return false;
      } else if (/[^a-zA-Z]/.test(prenom)) {
        prenomError.innerText = "Le prénom ne doit contenir que des lettres alphabétiques.";
        return false;
      } else {
        prenomError.innerText = "";
      }

      // Vérification de la date de naissance
      // Vérification si l'âge est entre 18 et 30 ans
      if (age < 18) {
        dateError.textContent = "Vous êtes trop jeune pour vous inscrire.";
        return false;
      } else if (age >= 30) {
        dateError.textContent = "Vous êtes trop âgé.";
        return false;
      } else {
        dateError.textContent = "";
      }

      // Vérification simple de l'email
      if (!/\S+@\S+\.\S+/.test(email)) {
        emailError.innerText = "Veuillez entrer une adresse email valide.";
        return false;
      } else {
        emailError.innerText = "";
      }

      // Vérification simple du numéro de téléphone
      // Vérification si le numéro correspond au format du Bénin
      if (!regexNumeroBenin.test(numero)) {
        numeroError.innerText = "Veuillez entrer un numéro de téléphone valide du Bénin.";
        return false;
      } else {
        numeroError.innerText = "";
      }

      // Vérification simple de l'adresse
      var regexAdresse = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
      if (adresse === "") {
        adresseError.innerText = "Veuillez entrer votre adresse.";
        return false;
      } else if (regexAdresse.test(adresse)) {
        adresseError.innerText = "Veuillez entrer un adresse valide.";
        return false;
      } else {
        adresseError.innerText = "";
      }

      // Vérification de la fonction sélectionnée
      if (fonction === "") {
        fonctionError.innerText = "Veuillez sélectionner votre fonction.";
        return false;
      } else {
        fonctionError.innerText = "";
      }

      // vérifier le champ mot de passe
      // Vérifier la longueur minimale
      if (password.length < 8) {
        passwordError.innerText = "Le mot de passe doit contenir au moins 8 caractères.";
        return false;
      }
      // Vérifier la présence de caractères spéciaux
      var specialCharacters = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
      if (!specialCharacters.test(password)) {
        passwordError.innerText = "Le mot de passe doit contenir au moins un caractère spécial.";
        return false;
      }
      // Vérifier la présence de lettres majuscules
      var uppercaseLetters = /[A-Z]/;
      if (!uppercaseLetters.test(password)) {
        passwordError.innerText = "Le mot de passe doit contenir au moins une lettre majuscule.";
        return false;
      }
      // Vérifier la présence de lettres minuscules
      var lowercaseLetters = /[a-z]/;
      if (!lowercaseLetters.test(password)) {
        passwordError.innerText = "Le mot de passe doit contenir au moins une lettre minuscule.";
        return false;
      }
      // Vérifier la présence de chiffres
      var numbers = /[0-9]/;
      if (!numbers.test(password)) {
        passwordError.innerText = "Le mot de passe doit contenir au moins un chiffre.";
        return false;
      }

      // vérification de la conformité entre les 2 champs, mot de passe et confirmer le mot de pass
      if (document.getElementById('password').value != document.getElementById('confirmPassword').value) {
        confirmPasswordError.innerText = "Les mots de passes ne sont pas identiques";
        return false;
      }

      // Si toutes les vérifications passent, retourne true pour permettre l'envoi du formulaire
      return true;
    }
  </script>
</body>

</html>