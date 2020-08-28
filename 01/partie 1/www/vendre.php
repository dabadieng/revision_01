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

    <h1>Mettre en vente</h1>
    <form method="POST" action="">
        <p>
            <label for="ven_type"> Type de biens</label>
            <?php
            $piece = array("Studio", "F1", "F2", "F3", "F4", "F5");
            
            foreach ($piece as $cle => $ligne) {
                echo "<option value='$cle'>$ligne[0]</option>";
            }
            ?>
            <input type="text" name="ven_type" id="type">
        </p>
        <p>
            <label for="ven_caracteristique">Caractéristique du bien </label>
            <textarea id="ven_caracteristique" name="ven_caracteristique" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="ven_adresse">Adresse</label>
            <input type="text" name="ven_adresse" id="ven_adresse">
        </p>
        <input type="submit" name="valider" value="Valider">


    </form>
    <table>
        <thead>
            <tr>
                <td>Type de bien</td>
                <th>Caractéristiques</th>
                <td>Adresse</td>
            </tr>
        </thead>
    </table>
    <form method="POST" action="immo.php">
        <input type="submit" name="accueil" value="retour à l'accueil">
    </form>

    <hr>
    <footer>
        <?php require "../_include/inc_pied.php"; ?>
    </footer>
</body>

</html>