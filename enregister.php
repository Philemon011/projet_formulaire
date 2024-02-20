<?php
if (isset($_POST['envoyer'])) {

    //connexion à la base de donnée
    require 'dbcon.php';

    // récupération des valeurs des champs
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $adresse = $_POST['adresse'];
    $fonction = $_POST['fonction'];
    $password = $_POST['password'];

    // code d'insertion dans la base de donnée
    $query="INSERT INTO utilisateurs (nom,prenom,date,email,numero,adresse,fonction,mdp) VALUES ('$nom','$prenom','$date','$email','$numero','$adresse','$fonction','$password')";
    $query_run=mysqli_query($con,$query);
        if ($query_run) {
            header("Location: login.php");
        }
        else {
            echo 'Erreur : Utiisateur non enrédistré';
        }
    
    
}

?>