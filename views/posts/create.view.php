<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1 class="virsraksts">Izveidot bloga ierakstu!</h1>

<form method="POST">

    <label for="content">Saturs</label>
    <input 
        type="text" 
        name="content" 
        id="content"
        value="<?= $_POST['content'] ?? '' ?>"
    />
    <?php if (isset($errors["content"])) { ?>
        <p class="error"><?= $errors["content"] ?></p>
    <?php } ?>
    <button>POST</button>
</form>

<?php require "views/components/footer.php"; ?>