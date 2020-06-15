<?php 
    include_once('../includes/root.php')
?>
<!DOCTYPE html>
<html lang="fr" class="conn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiteName - Connexion / Inscription</title>
    <link rel="stylesheet" href="<?=$root?>admin/media/css/admin.css">
</head>
<body class="conn">
    <article class="connc_form">
        <h1 class="slider_button">
            <a href="#connexion" class="left_b activ" id="bouton1" onclick="switch_button()">CONNEXION</a>
        </h1>
        <form action="<?=$root?>admin/form/connect.php" method="post" class="activ" id='conn'>
            <label for="username">
                <input type="text" name="username" placeholder="Nom d'utilisateur">
            </label>         
            <br>
            <label for="password">
                <input type="password" name="password" placeholder="Mot de passe">
            </label>
            <label for="envoyer">
                <input type="submit" name="envoyer_conn" value="Envoyer">
            </label>
        </form>
    </article>
    

    <script src="<?=$root?>admin/media/js/connect.js"></script>
</body>
</html>