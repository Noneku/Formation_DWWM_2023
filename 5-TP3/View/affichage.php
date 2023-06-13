<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Le Placement</title>
    <link rel="stylesheet" href="style.css">
</head>



<header class="header finisher-header titre"  style="width: 100%; height: 800px;">

        <a href="./index.php"><img src="../View/items/image/fleche-droite.png" alt="retour" title="retour" width="100px"></a>
        <div id="contenu_header">
            
            <h1>Le placement des stagiaires !</h1>
    
            <video autoplay muted loop id="tambour"> 
    
                <source src="./items/image/tambour.mp4" type="video/mp4" >
    
            </video>

        </div>

</header>

<body>

    <?php session_start(); ?>

<!-- <?php
$targetFile = 'uploads/fichier.txt';

if (file_exists($targetFile)) {
    $_SESSION = file_get_contents($targetFile);

    echo $fileContent;
} else {
    echo 'Le fichier n\'existe pas.';
}
?> -->


        <!-- <?php var_dump($_SESSION); ?> -->



        <!-- Place_1 -->
        <section>
        <div class="ligne1">


            <div class="groupe"> 
                 <h2>GROUPE 1</h2>
                <table>
              
                    <tr>
                        <th>Place Stagiaire</th>
                        <th>Nom Stagiaire</th>
        </tr>
        <tr>
            <td>Place_1</td>
            <td><?php echo $_SESSION['studentsList']['Place_1']; ?></td>
        </tr>
        <!-- Place_2 -->
        <tr>
            <td>Place_2</td>
            <td><?php echo $_SESSION['studentsList']['Place_2']; ?></td>
        </tr>
        <!-- Place_3 -->
        <tr>
            <td>Place_3</td>
            <td><?php echo $_SESSION['studentsList']['Place_3']; ?></td>
        </tr>
        <!-- Place_4 -->
        <tr>
            <td>Place_4</td>
            <td><?php echo $_SESSION['studentsList']['Place_4']; ?></td>
        </tr>
        
        
                </table>
                
               
            </div>
            
            <div class="groupe grp2">
                 <h2>GROUPE 2</h2>
                <table>
                    <tr>
                        <th>Place Stagiaire</th>
                        <th>Nom Stagiaire</th>
                    </tr>
                    <!-- Place_5 -->
                    <tr>
                        <td>Place_5</td>
                        <td><?php echo $_SESSION['studentsList']['Place_5']; ?></td>
                    </tr>
                    <!-- Place_6 -->
                    <tr>
                        <td>Place_6</td>
                        <td><?php echo $_SESSION['studentsList']['Place_6']; ?></td>
                    </tr>
                    <!-- Place_7 -->
                    <tr>
                        <td>Place_7</td>
                        <td><?php echo $_SESSION['studentsList']['Place_7']; ?></td>
                    </tr>
                    <!-- Place_8 -->
                    <tr>
                        <td>Place_8</td>
                        <td><?php echo $_SESSION['studentsList']['Place_8']; ?></td>
                    </tr>
                    
                    
                </table>
                
                
            </div>

            




        </div>
        <div id="plan">
            <div>

                <h1>Plan de classe</h1>

            </div>

            </div>
        <div class="ligne2">

            <div class="groupe grp3">
            <h2>GROUPE 3</h2>
                <table>
                    <tr>
                        <th>Place Stagiaire</th>
                        <th>Nom Stagiaire</th>
                    </tr>
                    <!-- Place_9 -->
                    <tr>
                        <td>Place_9</td>
                        <td><?php echo $_SESSION['studentsList']['Place_9']; ?></td>
                    </tr>
                    <!-- Place_10 -->
                    <tr>
                        <td>Place_10</td>
                        <td><?php echo $_SESSION['studentsList']['Place_10']; ?></td>
                    </tr>
                    <!-- Place_11 -->
                    <tr>
                        <td>Place_11</td>
                        <td><?php echo $_SESSION['studentsList']['Place_11']; ?></td>
                    </tr>
                    <!-- Place_12 -->
                    <tr>
                        <td>Place_12</td>
                        <td><?php echo $_SESSION['studentsList']['Place_12']; ?></td>
                    </tr>
                    
                    
                </table>
                
                
            </div>
            
            <div class="groupe grp4">
            <h2>GROUPE 4</h2>
                <table>
                    <tr>
                        <th>Place Stagiaire</th>
                        <th>Nom Stagiaire</th>
                    </tr>
                    <tr>
                        <td>Place_13</td>
                        <td><?php echo $_SESSION['studentsList']['Place_13']; ?></td>
                </tr>
                <!-- Place_14 -->
                <tr>
                    <td>Place_14</td>
                    <td><?php echo $_SESSION['studentsList']['Place_14']; ?></td>
                </tr>
                <!-- Place_15 -->
                <tr>
                    <td>Place_15</td>
                    <td><?php echo $_SESSION['studentsList']['Place_15']; ?></td>
                </tr>
                <!-- Place_16 -->
                <tr>
                    <td>Place_16</td>
                    <td><?php echo $_SESSION['studentsList']['Place_16']; ?></td>
                </tr>
                
            </table>
            
            
        </div>
    </div>
       
    </section>

    <script src="finisher-header.es5.min.js" type="text/javascript"></script>
        <script src="./header.js" type="text/javascript"></script>

</body>

</html>