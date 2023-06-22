<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Affichage</title> 
    <link rel="stylesheet" href="./style.css">

</head>


<body>
<table class= "grid-container">
<?php session_start();




?>
    <!--caption>Placement des stagiaires ! </caption>

    <tr>
        <th>Place Stagiaire</th>
        <th>Nom Stagiaire</th>
    </tr> -->
    <!-- Place_1 -->
    <tbody class= "grid-item" id="groupe_1">
	<tr>
        <td>Place_1</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_1'];?></td>
    </tr>
    <!-- Place_2 -->
    <tr>
        <td>Place_2</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_2'];?></td>
    </tr>
    <!-- Place_3 -->
    <tr>
        <td>Place_3</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_3'];?></td>
    </tr>
    <!-- Place_4 -->
    <tr>
        <td>Place_4</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_4'];?></td>
    </tr>
    </tbody>
    <!-- Place_5 -->
    <tbody class= "grid-item" id="groupe_2">
    <tr>
        <td>Place_5</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_5'];?></td>
    </tr>
    <!-- Place_6 -->
    <tr>
        <td>Place_6</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_6'];?></td>
    </tr>
    <!-- Place_7 -->
    <tr>
        <td>Place_7</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_7'];?></td>
    </tr>
    <!-- Place_8 -->
    <tr>
        <td>Place_8</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_8'];?></td>
    </tr>
    </tbody>
    <!-- Place_9 -->
    <tbody class= "grid-item" id="groupe_3">
    <tr>
        <td>Place_9</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_9'];?></td>
    </tr>
    <!-- Place_10 -->
    <tr>
        <td>Place_10</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_10'];?></td>
    </tr>
    <!-- Place_11 -->
    <tr>
        <td>Place_11</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_11'];?></td>
    </tr>
    <!-- Place_12 -->
    <tr>
        <td>Place_12</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_12'];?></td>
    </tr>
    </tbody>
    <!-- Place_13 -->
    <tbody class= "grid-item" id="groupe_4">
    <tr>
        <td>Place_13</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_13'];?></td>
    </tr>
    <!-- Place_14 -->
    <tr>
        <td>Place_14</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_14'];?></td>
    </tr>
    <!-- Place_15 -->
    <tr>
        <td>Place_15</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_15'];?></td>
    <!-- Place_16 -->
    <tr>
        <td>Place_16</td>
        <td><?php echo $_SESSION['$listPlaceStag']['place_16'];?></td>
    </tr>
</tbody>
<section class="boutons">
    <div>
        <form action="../Ctrl/execute_getStudents.php" method="get" >

        <label for="example">Modifier la salle</label>

        <div id="modif">
            <input type="submit" value="Changer de place">
        </div>
</div>
</form>
<!-- <div>
    <form action= "../Ctrl/execute_saveToFile.php" method="get">  
        
    <label for= "example">Créer un fichier Json</label>

    <div id="json">
        <input type="submit" value="Créer un Json">
    </div>

    </form>
</div> -->
</section>
</table> 
</body>
</html>