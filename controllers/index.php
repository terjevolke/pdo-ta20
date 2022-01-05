<?php
//$tasks = $app['database']->selectAll('todos');
$users = $app['database']->selectAll('users');
require_once'views/index.view.php';
