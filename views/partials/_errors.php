<?php if(isset($_SESSION['errors'])): ?>
    <?php foreach ($_SESSION['errors'] as $error): ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
    <?php endforeach ?>

    <?php $_SESSION['errors'] = [] ?>
<?php endif ?>