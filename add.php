<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titolo = $_POST['titolo'];
    $anno = $_POST['anno'];
    $isbn = $_POST['isbn'];
    $id_autore = $_POST['id-autore'];

    $sql = "INSERT INTO libri (titolo, anno, isbn, id_autore) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titolo, $anno, $isbn, $id_autore]);

    header("Location: inseriscilibro.php");
    exit;
}
?>
