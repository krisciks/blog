<?php
require_once "functions.php";


$dsn = "mysql:host=localhost;user=root;dbname=blog;charset=utf8mb4";

$pdo = new PDO($dsn);
var_dump($pdo);


// ... Savienošanās ar datu bāzi ...

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<ul>";
    // Te būs cikls
    foreach($posts as $post) {
        // Te izvadīs katru ierakstu
        echo "<li>" . $post["content"] . "</li>";
    }
echo "</ul>";










