<?php
require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require('config.php');

// Create an instance of a new DB class.

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "select * from posts where id=:id";


$posts = $db->query($query, ['id' => $id])->fetchAll();

// Connect to MySQL database.

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
