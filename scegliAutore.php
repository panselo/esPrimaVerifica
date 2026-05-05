<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<body>
    <h2>Visualizza Prestiti Utente</h2>
    <form action="elenca.php" method="GET">
        Seleziona Utente:
        <select name="id_utente">
            <?php
            $stmt = $pdo->query("SELECT id, nome, cognome FROM utenti");
            while ($row = $stmt->fetch()) {
                echo "<option value=\"{$row['id']}\">{$row['nome']} {$row['cognome']}</option>";
            }
            ?>            
        </select>
        <input type="submit" value="Vedi Prestiti">
    </form>
</body>
</html>
