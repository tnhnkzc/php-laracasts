  <?php

  $config = require('config.php');

  // Create an instance of a new DB class.

  $db = new Database($config['database']);

  $heading = 'My Note';
  $currentUserId = 1;


  $note = $db->query("select * from posts where id = :id", ['id' => $_GET['id']])->fetch();


  if (!$note) {
    abort();
  }

  if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
  }

  require 'views/note.view.php';
  ?>