<?php 

$heading = 'Expenses';
require     'views/partials/nav.view.php';
require 'views/partials/banner.view.php';
$config = require 'config.php';

$db = new Database($config['database']);

$expenses = $db->query('select * from expenses')->fetchAll();

// dd($expenses);

require('views/expenses.view.php');