<?php
require "../_include/inc_config.php";

$sql = "select * from contact"; 
$result = $link->query($sql);
$data = $result->fetchAll();

if (isset($_POST["btsubmit"])) {
    extract($_POST);
    $option[":con_nom"] = $con_nom;
    $option[":con_prenom"] = $con_prenom;
    $option[":con_adresse"] = $con_adresse;
    $option[":con_ville"] = $con_ville;
    $option[":con_cp"] = $con_cp;
    $sql = "insert into contact values (null,:con_nom,:con_prenom,:con_adresse,:con_ville,:con_cp)";
    $statement = $link->prepare($sql);
    $statement->execute($option);
}

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
    <?php
    if (!isset($_POST["btsubmit"])) { ?>
        <form method="POST" action="">
            <p>
                <label for='con_nom'>nom</label>
                <input type='text' name='con_nom' id='con_nom' required placeholder='veuillez saisir votre nom' value=''>
            </p>

            <p>
                <label for='con_prenom'>prenom</label>
                <input type='text' name='con_prenom' id='con_prenom' required placeholder='veuillez saisir votre prenom' value=''>
            </p>

            <p>
                <label for='con_adresse'>adresse</label>
                <input type='text' name='con_adresse' id='con_adresse' required placeholder='veuillez saisir votre adresse' value=''>
            </p>

            <p>
                <label for='con_ville'>ville</label>
                <input type='text' name='con_ville' id='con_ville' required placeholder='veuillez saisir votre ville' value=''>
            </p>

            <p>
                <label for='con_cp'>cp</label>
                <input type='text' name='con_cp' id='con_cp' required placeholder='veuillez saisir votre cp' value=''>
            </p>
            <input type="submit" name="btsubmit" value="ok">

        </form>

    <?php
    }
    ?>
    <h1>Liste des contacts</h1>
    <table>
        <caption>
            contacts
        </caption>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>CP</th>
            <th>editer</th>
            <th>supprimer</th>
        </tr>
        <?php
        foreach ($data as $row) {
            $row = array_map("cb_htmlentities", $row);
            extract($row);
            echo "<tr>";
            echo "<td>$con_id</td>";
            echo "<td>$con_nom</td>";
            echo "<td>$con_prenom</td>";
            echo "<td>$con_adresse</td>";
            echo "<td>$con_ville</td>";
            echo "<td>$con_cp</td>";
            echo "<td><a href='contactClient.edit.php?id=$con_id'>Editer</a></td>";
            echo "<td><a href='contactClient_del.php?id=$con_id'>Supprimer</a></td>";
            echo "</tr>";
        }
        ?>
    </table>


</body>

</html>