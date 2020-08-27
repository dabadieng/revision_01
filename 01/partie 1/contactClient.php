<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST["btsubmit"])) { ?>
        <form method="POST" action="immo.php">
            <p>
                <label for='nom'>nom</label>
                <input type='text' name='nom' id='nom' required placeholder='veuillez saisir votre nom' value=''>
            </p>

            <p>
                <label for='prenom'>prenom</label>
                <input type='text' name='prenom' id='prenom' required placeholder='veuillez saisir votre prenom' value=''>
            </p>

            <p>
                <label for='adresse'>adresse</label>
                <input type='text' name='adresse' id='adresse' required placeholder='veuillez saisir votre adresse' value=''>
            </p>

            <p>
                <label for='ville'>ville</label>
                <input type='text' name='ville' id='ville' required placeholder='veuillez saisir votre ville' value=''>
            </p>

            <p>
                <label for='cp'>cp</label>
                <input type='text' name='cp' id='cp' required placeholder='veuillez saisir votre cp' value=''>
            </p>
            <input type="submit" name="btsubmit" value="ok">

        </form>

    <?php
    }
    ?>


</body>

</html>