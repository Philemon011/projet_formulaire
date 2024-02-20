<?php
    session_start();
    require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
  <div class="jumbotron mt-5">
    <h1 class="display-4">Bonjour <?php echo $_SESSION['Nom'] ." ".$_SESSION['Prenom'] ; ?></h1>
    <p class="lead">Votre numéro est le <strong><?php echo $_SESSION['Id'];?></strong> et vous êtes dans le département de <strong><?php echo $_SESSION['Fonction'];?></strong></p>
    <br>
    <br>
    <a href="deconnexion.php"><button class="btn btn-primary" name="login">Déconnexion</button></a>
  </div>
</div>


<!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
