<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
<?php session_start();?>
<header>
<H1>DWWM STAGIAIRE</H1>

</header>
<div class="container">
    <div class = "back">
     <div class="group">
        <h2>Groupe 1</h2>
        <table>
            <!-- Place_1 -->
            <tr>
                <td id = love >Place_1</td>
                <td><?php echo $_SESSION['$student']['Place_1'];?></td>
            </tr>
            <!-- Place_2 -->
            <tr>
                <td id = love>Place_2</td>
                <td><?php echo $_SESSION['$student']['Place_2'];?></td>
            </tr>
            <!-- Place_3 -->
            <tr>
                <td id = love>Place_3</td>
                <td><?php echo $_SESSION['$student']['Place_3'];?></td>
            </tr>
            <!-- Place_4 -->
            <tr>
                <td id = love>Place_4</td>
                <td><?php echo $_SESSION['$student']['Place_4'];?></td>
            </tr>
        </table>
     </div>

     <div class = "mick">
     <h2>Groupe 4</h2>
        <table>
            <!-- Place_13 -->
            <tr>
                <td id = love>Place_13</td>
                <td><?php echo $_SESSION['$student']['Place_13'];?></td>
            </tr>
            <!-- Place_14 -->
            <tr>
                <td id = love>Place_14</td>
                <td><?php echo $_SESSION['$student']['Place_14'];?></td>
            </tr>
            <!-- Place_15 -->
            <tr>
                <td id = love>Place_15</td>
                <td><?php echo $_SESSION['$student']['Place_15'];?></td>
            </tr>
            <!-- Place_16 -->
            <tr>
                <td id = love>Place_16</td>
                <td ><?php echo $_SESSION['$student']['Place_16'];?></td>
            </tr>
        </table>
     </div>
        
    </div>

    <form action="../Ctrl/execute.php" method="get">
    <div>
      <input type="submit" value="Shuffle">
    </div>
    </form>
   
    
    <div class = "low">

        <div class="shinji">
        <h2>Groupe 2</h2>
            <table>
            <!-- Place_5 -->
                <tr>
                    <td id = love>Place_5</td>
                    <td><?php echo $_SESSION['$student']['Place_5'];?></td>
                </tr>
            <!-- Place_6 -->
                <tr>
                    <td id = love>Place_6</td>
                    <td><?php echo $_SESSION['$student']['Place_6'];?></td>
                </tr>
            <!-- Place_7 -->
                <tr>
                    <td id = love>Place_7</td>
                    <td><?php echo $_SESSION['$student']['Place_7'];?></td>
                </tr>
            <!-- Place_8 -->
            <tr>
                <td id = love>Place_8</td>
                <td><?php echo $_SESSION['$student']['Place_8'];?></td>
            </tr>
            </table>
        </div>

        <div class="hirako">
        <h2>Groupe 3</h2>
            <table>
            <!-- Place_9 -->
            <tr>
                <td id = love>Place_9</td>
                <td><?php echo $_SESSION['$student']['Place_9'];?></td>
            </tr>
             <!-- Place_10 -->
             <tr>
                <td id = love>Place_10</td>
                <td><?php echo $_SESSION['$student']['Place_10'];?></td>
            </tr>
            <!-- Place_11 -->
            <tr>
                <td id = love>Place_11</td>
                <td><?php echo $_SESSION['$student']['Place_11'];?></td>
            </tr>
            <!-- Place_12 -->
            <tr>
                <td id = love>Place_12</td>
                <td><?php echo $_SESSION['$student']['Place_12'];?></td>
            </tr>
            </table>
        </div>
    </div>
    


   

    
</div>


</body>
</html>