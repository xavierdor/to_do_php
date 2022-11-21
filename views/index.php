<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>To Do List</title>
</head>


<body>

    

    <section class="vh-100" style="background-color: #eee;">
    <div>
        <a href="login.php" class="btn btn-info">Se connecter</a>
        <a href="register.php" class="btn btn-dark">S'inscrire</a>
    </div>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
            <div class="card rounded-3">
            <div class="card-body p-4">

                <h2 class="text-center my-3 pb-3">To Do List</h2>

                <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                <div class="col-12">
                    
                </div>

                <div class="col-12">
                    <a href="./add.php" class="btn btn-primary">Ajouter une tâche</a>
                    <form  method="GET" id="orderForm" >
                        <select name="order" id="order">
                            <option value="">Trier par</option>
                            <option value="asc">Dates croissantes</option>
                            <option value="desc">Dates décroissantes</option>
                        </select>
                    </form>
                </div>

                
                </form>

                <table class="table mb-4">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Tâches</th>
                    <th scope="col">Date limite </th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($tasks as $task) : ?>
                        <tr>
                            <td><input type="checkbox" name="check[]"></td>
                            <td><?= $task->name ?></td>
                            <td><?= $task->to_do_at ?></td>          
                            <td><a href="edit.php?id=<?= $task->id ?>" class="btn btn-warning">Modifier</a></td>
                        </tr>
                        <?php endforeach ?>
                </tbody>
            
                </table>

            </div>
            <div class="container text-center mb-4">
            <a href="#" class="btn btn-success">Fait</a>
            <a href="#" class="btn btn-danger">Supprimer</a>
            </div>
            </div>
        </div>
        </div>
    </div>
      
    </section>


    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>