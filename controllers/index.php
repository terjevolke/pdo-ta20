<?php
$tasks = $database->selectAll('todos');
require_once'views/index.view.php';
