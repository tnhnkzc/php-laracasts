<?php
require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

// Create an instance of a new DB class.

$db = new Database($config['database']);

$posts = $db->query("select * from posts")->fetchAll();

// Connect to MySQL database.

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
