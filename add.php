<?php
require_once 'partials/_check_is_logged.php';





    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once 'partials/Connexion.php';
        try {
            $stmt = $pdo->prepare("INSERT INTO `task` (`name`, `to_do_at`, `id_user`) VALUES (:name1, :date1, 1)");
            $stmt->execute([
                'name1' => $_POST['name'],
                'date1' => $_POST['to_do_at']
            ]);
            header('Location: index.php');
        } catch (PDOException $e) {
            echo $e = "<h2>Nous n'avons pas réussi à nous connecter à la base de données.</h2>";
            die;
        }
        unset($pdo);             
    }


require_once 'views/add.php';