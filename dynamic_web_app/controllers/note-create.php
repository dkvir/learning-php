<?php 
require 'Validator.php';

$config = require 'config.php';
$db = new DataBase($config['database']);

$heading = 'Create A Note';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if(! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A Body of no more than 1,000 chars is required';
    };

    if(empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 2
        ]);
    }
};

require 'views/note.create.view.php'; 

?>