<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Demo</title>
</head>

<body>
    <h1>Heloo</h1>

    <h1>
        <span>Variable and string </span>

        <?php
        echo "Hello World";
        $name = "John Doe";
        echo "<br>";
        echo $name;
        $age = 20;
        echo "Hello $name you are $age years old";
        echo ""
        ?>
    </h1>
    <hr>
    <div class="">
        <h1>If statement</h1>
        <?php

        $read = false;
        if ($read) {
            echo "I will read";
        } else {
            echo "I will not read";
        }

        ?>
    </div>
    <hr>
    <div class="arrays">
        <h1>Arrays</h1>

        <ul>
            <?php

            foreach ($books as $book) {
                echo "<li>$book</li>";
            }
            ?>
        </ul>
        <ul>
            <?php
            foreach ($books as $book) : ?>
                <li><?= $book ?></li>

            <?php endforeach; ?>


        </ul>
        <ul>
            <?php
            foreach ($books as $book) {
                echo "<li>{$book}&copy</li>";
            }
            ?>
        </ul>
    </div>
    <hr>
    <div class="associative-arrays">
        <h1>Associative arrays</h1>


        <ul>
            <?php
            foreach ($books2 as $book) {
                echo "<li>{$book['name']} by {$book['author']} costs {$book['price']}</li>";
            }
            ?>
        </ul>
    </div>

    <hr>

    <div class="functions-filters">
        <h1>arrays functions and filters</h1>


        <ul>
            <?php
            foreach (filterByAuthor($books2) as $book) {
                echo "<li>{$book['name']} by {$book['author']} costs {$book['price']}</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>