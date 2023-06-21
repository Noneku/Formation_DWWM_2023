<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
<?php session_start();?>
    <!-- <caption class="h2">Placement des stagiaire ! </caption> -->
    <h1>Placement des stagiaires ! </h1>

    <tr>
<div class="div1">
    <table class="groupe1">
    <h2 class ="liste">Groupe 1</h2>

    </tr>
    <!-- Place_1 -->
	
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

    <h2 class="liste">Groupe 2</h2>
    <table class="groupe1">

   
    <!-- Place_5 -->
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

<br>
</div>

<table class="groupe1">

    <h2 class="liste">Groupe 3</h2>
    <!-- Place_9 -->
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

    <table class="groupe1">
        <h2 class="liste">Groupe 4</h2>
    <!-- Place_13 -->
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
</table>


<form action="../Ctrl/execute.php" method="get">
    <div>
      <input type="submit" value="Envoyer">
    </div>
  </form>
</body>
</html>
