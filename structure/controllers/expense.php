<?php

$heading = 'Expense Details';
require     'views/partials/nav.view.php';
require 'views/partials/banner.view.php';
$config = require 'config.php';
$currentUserId = 1;

$db = new Database($config['database']);

$expense = $db->query(
    'select * from expenses where id = :id ',
    [
        'id' => $_GET['id'],
        // 'userId' => $currentUserId

    ]
)->fetch();

if (!$expense) {
    abort();
}

if ($expense['userId'] !== $currentUserId) {
    abort(StatusCode::FORBIDDEN);
}

require('views/expense.view.php');
