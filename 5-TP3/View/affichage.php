<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.cdnfonts.com/css/harry-potter" />
    <link rel="stylesheet" href="./affichage.css">

</head>

<?php session_start(); ?>

<body>

    <header>

        <div class="Prof">
            <h1>Professeur Moussa DUMBLEDORE</h1>
        </div>

        <div class="header">

            <form action="../Ctrl/controleur.php" method="get">
                <div class="bouton">
                    <input type="submit" value="Change de Maison" id="bouton">
                </div>
            </form>

            <nav aria-label="navigation">
                <div class="precedent">
                    <a href="../View/index.php"><input type="button" value="Sort de Poudlard" id="bouton"></a>
                </div>
            </nav>

        </div>

    </header>

    <div class="maisonGryffondor">

        <div class="bloc1">
            <div class="blocBis_g">
                <p>Eleve_1</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_1']; ?></p>
            </div>

            <div class="blocBis_g">
                <p>Eleve_2</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_2']; ?></p>
            </div>
        </div>

        <div class="bloc2">
            <div class="blocBis_g">
                <p>Eleve_3</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_3']; ?></p>
            </div>
            <div class="blocBis_g">
                <p>Eleve_4</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_4']; ?></p>
            </div>
        </div>

    </div>

    <div class="maisonSerpentard">

        <div class="bloc1">
            <div class="blocBis_s">
                <p>Eleve_5</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_5']; ?></p>
            </div>
            <div class="blocBis_s">
                <p>Eleve_6</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_6']; ?></p>
            </div>
        </div>

        <div class="bloc2">
            <div class="blocBis_s">
                <p>Eleve_7</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_7']; ?></p>
            </div>
            <div class="blocBis_s">
                <p>Eleve_8</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_8']; ?></p>
            </div>
        </div>

    </div>

    <div class="maisonSerdaigle">

        <div class="bloc1">
            <div class="blocBis_ser">
                <p>Eleve_9</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_9']; ?></p>
            </div>
            <div class="blocBis_ser">
                <p>Eleve_10</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_10']; ?></p>
            </div>
        </div>

        <div class="bloc2">
            <div class="blocBis_ser">
                <p>Eleve_11</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_11']; ?></p>
            </div>
            <div class="blocBis_ser">
                <p>Eleve_12</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_12']; ?></p>
            </div>
        </div>

    </div>

    <div class="maisonPoufsouffle">

        <div class="bloc1">
            <div class="blocBis_p">
                <p>Place_13</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_13']; ?></p>
            </div>
            <div class="blocBis_p">
                <p>Place_14</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_14']; ?></p>
            </div>
        </div>

        <div class="bloc2">
            <div class="blocBis_p">
                <p>Place_15</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_15']; ?></p>
            </div>
            <div class="blocBis_p">
                <p>Place_16</p>
                <p><?php echo $_SESSION['listPlaceStag']['Place_16']; ?></p>
            </div>
        </div>

    </div>

</body>

</html>