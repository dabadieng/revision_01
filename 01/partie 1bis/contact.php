<?php
if(isset($_POST["btsubmit"])) {
    extract($_POST); 
    $chaine=$nom.";".$prenom.";".$adresse.";".$ville.";".cp."\n";
    $monfichier = fopen("contact.txt","a+"); 
    fclose($monfichier); 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <caption>
            liste des contacts
        </caption>
        <thead>
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>adresse</th>
                <th>ville</th>
                <th>CP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            var_dump($_POST);
            if (isset($_POST["btsubmit"])) {
                extract($_POST);
                echo "<tr>";
                echo "<td>$nom</td>";
                echo "<td>$prenom</td>";
                echo "<td>$adresse</td>";
                echo "<td>$ville</td>";
                echo "<td>$cp</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>

</body>

</html>