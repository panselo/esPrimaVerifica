<?php 
include 'db.php'; 
$id_utente = $_GET['id_utente'];
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Libri in carico all'utente</h2>
    <table border="1">
        <tr>
            <th>Titolo</th>
            <th>Stato / Azione</th>
        </tr>
        <?php
        $sql = "SELECT p.id as idprestito, l.titolo, p.restituito 
                FROM prestiti p 
                JOIN libri l ON p.id_libro = l.id 
                WHERE p.id_utente = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id_utente]);

        while ($row = $stmt->fetch()): ?>
            <tr>
                <td><?= htmlspecialchars($row['titolo']) ?></td>
                <td>
                    <?php if (!$row['restituito']): ?>
                        <form action="restituisci.php" method="POST">
                            <input type="hidden" name="id_prestito" value="<?= $row['idprestito'] ?>">
                            <input type="hidden" name="id_utente" value="<?= $id_utente ?>">
                            <input type="submit" value="Restituisci">
                        </form>
                    <?php else: ?>
                        Restituito
                    <?php endif; ?>
                </td>    
            </tr>
        <?php endwhile; ?>
    </table>
    <br><a href="scegliautore.php">Torna alla selezione</a>
</body>
</html>
