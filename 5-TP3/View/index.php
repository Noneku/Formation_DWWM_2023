<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_index.css">
  <title>Shuffle Classe</title>
</head>

<header>
    <div class="header finisher-header titre"  style="width: 100%; height: 300px;">
        <h1> Attribution des places</h1><br>

    </div>
    
</header>



<body>
  

<?php session_start(); ?>

<h1>DWWM</h1>

<section class="container">

  <div id="melanger">
    <h2>Go Shuffle</h2>
    <form action="..\Ctrl\execFunc.php" method="get">
      <div>
        <!-- <label for="example">Veuillez saisir un texte</label> -->
      </div>
      <div>
        <!-- <input type="file" name="sauvegarde" accept=".json" /> -->
        <input type="submit" value="Mélanger">
      </div>
      
    </div>
    
    <!-- <div id="afficher">
  <h2>Charger et afficher un tableau</h2>
  
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileInput">
    <input type="submit" value="Uploader">
  </form>
  
</div> -->
</section>

<script src="finisher-header.es5.min.js" type="text/javascript"></script>
        <script src="./header.js" type="text/javascript"></script>

</body>

<footer>


</footer>

</html>