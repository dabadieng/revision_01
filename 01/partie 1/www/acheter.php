<?php
require "../_include/inc_config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "../_include/inc_head.php" ?>
</head>

<body>

    <header>
        <?php require "../_include/inc_entete.php" ?>
    </header>
    <nav>
        <?php require "../_include/inc_menu.php"; ?>
    </nav>

    <h1>Nos biens à l'achat</h1>
    
    <table>
        <thead>
            <tr>
                <td>Numéro de l'article</td>
                <td>Type de l'article</td>
                <td>Caractéristiques</td>
                <td>Adresse</td>
            </tr>
        </thead>
    </table>
    <form method="POST" action="immo.php">
        <input type="submit" name="accueil" value="retour à l'accueil">
    </form>

    <footer>
        <?php require "../_include/inc_pied.php"; ?>
    </footer>
</body>

</html>