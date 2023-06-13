<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/classe.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Monomaniac+One&display=swap" rel="stylesheet" />
    <?php session_start(); 
    include_once __DIR__ . "/../Modele/functions.php";
    ?>
    <title>TP</title>
</head>

<body>
    <div class="All">
        <div class="box1">
            <div class="p1">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][0]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_1']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][1]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_2']); ?></p>
                    </div>
                </div>
            </div>
            <div class="p2">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][2]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_3']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][3]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_4']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="box2">
            <div class="p1">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][4]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_5']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][5]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_6']); ?></p>
                    </div>
                </div>
            </div>
            <div class="p2">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][6]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_7']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][7]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_8']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="../Ctrl/execute_shufflePositions.php" method="get">
        <input type="submit" value="Shuffle" />
    </form>
    <form action="../View/index.html" method="get">
        <input type="submit" value="Retour" />
    </form>

    <div class="All2">
        <div class="box3">
            <div class="p1">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][8]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_9']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][9]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_10']); ?></p>
                    </div>
                </div>
            </div>
            <div class="p2">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][10]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_11']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][11]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_12']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="box4">
            <div class="p1">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][12]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_13']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][13]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_14']); ?></p>
                    </div>
                </div>
            </div>
            <div class="p2">
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][14]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_15']); ?></p>
                    </div>
                </div>
                <div class="t1">
                    <p><?php echo ($_SESSION['$place'][15]); ?></p>
                    <div class="t2">
                        <p><?php echo ($_SESSION['$studentList']['Place_16']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- AAAAAAAAAAA -->