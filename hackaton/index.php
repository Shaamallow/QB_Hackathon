<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="PhoenixDevt" />
    <meta name="keywords" content="plugins phoenixdevt development spigot minecraft" />
    <meta name="description" content="Plugins from PhoenixDevt" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodix | SiLocation</title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Encode+Sans|PT+Sans|Ubuntu">

    <script src="js/jquery-3.6.1.js" type="text/javascript"></script>
    <script src="js/lettering.js" type="text/javascript"></script>
</head>

<body>

    <div class="center">
        <script src="js/index.js" type="text/javascript"></script>
        <!-- <div class="logo">
            <h1>SiLocation</h1>
        </div> -->

        <div id="logo_wrapper">
            <link rel="stylesheet" href="css/logo.css">
            <script src="js/logo.js" type="text/javascript"></script>
            <div class="badge">
                <h1>SiLocation</h1>
            </div>
        </div>

        <div class="row_demo">
            <div class="par_header">Demonstration</div>
        </div>

        <div class="row who_are_we">
            <div class="par_header">Qui sommes-nous?</div>
            <div class="row_container">
                <div class="block block_left">
                    <img class="image" src="res/agric.png" alt="agriculture">
                </div>
                <div class="block block_right">
                    Nous sommes une start up moderne oeuvrant afin de réduire drastiquement la fin dans le monde
                    en agissant par l'angle du stockage par les silos.
                    <br><br>
                    Nos outils à la pointe de la technologie et encore en constante évolution nous permettent
                    d'optimiser le placement des silos des producteurs afin d'assurer un stockage efficace ainsi
                    qu'un acheminement des produits agricoles économe en énergie.
                    <br><br>
                    Découvrez Foodix, le futur du stockage par silos !
                </div>
            </div>
            <div class="gradientback"></div>
        </div>



        <div class="row class_img">
            <div class="par_header">Classification d'images</div>
            <div class="row_container">
                <div class="block block_right">

                    <link rel="stylesheet" href="css/drag.css" />
                    <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                        <div id="drag_upload_file">
                            <p>Déposer votre fichier ou</p>
                            <p><input type="button" value="Téléverser" onclick="file_explorer();" /></p>
                            <input type="file" id="selectfile" />
                        </div>
                    </div>
                    <div class="img-content"></div>
                    <script src="js/upload_simple.js"></script>


                </div>
                <div class="block block_left">
                    Nous voulons détecter les zones dans le monde dépourvues de silos afin d'en
                    déterminer un placement optimal. Pour cela, nous vous proposons de la classification
                    d'images satellite par intelligence artificielle.
                    <br><br>
                    Il vous suffit de déposer une image satellite dans le cadre à droite et l'IA vous
                    indiquera si elle détecte un silo sur cette image.
                </div>
            </div>
            <div class="gradientback"></div>
        </div>
    </div>

</body>

</html>