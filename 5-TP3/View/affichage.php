<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="etudiant.css">
</head>
<body>

<form action="affichage2.php" method="get">

  <div class="acceuil">
  <div class="acceuil">  <input class="submit" type="submit" value="page d'acceuil"></div>
  </div>

</form>



<?php session_start();?>
    <!-- <caption class="h2">Placement des stagiaire ! </caption> -->
    <h1>Placement des stagiaire ! </h1>

    <tr>
        

    
    <h1></h1>
<div class="conteneur1">

</tr>
    <!-- Place_1 -->
	
    <table class="groupe1">
    <tr>
        <td>Place_1</td>
        <td><?php echo $_SESSION['$student']['Place_1'];?></td>
    </tr>
    <!-- Place_2 -->
    <tr>
        <td>Place_2</td>
        <td><?php echo $_SESSION['$student']['Place_2'];?></td>
    </tr>
    <!-- Place_3 -->
    <tr>
        <td>Place_3</td>
        <td><?php echo $_SESSION['$student']['Place_3'];?></td>
    </tr>
    <!-- Place_4 -->
    <tr>
        <td>Place_4</td>
        <td><?php echo $_SESSION['$student']['Place_4'];?></td>
    </tr>

    </table>

    <br>
    
  

    <h1></h1>
    <!-- Place_5 -->
    <table class="groupe2">
    <tr>
        <td>Place_5</td>
        <td><?php echo $_SESSION['$student']['Place_5'];?></td>
    </tr>
    <!-- Place_6 -->
    <tr>
        <td>Place_6</td>
        <td><?php echo $_SESSION['$student']['Place_6'];?></td>
    </tr>
    <!-- Place_7 -->
    <tr>
        <td>Place_7</td>
        <td><?php echo $_SESSION['$student']['Place_7'];?></td>
    </tr>
    <!-- Place_8 -->
    <tr>
        <td>Place_8</td>
        <td><?php echo $_SESSION['$student']['Place_8'];?></td>
    </tr>

    </table>
    </div>
<br>

    <h1></h1>
    <!-- Place_9 -->
    <div class="conteneur2">
        <table class="groupe3">
    <tr>
        <td>Place_9</td>
        <td><?php echo $_SESSION['$student']['Place_9'];?></td>
    </tr>
    <!-- Place_10 -->
    <tr>
        <td>Place_10</td>
        <td><?php echo $_SESSION['$student']['Place_10'];?></td>
    </tr>
    <!-- Place_11 -->
    <tr>
        <td>Place_11</td>
        <td><?php echo $_SESSION['$student']['Place_11'];?></td>
    </tr>
    <!-- Place_12 -->
    <tr>
        <td>Place_12</td>
        <td><?php echo $_SESSION['$student']['Place_12'];?></td>
    </tr>

    </table>

    <br>

        <h1></h1>
    <!-- Place_13 -->
    <table class="groupe4">
    <tr>
        <td>Place_13</td>
        <td><?php echo $_SESSION['$student']['Place_13'];?></td>
    </tr>
    <!-- Place_14 -->
    <tr>
        <td>Place_14</td>
        <td><?php echo $_SESSION['$student']['Place_14'];?></td>
    </tr>
    <!-- Place_15 -->
    <tr>
        <td>Place_15</td>
        <td><?php echo $_SESSION['$student']['Place_15'];?></td>
    </tr>
    <!-- Place_16 -->
    <tr>
        <td>Place_16</td>
        <td><?php echo $_SESSION['$student']['Place_16'];?></td>
    </tr>
    </table>
</div>
</table>

</form>

<form action="../Ctrl/execute.php" method="get">
    <div class="envoyer">
      <input class="submit" type="submit" value="MELANGER ETUDIANT">
    </div>


</body>

</html>