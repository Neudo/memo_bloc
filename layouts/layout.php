<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
       
        
        <?php 
        if($page != '404'){
           require_once ('partials/header.php'); 
        }
        ?>

        <?php if(isset($_SESSION['message'])):?>
            <?= $_SESSION['message']; ?>
        <?php endif; ?>


        <main>
            <?php require_once($view); ?>
        </main>
    </body>
</html>