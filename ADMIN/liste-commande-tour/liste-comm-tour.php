<?php
require('./function.php');
$Tour = afficher();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste des réservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
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
            margin-left: 480px;
            animation-duration: 5s;
            animation-name: slidein;
        }

        @keyframes slidein {
            from {
                margin-left: 380px;
                width: 100%;
            }

            to {
                margin-left: 480px;
                width: 100%;
            }
        }

        h4 {
            color: rgba(148, 106, 0, 0.831);
            -webkit-text-stroke: 1px #00000073;
            font-family: "Allura";
            font-size: 30px;
            font-weight: 900;
            letter-spacing: 10px;
            padding: 0;
            line-height: 1;
            box-sizing: border-box;
            margin-left: 780px;


        }


        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 30px;
            margin-left: 23vh;
        }

        th {
            background-color: #bebebe;
            color: rgba(148, 106, 0, 0.831);
            text-shadow: 0.3px 0.6px white;
            font-weight: bold;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        tr:hover {
            background-color: #3333334b;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .action-buttons a {
            color: #fff;
            text-decoration: none;
            border: none;
            padding: 5px 10px;
            cursor: pointer;

        }

        .action-buttons a.edit {
            background-color: #333;
            transition: background-color 0.5s ease-in-out;
            margin-right: -60px;
        }

        .action-buttons a.edit:hover {
            background-color: #047f19;
        }

        .action-buttons a.delete {
            background-color: #333;
            transition: background-color 0.5s ease-in-out;
        }

        .action-buttons a.delete:hover {
            background-color: #b40000;
        }
    </style>
</head>

<body>
    <?php
    // inclusion de la navbar
    include '../navabr-admin/navbar-admin.php';

    ?>

    <h1>Liste des réservations</h1>
    <h4>Tour</h4>
    <table>
        <thead>
            <tr>
                <th>Client</th>
                <th>Téléphone</th>
                <th>E-mail</th>
                <th>Adress</th>
                <th>club</th>
                <th>ticket</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            <?php foreach ($Tour as $tour) { ?>
                <tr>
                    <td><?= $tour->user ?></td>
                    <td><?= $tour->phone ?></td>
                    <td><?= $tour->mail ?></td>
                    <td><?= $tour->adress ?></td>
                    <td><?= $tour->nom ?></td>
                    <td><?= $tour->ticket ?></td>
                    <td class="action-buttons">
                        <a class="edit" href="#">Modifier</a>
                        <a class="delete" href="#">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>


        </tbody>
    </table>
</body>

</html>
<!--By Abderrahmen-BOULATAFI-->