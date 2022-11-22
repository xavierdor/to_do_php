<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h1>Modifier une tâche</h1>
            </div>
        </div>
    
        <div class="row mt-5">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Tâche à effectuer:</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $post->name ?>" >
                    </div>
                    <div class="form-group">
                        <label for="to_do_at">Nouvelle date:</label>
                        <input type="date" name="to_do_at" id="to_do_at" class="form-control" value="<?= $post->do_do_at ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier</button>

                </form>
            </div>
        </div>    
    </div>


<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>