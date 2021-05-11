<h2><?= ($action == 'new') ? 'Publier' : 'Modifier'; ?> un memo bloc</h2>

<?php if(!empty($errors)): ?>
        <h3>Erreurs :</h3>
        <?php foreach($errors as $error): ?>
            <?= $error ?><br>
        <?php endforeach; ?>
<?php endif; ?>

<form action="" method="POST">

    <label for="title">Titre *</label>
    <input type="text" name="title" id="title" value="<?= isset($selectedBloc) ? $selectedBloc['title']:($title ??''); ?>"> <br>

    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="<?= isset($selectedBloc) ? $selectedBloc['description']:($description ??''); ?>"> <br>
   
    <label for="content">Contenu *</label>
    <textarea name="content" id="content" cols="50" rows="20"><?= isset($selectedBloc) ? $selectedBloc['content']:($content ??''); ?></textarea> <br>

    <label for="bg_color">Background color</label>
    <input type="text" name="bg_color" id="bg_color" value="<?= isset($selectedBloc) ? $selectedBloc['color']:($color ??'#ffff88'); ?>"> <br>
    <p>Les champs * sont obligatoires</p> <br>



    <button>Sauvegarder</button>
</form>

<?php var_dump($bloc); ?>