<?php
    $admin = $_GET['admin'];

if (isset($_POST['envoyer_insc'])){
    $nom=htmlspecialchars ($_POST['username']);
    $mail=htmlspecialchars ($_POST['email']);
    $pwd=htmlspecialchars (md5($_POST['password'])); 
    
        require_once('../../includes/bdd.inc.php');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO users (username, email, password)
                VALUES ('$nom', '$mail', '$pwd')";

                if ($conn->query($sql) === TRUE) {
                    echo "Nouvel utilisateur enregistré";
                    echo '<h1 style="text-align:center">Connection réussie</h2>';
                    echo '<h2 style="text-align:center;font-weight:normal;">Bienvenu '.$nom.' !</h2>';
        
                    header('Location: ../pages/dashboard.php?admin='.$nom.'');
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;            echo 'Email ou mot de passe Incorect';
                    header('Location: ../#error');
                    exit();
                }
    }
?>
