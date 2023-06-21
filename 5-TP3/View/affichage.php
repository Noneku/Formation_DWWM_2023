<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- <Main>
    <tbody class ='button1'>
      Shuffle Classroom
    </tbody>
    <tbody class ='button2'>
      Shuffle Classroom
    </tbody>
  </main>   -->

<!-- <main>
    <form action="..\Ctrl\execute_saveTofile.php" method="get">
        <div class ='tab'>
            <input type="submit" class='button1' value="Shuffle">
        </div>
    </form>
    <form action="index.php" method="get">
        <div class ='tab'>
            <input type="submit" class='button2' value="Return">
        </div>
    </form>
</main> -->

<form class = title>
    <td>Shuffle Classroom</td>
</form>

<form class = title3 action="index.php" method="get">
    <div class ='tab'>
        <input type="submit" class='button3' value="Return">
    </div>
</form> 


<table>
<?php session_start();?>
    <!-- <caption>Placement des stagiaire ! </caption> -->

<tbody class = 'bureau' id = 'bureau1'>
    <!-- Place_1 -->
	
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>1. </td>
        <td><?php echo $_SESSION['$studentList']['Place_1'];?></td>
    </tr>
    <!-- Place_2 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>2. </td>
        <td><?php echo $_SESSION['$studentList']['Place_2'];?></td>
    </tr>
    <!-- Place_3 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>3. </td>
        <td><?php echo $_SESSION['$studentList']['Place_3'];?></td>
    </tr>
    <!-- Place_4 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>4. </td>
        <td><?php echo $_SESSION['$studentList']['Place_4'];?></td>
    </tr>
</tbody>

<tbody class = 'bureau' id = 'bureau2'>
    <!-- Place_5 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>5. </td>
        <td><?php echo $_SESSION['$studentList']['Place_5'];?></td>
    </tr>
    <!-- Place_6 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>6. </td>
        <td><?php echo $_SESSION['$studentList']['Place_6'];?></td>
    </tr>
    <!-- Place_7 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>7. </td>
        <td><?php echo $_SESSION['$studentList']['Place_7'];?></td>
    </tr>
    <!-- Place_8 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>8. </td>
        <td><?php echo $_SESSION['$studentList']['Place_8'];?></td>
    </tr>
</tbody>

<tbody class = 'bureau' id = 'bureau3'>
    <!-- Place_9 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>9. </td>
        <td><?php echo $_SESSION['$studentList']['Place_9'];?></td>
    </tr>
    <!-- Place_10 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>10. </td>
        <td><?php echo $_SESSION['$studentList']['Place_10'];?></td>
    </tr>
    <!-- Place_11 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>11. </td>
        <td><?php echo $_SESSION['$studentList']['Place_11'];?></td>
    </tr>
    <!-- Place_12 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>12. </td>
        <td><?php echo $_SESSION['$studentList']['Place_12'];?></td>
    </tr>
<tbody>

<tbody class = 'bureau' id= 'bureau4'>
    <!-- Place_13 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>    
        <td>13. </td>
        <td><?php echo $_SESSION['$studentList']['Place_13'];?></td>
    </tr>
    <!-- Place_14 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>
        <td>14. </td>
        <td><?php echo $_SESSION['$studentList']['Place_14'];?></td>
    </tr>
    <!-- Place_15 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>    
        <td>15. </td>
        <td><?php echo $_SESSION['$studentList']['Place_15'];?></td>
    </tr>
    <!-- Place_16 -->
    <tr>
        <td><img src="./IMG/deskicon.png" alt=""><td>    
        <td>16. </td>
        <td><?php echo $_SESSION['$studentList']['Place_16'];?></td>
    </tr>
</tbody>

</table>
  


</body>
</html>