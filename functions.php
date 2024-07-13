<?php 

// Debugging function
function dd($value) 
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// Simple function to concatenate the base directory to a given path (used in require statements mostly)
function base_path($path) {
    return BASE_PATH.$path;
}