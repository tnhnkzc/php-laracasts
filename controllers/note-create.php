<?php

require 'Validator.php';
$config = require('config.php');

// Create an instance of a new DB class.

$db = new Database($config['database']);

$heading = "Create a note";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];


  if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required.';
  }

  if (empty($errors)) {
    $db->query('INSERT INTO posts(body, user_id) VALUES(:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 4,
    ]);
  }
}





require 'views/note-create.view.php';
