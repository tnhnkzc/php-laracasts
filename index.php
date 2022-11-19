<?php
require 'functions.php';
// require 'router.php';
require 'Database.php';


// Create an instance of a new DB class.

$db = new Database();

$posts = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

// Connect to MySQL database.

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
