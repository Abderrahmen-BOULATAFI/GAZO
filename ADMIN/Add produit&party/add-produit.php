<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "gazo";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$basededonnees", $utilisateur, $motdepasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $image = $_POST['image'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];


    $requete = "INSERT INTO boutique (image, nom, prix, description) VALUES (:image, :nom, :prix, :description)";
    $add = $connexion->prepare($requete);
    $add->bindParam(':image', $image);
    $add->bindParam(':nom', $nom);
    $add->bindParam(':prix', $prix);
    $add->bindParam(':description', $description);

    if ($add->execute()) {
        echo "Le produit a été ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du produit : " . $add->errorInfo()[2];
    }

    $connexion = null;
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

        /*  */
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
            margin-bottom: 10px;
            color: gray;
            text-transform: inherit;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        label {
            font-size: 1.2em;
            margin-bottom: 10px;

        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            font-size: 1.2em;
            width: 100%;
            border-radius: 5px;
            border: 1px solid gray;
            transition: all 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
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
    <title>Add-Produit-GAZO-ADMIN</title>
</head>

<body>

    <?php
    // inclusion de la navbar
    include '../navabr-admin/navbar-admin.php';
    ?>

    <div class="container">
        <h1>Ajouter un produit</h1>
        <p class="soustitre">Veuillez remplir tout les case pour ajouter le produit avec toute les information</p>
        <form action="" method="post">
            <div class="form-group">
                <label for="nom">Titre :</label>
                <input type="text" id="nom" name="nom" placeholder="Titre de produit ..." required>
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="text" id="image" name="image" placeholder="Collez le liens de l'image.." required>
            </div>
            <div class="form-group">
                <label for="prix">Prix :</label>
                <input type="number" id="prix" name="prix" placeholder="Prix de produit" required>
            </div>
            <div class="form-group">
                <label for="description">Desscription :</label>
                <input type="text" id="description" name="description" placeholder="Description sur le produit" required>
            </div>

            <button type="submit" name="valider">ajouter le produit</button>
            <div class="sign">
                <p class="paragraphe-creationdecompte">Vous voulez voir la page store client ? &nbsp; </p>
                <a class="sigup" href="../../CLIENT/store/boutique.php"> appuiez ici.</a>
            </div>
        </form>
    </div>
</body>

</html>