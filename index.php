<?php 

const BASE_PATH = __DIR__.'/';

session_start();

require('functions.php');
require('Database.php');

// router should be last
require('router.php');