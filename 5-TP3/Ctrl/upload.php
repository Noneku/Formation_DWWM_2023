<?php
include '../Modele/functions.php';
session_start();

if ($_FILES['fileInput']['error'] === UPLOAD_ERR_OK) {
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($_FILES['fileInput']['name']);

    // Déplacer le fichier vers le dossier spécifié
    move_uploaded_file($_FILES['fileInput']['..\Modele\sauvegardes\save_students".date("Y-m-d-H-i-s").".json'], $targetFile);
    echo 'Le fichier a été uploadé avec succès.';
} else {
    echo 'Erreur lors du chargement du fichier.';
}

header("Location: ../View/affichage.php");
?>


