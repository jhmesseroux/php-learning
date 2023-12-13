<?php
require 'helpers/functions.php';
require('StatusCode.php');
// dd($_SERVER);
// echo isUrl('/')

// have to import first the database because im using in the routes 
require 'Database.php';

require 'router.php';

// dd($config['database']);

// $db = new Database($config['database']);

// $expenses = $db->query('select * from expenses')->fetchAll();
// $db = new PDO('mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4;user=root');

// $statement =  $db->prepare('select * from expenses');
// $statement->execute();
// $expenses = $statement->fetchAll(PDO::FETCH_ASSOC);
// dd($expenses);
// dd($_GET);

// foreach ($expenses as $exp) {
//     echo "<li> {$exp['id']} {$exp['description']} | $ {$exp['amount']}</li>";
// }
// $id = $_GET['id'];
// $query = "select * from expenses where id = ? ";
// $query = "select * from expenses where id = :id ";

// dd($query);
// $expense = $db->query($query, [$id])->fetch();
// $expense = $db->query($query, ['id' => $id])->fetch();
// $expense = $db->query($query, [':id' => $id])->fetch();


// dd($expense);
// echo '</hr>';
// echo $expense['amount'];
