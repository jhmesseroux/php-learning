<?php
$books2 = [
    [
        'name' => "Harry Potter",
        'author' => "J. K. Rowling",
        'price' => 200

    ],
    [
        'name' => "The Lord of the Rings",
        'author' => "J. R. R. Tolkien",
        'price' => 300
    ],
    [
        'name' => "The Alchemist",
        'author' => "Paulo Coelho",
        'price' => 400

    ],
    [
        'name' => "The Da Vinci Code",
        'author' => "Dan Brown",
        'price' => 500

    ]
];

function filterByAuthor($books)
{
    # filters to the books and return those that are written by J. K. Rowling
    $filtered = array_filter($books, function ($book) {
        return $book['author'] == 'J. K. Rowling';
    });
    return $filtered;
}

$books = [
    "Harry Potter",
    "The Lord of the Rings",
    "The Alchemist",
    "The Da Vinci Code"
];

require 'index.view.php';
