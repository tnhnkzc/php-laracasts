  <?php

  $config = require('config.php');

  // Create an instance of a new DB class.

  $db = new Database($config['database']);

  $heading = 'My Notes';


  $notes = $db->query("select * from posts where user_id = 1")->get();




  require 'views/notes.view.php';
  ?>