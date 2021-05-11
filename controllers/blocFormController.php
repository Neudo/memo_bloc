<?php

$action = $_GET['action'];
$errors = [];

require_once('models/Blocs.php');

if($action == 'new') {

    if(!empty($_POST)) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $content = $_POST['content'];
      $color = $_POST['bg_color'];

      if(empty($title)) {
        $errors[] = "Merci de donner un titre !";
      }
      if(empty($content)) {
        $errors[] = "Merci d'inserer un contenu !";
      }

      if(empty($errors)) {
        $result = addBloc($title, $description, $content, $color);

      if($result) {
        $_SESSION['message'] = "Mémo bloc enregistré !";
        header('Location: index.php');
        exit;
      }
      else {
        $_SESSION['error'] = "Impossible de publier ...";
        header('Location: index.php');
        exit;
      }
    }
  }
$view = 'views/blocFormView.php';

}

if($action == 'delete') {
  deleteBloc($_GET['id']);

    $_SESSION['message'] =  " <div class='message'> Suppression effectuée!</div>";
    header('Location: index.php');
    exit;
}

  if($action == 'edit') {
    $blocId = $_GET['id'];
    $selectedBloc = getBloc($blocId);



    if(!empty($_POST)) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $content = $_POST['content'];
      $color = $_POST['bg_color'];


      if(empty($title)) {
        $errors[] = 'Le titre est obligatoire !';
      }
      if(empty($content)) {
        $errors[] = 'Le contenue est obligatoire !';
      }

      if(empty($errors)) {

          $updateResult = updateBloc($_GET['id'], $_POST);

          if($updateResult == true) {
            $_SESSION['message'] = " <div class='message'> Bloc bien mise à jour ! </div>";
            header('Location: index.php?page=posts&action=list');
            exit;
          }
          else {
            $_SESSION['error'] = "Impossible d'enregristrer la modification ...";
            header('Location: index.php?page=posts&action=list');
          }
      }
    }
  $view = 'views/blocFormView.php';
}




?>