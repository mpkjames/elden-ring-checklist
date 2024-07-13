<?php 

$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check the db for the email address
    $currentUser = $db -> query('SELECT user_id, email, password_hash FROM user_management WHERE email = :email;', [
        'email' => $_POST['email']
    ]) -> fetch();
    // 
    if (!$currentUser) {
        $errors['msg'] = 'No such user.';
    } elseif ($_POST['password'] != $currentUser['password_hash']) {
        $errors['msg'] = 'Incorrect password.';
    }
    if (empty($errors)) {
        $_SESSION['loggedInUser'] = $currentUser['user_id'];
        header('location: /bosses');
        exit;
    }
}

require base_path('views/index.view.php');