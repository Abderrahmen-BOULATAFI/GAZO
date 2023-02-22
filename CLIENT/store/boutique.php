<?php
require("function.php");
$Produit = afficher();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #titre-produit {
            color: rgba(148, 106, 0, 0.831);
            -webkit-text-stroke: 1px #00000073;
            font-family: "Allura";
            font-size: 50px;
            font-weight: 900;
            letter-spacing: 10px;
            padding: 0;
            margin-top: 30px;
            line-height: 1;
            box-sizing: border-box;
            margin-left: 600px;
            animation-duration: 6s;
            animation-name: slidein;


        }


        @keyframes slidein {
            from {
                margin-left: 20%;
                width: 300%;
            }

            to {
                margin-left: 600px;
                width: 100%;
            }
        }

        #autoWidth {
            display: flex;
            margin: 10px 90px;
            flex-wrap: wrap;
            list-style: none;
        }

        #autoWidth #produit-style {
            flex-basis: calc(33.33% - 20px);
            margin: 0 10px 20px 0;
            box-sizing: border-box;
        }

        #autoWidth #produit-style:nth-child(3n+1) {
            margin-left: 0;
        }

        #autoWidth li.clear {
            clear: left;
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /*body {
background-color: #333;
z-index: 0;
}*/


        /*style de la page*/
        #autoWidth {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .container {
            background-color: #33333317;
            /*margin-left: 30px;
width: 100%;*/
            margin-top: 100px;
            display: flex;
            height: auto;
        }

        .carte {
            width: 350px;
            height: 400px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 5px 10px 12px black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            margin: 20px 10px;
        }

        .modele {
            height: 250px;
            max-height: 100%;
            max-width: 250px;
        }

        .detail {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
        }


        h3 {
            color: #cccccc;
            text-align: 20px;
            margin-top: 5px;
            margin-right: -120px;

        }

        .prix {
            margin-right: -175px;
            color: #cccccc;
            text-align: 20px;

        }




        .name-produit {
            color: rgb(255, 255, 255);
            text-shadow: 1px 2px 2px rgb(128, 112, 26);
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-top: 20px;
        }

        .btn-acheter {
            background-color: rgb(128, 112, 26);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-bottom: 10px;
        }

        .btn-acheter:hover {
            background-color: gray;
            transform: scale(1.05);
        }
    </style>
    <title>Store-GAZO</title>
</head>

<body>
    <?php

    include '../navbar-client/navbar-client.php';
    ?>
    <h1 id="titre-produit">Nos produits</h1>
    <div class="container">

        <ul id="autoWidth">
            <?php $i = 1;
            foreach ($Produit as $produit) { ?>
                <li id="produit-style">
                    <div class="carte">
                        <p class="name-produit"><?= $produit->nom ?></p>
                        <img src="<?= $produit->image ?>" class="modele">
                        <div class="detail">
                            <h4 class="prix">Prix : <?= $produit->prix ?>$</h4>
                            <h3 class="description"><?= $produit->description ?></h3>
                        </div>
                        <a href="./paiment.php?produit=<?= $produit->nom ?>"><button type="submit" class="btn-acheter">Commander</button></a>
                    </div>
                </li>
                <?php if ($i % 3 == 0 && $i != count($Produit)) { ?>
                    <li class="clear"></li>
                <?php } ?>
                <?php $i++; ?>
            <?php } ?>
        </ul>
    </div>





</html>