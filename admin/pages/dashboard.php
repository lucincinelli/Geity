<?php 
    include_once('../../includes/root.php');
    $admin = $_GET['admin'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Geity<?=$admin?></title>
    <link rel="stylesheet" href="<?=$root?>admin/media/css/admin.css">
</head>
<body>
    <section class="sidebar">
        <h1 class="bvn">Bienvenu <span class="admin"><a href="<?=$root?>admin/" title="Se déconnecter"><?php echo $admin?></a></span></h1>
    </section>
    <section class="container">
        <article class="contained_container">
            <div class=more_admin>
                <h2>Ajouter un administrateur</h2>
                <form action="<?=$root?>admin/form/insc.php" method="post" class="inactiv" id='insc'>
                    <label for="username">
                        <input type="text" name="username" placeholder="Nom d'utilisateur">
                    </label>    
                    <br>
                    <label for="email">
                        <input type="mail" name="email" placeholder="Adresse e-mail">
                    </label>         
                    <br>
                    <label for="password">
                        <input type="password" name="password" placeholder="Mot de passe">
                    </label>
                    <label for="envoyer">
                        <input type="submit" name="envoyer_insc" value="Envoyer">
                    </label>
                </form>
            </div>
        </article>
    </section>
</body>
</html>