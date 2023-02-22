<?php
// Connecter à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "neptun";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        echo 'Les mots de passe ne correspondent pas.';
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);


        // Préparation de la requête
        $sql = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";

        // Exécution de la requête
        if (mysqli_query($conn, $sql)) {
            echo "Enregistrement réussi.";
        } else {
            echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Fermeture de la connexion
        mysqli_close($conn);
    }
}
// Vérifier si le formulaire a été soumis
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Préparer la requête SQL pour récupérer l'utilisateur avec cet email
    $query = "SELECT id, username, password FROM signup WHERE email = ?";
    
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
    mysqli_stmt_fetch($stmt);
    
    // Vérifier si l'utilisateur a été trouvé et si le mot de passe est correct
    if (mysqli_stmt_num_rows($stmt) == 1 && password_verify($password, $hashed_password)) {
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $id;
        $_SESSION["username"] = $username;
        
        header("location: welcome.php");
    } else {
        // Afficher un message d'erreur si le mot de passe est incorrect
        echo "Adresse e-mail ou mot de passe incorrect";
    }
    
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>*/
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

        /*style de la nav*/


        /* signup */
        .container {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
            width: 400px;
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



        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            font-size: 1.2em;
            width: 100%;
            border-radius: 5px;
            border: 1px solid gray;
            transition: all 0.3s ease-in-out;
        }

        input[type="text"]:focus,
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
    <title>SIGNUP-GAZO</title>
</head>

<body>
    <?php

    include './navbar-login.php';
    ?>
    <div class="container">
        <h1>INSCRIPTION</h1>
        <p class="soustitre">Veuillez bien saisir votre Pseudo, E-mail et Mot de passe</p>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="username">Pseudo :</label>
                <input type="text" id="username" name="username" placeholder="Votre pseudo est ..." required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" placeholder="Votre adresse e-mail " required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe " required>
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirmation du mot de passe :</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmation du mot de passe" required>
            </div>
            <a href="./login.php"><button type="submit">Créer votre compte</button></a>
            <div class="sign">
                <p class="paragraphe-creationdecompte">Vous voulez retournez vers la page de connexion ? &nbsp; </p>
                <a class="sigup" href="./login.php"> Retour.</a>
            </div>
        </form>
    </div>