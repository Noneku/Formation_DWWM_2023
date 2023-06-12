<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Affichage</title>
    <link rel="stylesheet" href="./style.css">
</head>



<body>
<table class="grid-container">
<?php session_start();?>
    <!-- <caption>Placement des stagiaire ! </caption> -->

    <!-- <tr>
        <th>Place Stagiaire</th>
        <th>Nom Stagiaire</th>
    </tr> -->
    <!-- Place_1 -->
	<tbody class="grid-item"  id="groupe_1">
    <tr>
        <td>Place_1</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_1'];?></td>
    </tr>
    <!-- Place_2 -->
    <tr>
        <td>Place_2</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_2'];?></td>
    </tr>
    <!-- Place_3 -->
    <tr>
        <td>Place_3</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_3'];?></td>
    </tr>
    <!-- Place_4 -->
    <tr>
        <td>Place_4</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_4'];?></td>
    </tr>
</tbody>
    <!-- Place_5 -->
    <tbody class="grid-item"  id="groupe_2">
    <tr>
        <td>Place_5</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_5'];?></td>
    </tr>
    <!-- Place_6 -->
    <tr>
        <td>Place_6</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_6'];?></td>
    </tr>
    <!-- Place_7 -->
    <tr>
        <td>Place_7</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_7'];?></td>
    </tr>
    <!-- Place_8 -->
    <tr>
        <td>Place_8</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_8'];?></td>
    </tr>
</tbody>
    <!-- Place_9 -->
    <tbody class="grid-item"  id="groupe_3">
    <tr>
        <td>Place_9</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_9'];?></td>
    </tr>
    <!-- Place_10 -->
    <tr>
        <td>Place_10</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_10'];?></td>
    </tr>
    <!-- Place_11 -->
    <tr>
        <td>Place_11</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_11'];?></td>
    </tr>

    <!-- Place_12 -->
    <tr>
        <td>Place_12</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_12'];?></td>
    </tr>
</tbody>
    <!-- Place_13 -->
    <tbody class="grid-item"  id="groupe_4">
    <tr>
        <td>Place_13</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_13'];?></td>
    </tr>
    <!-- Place_14 -->
    <tr>
        <td>Place_14</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_14'];?></td>
    </tr>
    <!-- Place_15 -->
    <tr>
        <td>Place_15</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_15'];?></td>
    </tr>
    <!-- Place_16 -->
    <tr>
        <td>Place_16</td>
        <td><?php echo $_SESSION['$listPlaceStag']['Place_16'];?></td>
    </tr>
</tbody>

<section class="boutons"> 
<div id="modif">
    <!-- permet de modifier le placement des persionnes -->
    <form action="../Ctrl/execute_getStudents.php" method="get">
    <label for="example">Modifier la salle</label>

<div>
    <input type="submit" value="changer de place">
    </div>
</div>
    </form>  
    <!-- <div id="json"> -->
        <!-- permet de créer un fichier Json
    <form action="../Ctrl/execute_saveTofile.php" method="get" >
    <label for="example">créer un fichier Json</label>
    <div>
        <input type="submit" value="Créer un Json">
    </div>  -->

<!-- </form>
</div> -->
</section>
</table>
</body>
</html>