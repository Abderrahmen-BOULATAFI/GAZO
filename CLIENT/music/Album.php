<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            color: rgb(0, 0, 0);

        }



        /***modification de la nav ***/
        .slider {
            max-width: 100vw;
            height: 130vh;
            background-color: #333;
        }




        /* liens de la nav */


        /*style de la page*/
        .page-title {
            margin-left: 70vh;
            margin-bottom: 5rem;
            color: rgba(0, 0, 0, 0.831);
            -webkit-text-stroke: 1px #ffffff2c;
            font-family: "Allura";
            font-size: 50px;
            font-weight: 900;
            text-transform: uppercase;
            animation: mouvement 4S;
            text-shadow: 0.5px 1px rgba(148, 106, 0, 0.831);

        }

        @keyframes mouvement {
            from {
                margin-left: 50%;
                width: 100%;
            }

            to {
                margin-left: 70vh;
                width: 100%;
            }

        }


        /* modification de body */
        body {
            background: rgb(255, 255, 255);
        }


        /*album*/
        /* Modification du conteneur de la page */
        .container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }


        /* modification du mot album */
        .album-header {
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 60px;
            text-shadow: 4px 2px 10px rgb(255, 200, 0);
            font-family: serif;
        }

        .album {
            display: flex;
        }

        .album .album-illustration {
            width: 20rem;
        }


        .album-content .album-release-date {
            font-size: 1.2rem;
            color: #ffffff9d;
            margin: 0;
        }

        .album-content .album-title {
            font-size: 2rem;
            margin: 0;
        }

        .album .album-content {
            flex: 1 1 auto;
            margin-left: 2rem;
        }

        .album-illustration img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 2px 3px 5px 7px#ffffff44;

        }

        .album-content>a {
            text-decoration: none;
            color: rgba(148, 106, 0, 0.831);
            -webkit-text-stroke: 1px #00000073;
            letter-spacing: 3px;

        }

        /*.playlist--lecture {
                background-color: #FA2C49;
                border: none;
                border-radius: 2px;
                height: 20px;
            }
            
            .playlist--Order-aléatoire {
                background-color: #FA2C49;
                border: none;
                border-radius: 2px;
                height: 20px;
            
            }*/

        /*style de ul */
        .album .album-music-list {
            list-style: none;
            padding-left: 0;
            margin-left: 10px;
            background-color: rgb(254, 254, 254);

            width: 700px;

            box-shadow: 0.5px 1.5px 2.5px 3.5px rgba(0, 0, 0, 0.376);


        }



        .album-music-list>li:nth-child(odd) {
            background-color: #DDD;
            width: 700px;

        }

        .album-music-list>li {
            color: white;
        }

        .album-music-list>li>a {
            display: block;
            text-decoration: none;
            color: inherit;
            padding: 10px;
            box-shadow: goldenrod;
            border-radius: 20px;
        }

        /*la couleur de text de spane*/
        span {
            color: black;
        }



        /*position de time  de 1er album*/
        .time-button {
            margin-left: 265px;
        }

        .time-butto {
            margin-left: 262px;
        }

        .time-butt {
            margin-left: 329px;
        }

        .time-but {
            margin-left: 356px;
        }

        .time-bu {
            margin-left: 382px;
        }

        /*position de time  de 2em album*/
        .time-music {
            margin-left: 394px;
        }

        .time-musi {
            margin-left: 341px;
        }

        .time-mus {
            margin-left: 363px;
        }

        .time-mu {
            margin-left: 272px;
        }

        .time-m {
            margin-left: 370px;
        }
    </style>
    <title>Album-GAZO</title>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Shroomeez</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style-albume.css">
    </head>

    <body>
        <div class="slider">
            <?php

            include '../navbar-client/navbar-client.php';
            ?>

            <h1 class="page-title">rejoignez le mouvement</h1>


            <div class="container">


                <div class="album">
                    <div class="album-illustration">
                        <a href="">
                            <img src="../image/gazo2.jpg" alt="">
                        </a>
                    </div>
                    <div class="album-content">
                        <a href="">
                            <h2 class="album-title">DRILL FR</h2>
                            <h4 class="album-release-date">Album 2021</h4>
                        </a>

                        <!--<button class="playlist--lecture"><span>&#9658;</span>Lecture</button>
                        <button class="playlist--Order-aléatoire">Ordre aléatoire</button>-->
                        <ul class="album-music-list">
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>KASSAV </span>
                                    <span class="nom-artiste">(Feat Tiakola)</span>
                                    <span class="time-button">3:30</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>TCHIN 2X</span>
                                    <span class="nom-artiste">(Feat Ninho)</span>
                                    <span class="time-butto">3:43</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>HAINE&SEX</span>
                                    <span class="time-butt">3:21</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>EUPHON</span>
                                    <span class="time-but">3:21</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>A$AP</span>
                                    <span class="time-bu">3:25</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">


                <div class="album">
                    <div class="album-illustration">
                        <a href="">
                            <img src="../image/gazo1.jpg" alt="">
                        </a>
                    </div>
                    <div class="album-content">
                        <a href="">
                            <h2 class="album-title">KM</h2>
                            <h4 class="album-release-date">Album 2022</h4>
                        </a>

                        <!--<button class="playlist--lecture"><span>&#9658;</span>Lecture</button>
                        <button class="playlist--Order-aléatoire">Ordre aléatoire</button>-->
                        <ul class="album-music-list">
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span> DIE</span>
                                    <span class="time-music">4:00</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>CELINE 3X</span>
                                    <span class="time-musi">2:38</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>RAPPEL</span>
                                    <span class="time-mus">3:37</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>BODIES</span>
                                    <span class="nom-artiste">(Feat Damso)</span>
                                    <span class="time-mu">2:46</span>
                                </a>
                            </li>
                            <li>
                                <a class="music-item" href="">
                                    <span class="play-button">&#9658;</span>
                                    <span>BECTE</span>
                                    <span class="time-m">2:18</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


    </body>


    </html>
</body>

</html>