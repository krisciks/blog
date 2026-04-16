<?php
$pageTitle = "Izveidot bloga ierakstu";

$customStyles = "create.css";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];
    if (
        !isset($_POST["content"]) ||
        strlen($_POST["content"]) === 0 ||
        strlen($_POST["content"]) > 50
    ) {
        $errors["content"] = "Saturs nav ievadīts, vai rakstzīmes ir vairāk par 50!";
    }
    if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

require "./views/posts/create.view.php";