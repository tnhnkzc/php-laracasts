  <?php

  $config = require('config.php');

  // Create an instance of a new DB class.

  $db = new Database($config['database']);

  $heading = 'My Note';


  $note = $db->query("select * from posts where id = :id", ['id' => $_GET['id']])->fetch();




  require 'views/note.view.php';
  ?>