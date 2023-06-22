<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>
<div class="titre">

</div>


<body>
<body>
    <?php session_start(); ?>
    <h1>Plan de la classe</h1>
    <div class="relative">

        <div class="table1">
            <!-- Table 1 -->
            <table>
                <!-- Place_1 et 2 -->
                <tr class="color">
                    <td>Place_1 <br><?php echo $_SESSION['$student']['Place 1']; ?></td>
                    <td>Place_2 <br><?php echo $_SESSION['$student']['Place 2']; ?></td>
                </tr>
                <!-- Place_3 et 4 -->
                <tr class="color">
                    <td>Place_3 <br><?php echo $_SESSION['$student']['Place 3']; ?></td>
                    <td>Place_4 <br><?php echo $_SESSION['$student']['Place 4']; ?></td>
                </tr>
            </table>
        </div>

        <div class="table2">
            <!-- Table 2 -->
            <table>
                <!-- Place_5 et 6 -->
                <tr class="color">
                    <td>Place_5 <br><?php echo $_SESSION['$student']['Place 5']; ?></td>
                    <td>Place_6 <br><?php echo $_SESSION['$student']['Place 6']; ?></td>
                </tr>
                <!-- Place_7 et 8 -->
                <tr class="color">
                    <td>Place_7 <br><?php echo $_SESSION['$student']['Place 7']; ?></td>
                    <td>Place_8 <br><?php echo $_SESSION['$student']['Place 8']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="relative2">

        <div class="table3">
            <table>
            <tr class="color">
                <td>Place_9 <br><?php echo $_SESSION['$student']['Place 9']; ?></td>
                <td>Place_10 <br><?php echo $_SESSION['$student']['Place 10']; ?></td>
            </tr>
            <tr class="color">
                <td>Place_11<br><?php echo $_SESSION['$student']['Place 11']; ?></td>
                <td>Place_12<br><?php echo $_SESSION['$student']['Place 12']; ?></td>
            </tr>
        </table>
    </div>
    
    <div class="table4">
        <table>
            <tr class="color">
                <td>Place_13<br><?php echo $_SESSION['$student']['Place 13']; ?></td>
                <td>Place_14<br><?php echo $_SESSION['$student']['Place 14']; ?></td>
            </tr>
            <tr class="color">
                <td>Place_15<br><?php echo $_SESSION['$student']['Place 15']; ?></td>
                <td>Place_16<br><?php echo $_SESSION['$student']['Place 16']; ?></td>
            </tr>
        </table>
    </div>
</div>
    
    <form action="../Ctrl/execute_saveTofile.php" method="get">
        <div class="button">
            <input type="submit" value="MELANGE !">
        </div>
    </form>
</body>

</html>