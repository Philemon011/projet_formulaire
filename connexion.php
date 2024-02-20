<?php
    session_start();
    require 'dbcon.php';
    
    if(isset($_POST['login'])){

    // récupération des valeurs des champs
    $email = $_POST['email'];
    $password=$_POST['password'];
    
    $select=mysqli_query($con,"SELECT * FROM utilisateurs WHERE email='$email' AND mdp='$password'");

    if (mysqli_num_rows($select) == 1) {
        // Récupérer la ligne de résultat
        $row = mysqli_fetch_assoc($select);
    
        // Assigner les données à des variables de session individuelles
        $_SESSION['Nom'] = $row['nom'];
        $_SESSION['Prenom'] = $row['prenom'];
        $_SESSION['Id'] = $row['id'];
        $_SESSION['Fonction'] = $row['fonction'];
    
        // Rediriger vers la page d'accueil pour saluer et afficher les informations
        header("Location: accueil.php");
    } else {
        // Gérer le cas où l'utilisateur n'est pas trouvé ou les informations d'identification sont incorrectes
        header("Location: login.php");
    }
}
?>

