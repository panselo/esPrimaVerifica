<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_libro = $_POST['id_libro'];
    $id_utente = $_POST['id_utente'];

    $sql = "INSERT INTO prestiti (id_libro, id_utente) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_libro, $id_utente]);

    echo "Prestito registrato! <a href='nuovoprestito.php'>Torna indietro</a>";
}
?>
