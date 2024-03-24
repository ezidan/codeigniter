<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Articles<?= $this->endSection() ?>

<?= $this->section("content") ?>
    <h1>Welcome Articles Page</h1>


        <h1><?= $article['title']?></h1>
        <p><?= $article['content']?></p>

<?= $this->endSection() ?>