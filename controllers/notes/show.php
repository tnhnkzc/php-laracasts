  <?php

  $config = require base_path('config.php');

  // Create an instance of a new DB class.

  $db = new Database($config['database']);

  $currentUserId = 4;


  $note = $db->query("select * from posts where id = :id", ['id' => $_GET['id']])->findOrFail();

  authorize($note['user_id'] === $currentUserId);

  view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
  ]) ?>