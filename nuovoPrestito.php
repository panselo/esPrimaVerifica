<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<body>
    <h2>Registra un Prestito</h2>
    <form action="add_prestito.php" method="POST">
        Libro:
        <select name="id_libro">
            <?php
            $stmt = $pdo->query("SELECT id, titolo FROM libri");
            while ($row = $stmt->fetch()) echo "<option value='{$row['id']}'>{$row['titolo']}</option>";
            ?>
        </select><br><br>
        Utente:
        <select name="id_utente">
            <?php
            $stmt = $pdo->query("SELECT id, nome, cognome FROM utenti");
            while ($row = $stmt->fetch()) echo "<option value='{$row['id']}'>{$row['nome']} {$row['cognome']}</option>";
            ?>
        </select><br><br>
        <input type="submit" value="Conferma Prestito">
    </form>
</body>
</html>
