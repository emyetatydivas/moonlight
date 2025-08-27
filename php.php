<?php 

$email = $_POST['email'];
$senha = $_POST['senha'];
$site = "";

    if (isset($_POST['jogo'])) {
        $site = $_POST['jogo'];


        switch ($site) {
            case 'sh':
                header('Location: lp1.html');
                exit;
            case 'sim':
                header('Location: lp2.html');
                exit;
            case 'pz':
                header('Location: lp3.html');
                exit;
            default:
                echo "Opção inválida.";
                exit;
        }
    }

?>