<?php
$tasks = $app['database']->selectAll('todos');
require_once'views/index.view.php';
