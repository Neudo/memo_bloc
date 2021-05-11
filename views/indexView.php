
  <div class="blocs">
<?php foreach($blocs as $bloc): ?>
    <div class="bloc" style="background:#4287f5;">
      <h3 post-title><?= $bloc['title'];?></h3>
      <p class="description"><?= $bloc['description'];?></p>
      <p class="content"><?= $bloc['content'];?></p>
      <p class="actions"> <a href="index.php?page=bloc&action=edit&id=<?=$bloc['id'];?>">Modifier</a> | <a href="index.php?page=bloc&action=delete&id=<?=$bloc['id'];?>">Supprimer</a></p>
    </div>

<?php endforeach; ?>

</div>