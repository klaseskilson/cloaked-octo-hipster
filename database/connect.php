<?php

/**
 * connect to databse
 */

// include settings
require_once 'config.php';

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE) or die('Error: ' . mysqli_error($db));
