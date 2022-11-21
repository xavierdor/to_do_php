<?php

require_once 'partials/_check_is_logged.php';



require_once 'partials/Connexion.php';

$order = isset($_GET['order']) ? $_GET['order'] : 'ASC';


try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=todo",  // data source name
        "root", // username
        "", // password
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ] // options 
    );
} catch (PDOException $e) {
    echo $e = "<h2>Nous n'avons pas réussi à nous connecter à la base de données.</h2>";
    die;
}

try{
       
    $sql_query = '
    SELECT *  
    FROM task
    ORDER BY to_do_at '.$order;

    $stmt = $pdo->query($sql_query);

    $tasks = $stmt->fetchAll();
}catch(PDOException $e){
    
    echo "<h3>Nous avons eu un problème de récupération de données.<h3>";
}

unset($pdo);

require_once 'views/index.php';
?>








