<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fichier'])) {
        $file = $_FILES['fichier'];

        // Vérifier s'il n'y a pas eu d'erreur lors du téléchargement
        if ($file['error'] === UPLOAD_ERR_OK) {
            $tempFilePath = $file['tmp_name'];

            // Déplacer le fichier temporaire vers l'emplacement souhaité
            $destination = __DIR__ . '/text/' . $file['name'];
            move_uploaded_file($tempFilePath, $destination);

            echo 'Le fichier a été téléchargé avec succès !';
        } else {
            echo 'Une erreur s\'est produite lors du téléchargement du fichier.';
        }
    }
}

var_dump($_FILES['fichier']);








?>