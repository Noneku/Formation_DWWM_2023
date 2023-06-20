<!DOCTYPE html>
<html>
    <head>
        <?php
        include('../Modele/functions.php');
        session_start();
        $i = 0;
        $stagiaireSort = $_SESSION['stagiaireSort'];

        ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                  <li class="nav-item">
                    <a class="nav-link active" href = "./ClasseDWWM.php">Plan de classe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href=".\InventaireFolderSaveCSV.php">Mes Dossier</a>
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
          <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <div class="alert alert-primary custom-border custom-background" role="alert">
          Formateur
        </div>
      </div>
    </div>
    <div class=" mt-5 justify-content-between d-flex">
      <div class="text-center">
        <div class="alert alert-success custom-border custom-background h-100" style="width: 400px" role="alert">
        Groupe 1
        <section class ="mt-4">
          <div>
            <p><?php echo $stagiaireSort["Place_0"]?></p>
          </div>
          <div class="d-flex flex-row-reverse">
            <p><?php echo $stagiaireSort["Place_14"]?></p>
          </div>
          <div class="d-flex flex-row-reverse">
            <p><?php echo $stagiaireSort["Place_1"]?></p>
          </div>
          <div>
            <p><?php echo $stagiaireSort["Place_2"]?></p>
          </div>
        </section>
        </div>
      </div>
      <form action = "../Ctrl/execute_getStudents.php" method="get">
        <button type="submit" class="btn btn-warning fs-1" style = "width: 350px">Trier</button>
      </form>
      <div class="text-center">
        <div class="alert alert-danger custom-border custom-background h-100" style="width: 400px" role="alert">
          Groupe 2
          <section class ="mt-4">
          <div>
            <p><?php echo $stagiaireSort["Place_3"]?></p>
          </div>
          <div class = "d-flex">
            <p><?php echo $stagiaireSort["Place_4"]?></p>
          </div>
          <div class = "d-flex flex-row justify-content-around mt-4">
            <div>
              <p><?php echo $stagiaireSort["Place_5"]?></p>
            </div>
            <div>
              <p><?php echo $stagiaireSort["Place_6"]?></p>
            </div>
          </div>
        </section>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-evenly flex-row custom-padding mt-5 h-50">
      <div class="">
        <div class="alert alert-warning custom-border custom-background" role="alert">
        Groupe 3 A
        <section class ="mt-3">
          <div>
            <p><?php echo $stagiaireSort["Place_7"]?></p>
          </div>
          <div>
            <p><?php echo $stagiaireSort["Place_8"]?></p>
          </div>
        </section>
        <hr>
        Groupe 3 B
        <section class ="mt-3">
          <div>
            <p><?php echo $stagiaireSort["Place_9"]?></p>
          </div>
          <div>
            <p><?php echo $stagiaireSort["Place_10"]?></p>
          </div>
        </section>
        </div>
      </div>
      <div class="">
        <div class="alert alert-info custom-border custom-background" role="alert">
        Groupe 4 A
        <section class ="mt-3">
          <div>
            <p><?php echo $stagiaireSort["Place_11"]?></p>
          </div>
          <div>
            <p><?php echo $stagiaireSort["Place_12"]?></p>
          </div>
          <div>
            <p><?php echo $stagiaireSort["Place_13"]?></p>
          </div>
        </section>
        <hr>
        Groupe 4 B
        <section class ="mt-3">
          <div>
            <p><?php echo $stagiaireSort["Place_15"]?></p>
          </div>
        </section>
        </div>
      </div>
    </div>
  </div>
          </main>
    </body>
</html>