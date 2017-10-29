<?php
  // We require the $_ENV variables and the connection to the database. We also require the initializers functions
  require_once('init.php');


?>
<html>
  <head>
    <title>RainbowBooks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/assets/javascripts/add-ons/materialize.min.js"></script>
    <link rel="stylesheet" href="public/assets/stylesheets/add-ons/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php add_assets(); ?>
  </head>

  <body>
    <?php require_once('app/views/layout/layout.php'); ?>

    <?php require_once('app/views/layout/footer.php'); ?>
  </body>
</html>
