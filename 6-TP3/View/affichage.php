<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>


   <main>

         <h1>Placement des stagiaire !</h1>
<section>
   
        <?php session_start(); ?>
        



 
<div class="table-container"> 
   <table> 
    <!-- Place_1 -->
    <table>
        <tr> 
            <td>Place_1</td>
            <td><?php echo $_SESSION['$studentList']['Place_1']; ?></td>
        </tr>
    
        <!-- Place_2 -->
        <tr>
            <td>Place_2</td>
            <td><?php echo $_SESSION['$studentList']['Place_2']; ?></td>
        </tr>
        <!-- Place_3 -->
        <tr>
            <td>Place_3</td>
            <td><?php echo $_SESSION['$studentList']['Place_3']; ?></td>
        </tr>
        <!-- Place_4 -->
        <tr>
            <td>Place_4</td>
            <td><?php echo $_SESSION['$studentList']['Place_4']; ?></td>
        </tr>
    </table>
</div>
       <div class="table-container">
    <table>
        <!-- Place_5 -->
        <tr>
            <td>Place_5</td>
            <td><?php echo $_SESSION['$studentList']['Place_5']; ?></td>
        </tr>
        <!-- Place_6 -->
        <tr>
            <td>Place_6</td>
            <td><?php echo $_SESSION['$studentList']['Place_6']; ?></td>
        </tr>
        <!-- Place_7 -->
        <tr>
            <td>Place_7</td>
            <td><?php echo $_SESSION['$studentList']['Place_7']; ?></td>
        </tr>
        <!-- Place_8 -->
        <tr>
            <td>Place_8</td>
            <td><?php echo $_SESSION['$studentList']['Place_8']; ?></td>
        </tr>
</table>
</div>
        <!-- Place_9 -->
        <div class="table-container">
        <table>
        <tr>
            <td>Place_9</td>
            <td><?php echo $_SESSION['$studentList']['Place_9']; ?></td>
        </tr>
        <!-- Place_10 -->
        <tr>
            <td>Place_10</td>
            <td><?php echo $_SESSION['$studentList']['Place_10']; ?></td>
        </tr>
        <!-- Place_11 -->
        <tr class="phone">
            <td>Place_11</td>
            <td><?php echo $_SESSION['$studentList']['Place_11']; ?></td>
        </tr>
        <!-- Place_12 -->
        <tr>
            <td>Place_12</td>
            <td><?php echo $_SESSION['$studentList']['Place_12']; ?></td>
        </tr>
        <div class="table-container">
</table>
</div>
<div class="table-container">
        <!-- Place_13 -->
        <table>
        <tr>
            <td>Place_13</td>
            <td><?php echo $_SESSION['$studentList']['Place_13']; ?></td>
        </tr>
        <!-- Place_14 -->
        <tr>
            <td>Place_14</td>
            <td><?php echo $_SESSION['$studentList']['Place_14']; ?></td>
        </tr>
        <!-- Place_15 -->
        <tr>
            <td>Place_15</td>
            <td><?php echo $_SESSION['$studentList']['Place_15']; ?></td>
        </tr>
        <!-- Place_16 -->
        <tr>
            <td>Place_16</td>
            <td><?php echo $_SESSION['$studentList']['Place_16']; ?></td>
        </tr>
</table>
        </div>
    </table>
   
    </section>
    </main>
</body>

</html>