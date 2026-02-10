<?php
$pageTitle = "Emuārs - kategorijas";

$customStyles = "categories.css";

$sql_query = "SELECT * FROM categories";
$params = [];

if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") { 
    $sql_query = "SELECT * FROM categories WHERE category_name LIKE :search";
    $params["search"] = "%" . trim($_GET["search_query"]) . "%";
}

$categories = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

require "./views/categories.view.php";
