<?php
class Database
{
    private  $connection;

    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' .  http_build_query($config, '', ';');
        // $dsn = 'mysql:host=localhost;port=3306;user=root;charset=utf8mb4;dbname=demo';
        // dd($dsn);
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params  = [])
    {
        $statement =  $this->connection->prepare($query);
        $statement->execute($params);

        // $statement = $this->connection->query($query);
        return $statement;
    }
}
