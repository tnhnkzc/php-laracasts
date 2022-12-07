  <?php

  $config = require('config.php');

  // Create an instance of a new DB class.

  $db = new Database($config['database']);

  $heading = 'My Note';
  $currentUserId = 4;


  $note = $db->query("select * from posts where id = :id", ['id' => $_GET['id']])->findOrFail();

  authorize($note['user_id'] === $currentUserId);

  require 'views/note.view.php';
  ?>