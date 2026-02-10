<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Emuārs</title>
</head>
<body>

    <h1> CATEGORIES </h1>
    <form>
        <input name='search_query' />
        <button>Meklēt</button>
    </form>


<?php if (count($categories) == 0) { ?>
    <p>❌ Nav atrasts neviens ieraksts. 😭 Lūdzu, pamēģini citu vārdu vai frāzi 🐣</p>
<?php }

else { ?>
    <ul>
        <?php foreach($categories as $category) { ?>
        <li> <?= $category["category_name"] ?> </li>
        <?php } ?>
    </ul>
        <?php } ?>
    

</body>
</html>