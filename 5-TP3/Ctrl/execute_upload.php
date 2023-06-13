
<?php
session_start();
$temp = $_FILES['fichier']['tmp_name'];
if (is_uploaded_file($temp)) {
    $studentListSimple = explode("\n", file_get_contents($temp));
    if ($studentListSimple !== false) {
    } else {
        echo "erreur";
    }
} else {
    echo "erreur";
}

for ($i = 0; $i < 16; $i++) {
    $key[$i] = "Place_" . ($i + 1);
    $studentList[$key[$i]] = $studentListSimple[$i];
}
$_SESSION['$place'] = array_keys($studentList);
$_SESSION['$studentList'] = $studentList;
header("Location: ../View/affichage.php");