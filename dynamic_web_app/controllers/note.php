<?php 

$config = require 'config.php';
$db = new DataBase($config['database']);

$heading = 'Note';

$note = $db->query('select * from notes Where id = :id', ['id' => $_GET['id']])->fetch();
require 'views/note.view.php'; 

?>