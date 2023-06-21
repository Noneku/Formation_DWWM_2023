<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="../index.css">

</head>
<body>


<style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            border: 1px solid blue;
            background-color: #f0f0f0;
        }

        .Table1 {
            display: flex;
            justify-content: space-between;
        }

        .Table2 {
            display: flex;
            justify-content: space-between;
        }

        .Table3 {
            display: flex;
            justify-content: space-between;
        }

        .Table4 {
            display: flex;
            justify-content: space-between;
        }

        td, th {
            border: 1px solid blue;
            padding: 8px;
        }
    </style>
</head>
<body>
<table>
<?php session_start();?>
    <caption>Placement des stagiaires ! </caption>

    <tr>
        <th>Place Stagiaire</th>
        <th>Nom Stagiaire</th>
    </tr>

    <!-- Place_1 -->
    <div class="Table1">
        
            <tr>
                <td>Place_1</td>
                <td><?php echo $_SESSION['$studentList']['Place_1'];?></td>
            </tr>
            <!-- Place_2 -->
            <tr>
                <td>Place_2</td>
                <td><?php echo $_SESSION['$studentList']['Place_2'];?></td>
            </tr>
        
            <!-- Place_3 -->
            <tr>
                <td>Place_3</td>
                <td><?php echo $_SESSION['$studentList']['Place_3'];?></td>
            </tr>
            <!-- Place_4 -->
            <tr>
                <td>Place_4</td>
                <td><?php echo $_SESSION['$studentList']['Place_4'];?></td>
            </tr>
        
    </div>


    <div class="Table2">
        <!-- Place_5 -->
            <tr>
                <td>Place_5</td>
                <td><?php echo $_SESSION['$studentList']['Place_5'];?></td>
            </tr>
            <!-- Place_6 -->
            <tr>
                <td>Place_6</td>
                <td><?php echo $_SESSION['$studentList']['Place_6'];?></td>
            </tr>
        </div>

        <!-- Place_7 -->
        <tr>
            <td>Place_7</td>
            <td><?php echo $_SESSION['$studentList']['Place_7'];?></td>
        </tr>
        <!-- Place_8 -->
    
        <tr>
            <td>Place_8</td>
            <td><?php echo $_SESSION['$studentList']['Place_8'];?></td>
        </tr>
    </div>


    <div class="Table3">
        <!-- Place_9 -->
            <tr>
                <td>Place_9</td>
                <td><?php echo $_SESSION['$studentList']['Place_9'];?></td>
            </tr>

            <!-- Place_10 -->
            <tr>
                <td>Place_10</td>
                <td><?php echo $_SESSION['$studentList']['Place_10'];?></td>
            </tr>
       

        <!-- Place_11 -->
        <tr>
            <td>Place_11</td>
            <td><?php echo $_SESSION['$studentList']['Place_11'];?></td>
        </tr>

        <!-- Place_12 -->
        <
            <td>Place_12</td>
            <td><?php echo $_SESSION['$studentList']['Place_12'];?></td>
        </tr>
    </div>
    </div>


    <div class="Table4">
        <!-- Place_13 -->
            <tr>
                <td>Place_13</td>
                <td><?php echo $_SESSION['$studentList']['Place_13'];?></td>
            </tr>
            <!-- Place_14 -->
            <tr>
                <td>Place_14</td>
                <td><?php echo $_SESSION['$studentList']['Place_14'];?></td>
            </tr>
        
            <!-- Place_15 -->
            <tr>
                <td>Place_15</td>
                <td><?php echo $_SESSION['$studentList']['Place_15'];?></td>
            </tr>
            <!-- Place_16 -->
            <tr>
                <td>Place_16</td>
                <td><?php echo $_SESSION['$studentList']['Place_16'];?></td>
            </tr>
        
    </div>
</table>
</body>
</html>