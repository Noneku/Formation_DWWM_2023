<!DOCTYPE html lang= "en">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="">
        <script src="https://kit.fontawesome.com/dec997f443.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Stagiaires<br>List</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active">Plan de classe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./InventaireFolderSaveCSV.php">Mes Dossier</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <main>
          <form action="../Ctrl/execute_shuffleArray.php" method="get" class="d-flex justify-content-evenly flex-row mt-3">
              <input class="btn btn-primary"  type="submit" value="Trier">
            </form>
            <form action="../Ctrl/execute_saveTofile.php" method="get">
              <input class="btn btn-primary"  type="submit" value="Crée un fichier .JSON/.CSV">
            </form>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Place</th>
                  <th scope="col">Nom - Prenom</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    session_start();
                    foreach ($_SESSION['studentsListSort'] as $key => $value) {
                          echo "<tr>";
                          echo "<th scope='row'>$key</th>";
                          echo "<td>$value</td>";
                          echo "</tr>"; 
                      } 
                ?>
              </tbody>
            </table>
          </main>
    </body>
</html>