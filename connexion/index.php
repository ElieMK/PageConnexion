<?php
            if(isset($_POST['submit'])){

            
                // include 'include/database.php';
                $db=new PDO('mysql:host=localhost;dbname=connexion', 'root', '');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $password=$_POST['password'];
                $email=$_POST['email'];
                //
                //ENVOI INFORMATIONS DANS LA BD
                $q="INSERT INTO `users`(`Email`, `password`) VALUES ('$email','$password' )";
               $db->exec($q);

                }
        ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="./styles/styles.css">
        <script src="https://kit.fontawesome.com/1ab6e0644b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST" action="">
            <h1>Se connecter</h1>
            <div class="social-media">
                <a href="https://accounts.google.com/" target="_self" rel="noopener noreferrer"><p><i class="fa-brands fa-google"></i></p></a>
                <a href="https://www.facebook.com/" target="_self" rel="noopener noreferrer"><p><i class="fa-brands fa-facebook"></i></p></a>
                <a href="https://www.instagram.com/" target="_self" rel="noopener noreferrer"><p><i class="fa-brands fa-instagram"></i></p></a>
                <a href="https://twitter.com/i/flow/login"target="_self" rel="noopener noreferrer" ><p><i class="fa-brands fa-twitter"></i></p></a>
            </div>
            <p class="email">ou utiliser mon adresse e-mail :</p>
            <div class="inputs">
                <input type="email" placeholder="Adresse e-mail" name="email">
                <input type="password" placeholder="Mot de passe" name="password">
            </div>
            <div class="inscription">Je n'ai pas de compte. <a href="inscription.php" target="_self">Je m'en crée un.</a></div>
            <div align="center">
                <button type="submit" name="submit"><span>Se connecter</span> </button>
            </div>
        </form>
    </body>
</html>