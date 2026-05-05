<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_prestito = $_POST['id_prestito'];
    $id_utente = $_POST['id_utente'];
    $data_oggi = date('Y-m-d');

    // Aggiorna lo stato del prestito
    $sql = "UPDATE prestiti SET restituito = 1, data_restituzione = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$data_oggi, $id_prestito]);

    // Rimanda alla pagina dell'utente
    header("Location: elenca.php?id_utente=" . $id_utente);
    exit;
}
?>
