<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Inserisci Libro</title></head>
<body>
    <h2>Aggiungi un nuovo libro</h2>
    <form action="add.php" method="POST">
        Titolo: <input type="text" name="titolo" required><br><br>
        Anno: <input type="text" name="anno"><br><br>
        ISBN: <input type="text" name="isbn"><br><br>
        Autore: 
        <select name="id-autore">
            <?php
            $stmt = $pdo->query("SELECT id, nome FROM autori");
            while ($row = $stmt->fetch()) {
                echo "<option value=\"{$row['id']}\">{$row['nome']}</option>";
            }
            ?>            
        </select><br><br>
        <input type="submit" value="Salva Libro">
    </form>
</body>
</html>
