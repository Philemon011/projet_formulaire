<?php
    session_start();
    require 'dbcon.php';
    
    if(isset($_POST['login'])){

    // récupération des valeurs des champs
    $email = $_POST['email'];
    $password=$_POST['password'];
    
    $select=mysqli_query($con,"SELECT * FROM utilisateurs WHERE email='$email' AND mdp='$password'");
    $row=mysqli_fetch_assoc($select);

    if (is_array($row)) {
      $_SESSION["Email"]=$row['email'];
      header("Location:acceuil.php");
    }else {
        header("Location:login.php");
    }
}
?>

