  <?php

  $config = require base_path('config.php');

  // Create an instance of a new DB class.

  $db = new Database($config['database']);



  $notes = $db->query("select * from posts where user_id = 4")->get();




  view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
  ])
  ?>