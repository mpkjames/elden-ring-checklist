<?php 

$config = require base_path('/config.php');
$db = new Database($config['database']);

// if someone is logged in, also get their boss checklist history
isset($_SESSION['loggedInUser']) ? $user_id = $_SESSION['loggedInUser'] : null;

$bossList = $db -> query(file_get_contents('controllers/queries/user_defeats_boss.sql'), [
    'user_id' => isset($_SESSION['loggedInUser']) ? $_SESSION['loggedInUser'] : null,
]) -> fetchAll();

require base_path('views/checklists/bosses.view.php');