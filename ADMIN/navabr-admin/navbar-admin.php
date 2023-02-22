<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        nav {
            display: flex;
            width: 100%;
            align-items: center;
            flex-wrap: wrap;
            padding: 5px 0;
            margin: 0;
        }


        /*texte GAZO */


        h2 a {
            text-decoration: none;
            color: rgba(148, 106, 0, 0.831);
            margin-left: 20px;
            font-size: 50px;
            -webkit-text-stroke: 1px #00000073;
            text-transform: uppercase;

        }



        /* liens de la nav */
        nav #lien-nav {
            flex: 1;
            text-align: right;
            padding-right: 30px;
        }

        nav #lien-nav #lien-style {
            display: inline-block;
            list-style: none;
            margin: 0 10px;
            margin-right: 100px;
            position: relative;
        }

        nav #lien-nav #lien-style a {
            color: #000000;
            text-decoration: none;

        }

        nav #lien-nav #lien-style a::after {
            content: '';
            width: 0;
            height: 3px;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            background: #000000;
            transition: width 0.5s;

        }

        nav #lien-nav #lien-style a:hover::after {
            width: 50%;

        }
    </style>
    <title>Document</title>
</head>

<body>

    <nav>

        <h2><a href="">GAZO</h2></a>

        <ul id="lien-nav">
            <li id="lien-style"><a href="../../CLIENT/aceuil/acceuil.php">HOME-CUSTOMER</a></li>
            <li id="lien-style"><a href="../aceuil/acceuil.php">HOME-ADMIN</a></li>
            <li id="lien-style"><a href="../liste-commande-store/liste-comm-boutique.php">List-BOUTIQUE</a></li>
            <li id="lien-style"><a href="../liste-commande-tour/liste-comm-tour.php">List-TOUR</a></li>
            <li id="lien-style"><a href="../Add produit&party/add-produit.php">Add PRODUIT</a></li>
            <li id="lien-style"><a href="../Add produit&party/add-tour.php">Add PARTY</a></li>

        </ul>


    </nav>


</body>

</html>