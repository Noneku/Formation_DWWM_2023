<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Plan de classe</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php session_start(); ?>
    <h1>Placement des stagiaires : </h1>

    <!-- Place_1 -->
    <div class="Groupes">
        <div class="Groupe1_2">
            <div class="Groupe_1">
            <p><u>Groupe 1 :</u></p>
                <div class="places_1_1">
                    <table>
                        <tr>
                            <td>Place 1 : </td>
                            <td><?php echo $_SESSION['$assoStudents']['place_1']; ?></td>
                        </tr>
                        <!-- Place_2 -->
                        <tr>
                            <td>Place 2 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_2']; ?></td>
                        </tr>
                    </table>
                </div>
                <!-- Place_3 -->
                <div class="places_1_2">
                    <table>
                        <tr>
                            <td>Place 3 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_3']; ?></td>
                        </tr>
                        <!-- Place_4 -->
                        <tr>
                            <td>Place 4 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_4']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>



            <!-- Place_5 -->
            <div class="Groupe_2">
                <p><u>Groupe 2 :</u></p>
                <div class="places_2_1">
                    <table>
                        <tr>
                            <td>Place 5 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_5']; ?></td>
                        </tr>
                        <!-- Place_6 -->
                        <tr>
                            <td>Place 6 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_6']; ?></td>
                        </tr>
                        <!-- Place_7 -->
                    </table>
                </div>
                <div class="places_2_2">
                    <table>
                        <tr>
                            <td>Place 7 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_7']; ?></td>
                        </tr>
                        <!-- Place_8 -->
                        <tr>
                            <td>Place 8 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_8']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>



        <!-- Place_9 -->
        <div class="Groupe3_4">
            <div class="Groupe_3">
                <p><u>Groupe 3 :</u></p>

                <div class="places_3_1">
                    <table>
                        <tr>
                            <td>Place 9 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_9']; ?></td>
                        </tr>
                        <!-- Place_10 -->
                        <tr>
                            <td>Place 10 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_10']; ?></td>
                        </tr>
                    </table>
                </div>
                <!-- Place_11 -->
                <div class="places_3_2">
                    <table>
                        <tr>
                            <td>Place 11 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_11']; ?></td>
                        </tr>
                        <!-- Place_12 -->
                        <tr>
                            <td>Place 12 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_12']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Place_13 -->

            <div class="Groupe_4">
                <p><u>Groupe 4 :</u></p>
                <div class="places_4_1">
                    <table>
                        <tr>
                            <td>Place 13 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_13']; ?></td>
                        </tr>
                        <!-- Place_14 -->
                        <tr>
                            <td>Place 14 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_14']; ?></td>
                        </tr>
                    </table>
                </div>
                <!-- Place_15 -->
                <div class="places_4_2">
                    <table>
                        <tr>
                            <td>Place 15 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_15']; ?></td>
                        </tr>
                        <!-- Place_16 -->
                        <tr>
                            <td>Place 16 :</td>
                            <td><?php echo $_SESSION['$assoStudents']['place_16']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <div class="Boutons">
        <form action="../Ctrl/execute_saveTofile.php" method="get">
            <input type="submit" value="Mélanger les places">
        </form>
        <form action="index.html" method="get">
            <input type="submit" value="Retour">
        </form>
    </div>
</body>

</html>