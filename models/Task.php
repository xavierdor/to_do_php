<?php 
require_once 'partials/Connexion.php';

class Task {

    private int $id;
    private string $name;
    private string $to_do_at;
    private bool $is_done;
    private int $id_user;

    public function getId() : int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getToDoAt(): string
    {
        return $this->to_do_at;
    }

    public function setToDoAt(string $to_do_at): void
    {
        $this->to_do_at = $to_do_at;
    }

    public function getIsDone(): bool
    {
        return $this->is_done;
    }

    public function setIsDone(bool $is_done): void
    {
        $this->is_done = $is_done;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public static function afficher()
    {
    $cnx = new Connexion();
    $pdo = $cnx->getPdo();
    $stmt = $pdo->prepare("SELECT * FROM task WHERE `id_user` = :id_user");
    $stmt->execute([
        'id_user'=> $this->id_user
    ]);
    }

    public static function edit()
    {
        try{
    $id_to_edit = $_GET['id'];
    $cnx = new Connexion();
    $pdo = $cnx->getPdo();
    $stmt = $pdo->prepare(("UPDATE task SET `name` = :new_name, `to_do_at` = new_date WHERE id = :id"));
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

    // public static function delete()
    // {

    // }
}