<?php 
if (isset($_POST['envoyer_conn']) && (!empty($_POST['username']) || !empty($_POST['password']))){
    $nom=htmlspecialchars ($_POST['username']);
    $pwd=htmlspecialchars (md5($_POST['password'])); 

   

    require_once('../../includes/bdd.inc.php');

    $query=$conn->prepare('SELECT * FROM $users');
    $handler = mysqli_query($conn, "SELECT * FROM users WHERE username = '$nom'");
    $data = mysqli_fetch_assoc($handler);
    $id = $data['id'];
    $password = $data['password'];
    if ($password == $pwd) // Acces OK !
	{
        echo '<h1 style="text-align:center">Connection réussie</h2>';
        echo '<h2 style="text-align:center;font-weight:normal;">Bienvenu '.$nom.' !</h2>';

        header('Location: ../pages/dashboard.php?admin='.$nom.'');
        exit();
    }
    else
    {
        echo 'Email ou mot de passe Incorect';
        header('Location: ../#error');
        exit();
    }


    
}
elseif (empty($_POST['username']) || empty($_POST['password']) ) //Oublie d'un champ
{
    $message = '<p>une erreur s\'est produite pendant votre identification.
        Vous devez remplir tous les champs</p>
        <p>Cliquez <a href="../#connexion">ici</a> pour revenir</p>';
        echo $message;
}


?>