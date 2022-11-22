<?php

require_once './partials/Connexion.php';

$id_to_edit = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        try {
            $stmt = $pdo->prepare("UPDATE task SET `name` = :new_name, `to_do_at`= :new_date WHERE id = :id");
            $stmt->execute([
                'new_name' => $_POST['name'],
                'new_date' => $_POST['to_do_at'],
                'id' => $id_to_edit
            ]);
            header('Location: index.php');
        } catch (PDOException $e) {
            echo $e = "<h2>Nous n'avons pas réussi à nous connecter à la base de données.</h2>";
            die;
        }
            
        
    }


$stmt = $pdo->prepare("SELECT * FROM task WHERE id = :id");
$stmt->execute([
    'id' => $id_to_edit
]);

$post = $stmt->fetch(PDO::FETCH_OBJ);



unset($pdo);


require_once 'views/edit.php';
?>