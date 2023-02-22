<?php
// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les valeurs du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // verification e-mail mot de passe
    if ($email == 'votre_email@example.com' && $password == 'votre_mot_de_passe') {
        // direction acceuil
        header('Location: accueil.php');
        exit();
    } else {
        // message d'erreur
        $message = 'Adresse e-mail ou mot de passe incorrect';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: lightgray;
            margin: 0;
            height: 100vh;
        }



        /* login */
        .container {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
            width: 400px;
            margin-top: 50px;
            margin-left: 600px;
        }

        h1 {
            text-align: center;
            margin: 0;
            margin-bottom: 10px;
            -webkit-text-stroke: 1px #000000;
            text-transform: uppercase;
            color: rgb(90, 82, 82);
        }

        .soustitre {
            margin: 0;
            text-align: center;
            margin-bottom: 40px;
            color: gray;
            text-transform: inherit;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        label {
            font-size: 1.2em;
            margin-bottom: 10px;

        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            font-size: 1.2em;
            width: 100%;
            border-radius: 5px;
            border: 1px solid gray;
            transition: all 0.3s ease-in-out;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            transform: translateY(-10px);
            box-shadow: 0px 0px 10px gray;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: lightgray;
            border-radius: 5px;
            border: none;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-top: 20px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: rgb(0, 0, 0);
            transform: scale(1.1);
            color: #fafafa;
        }

        .sign {
            margin-top: 20px;
            display: flex;
        }

        .paragraphe-creationdecompte {
            color: gray;
            margin-left: 10px;
            font-size: 15px;
        }

        .sigup {

            font-size: 15px;
            text-decoration: none;
            margin-top: 15px;
        }
    </style>
    <title>LOGIN-Gazo</title>
</head>

<body>


    <?php

    include './navbar-login.php';
    ?>
    <div class="container">
        <h1>Connexion</h1>
        <p class="soustitre">Veuillez bien saisir votre E-mail et Mot de passe</p>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" placeholder="Adresse e-mail" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Se connecter</button>
            <div class="sign">
                <p class="paragraphe-creationdecompte">Vous n'avez pas de compte ? &nbsp; </p>
                <a class="sigup" href="./signup.php"> Inscrivez-vous.</a>
            </div>
        </form>
    </div>




</body>

</html>