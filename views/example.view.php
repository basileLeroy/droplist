<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/title.php'; ?>

<main>
    <h2>This is the Example page</h2>

    <div class="gallery">
        <?php foreach ($pokemons as $pokemon) : ?>
            <div class="card <?= $pokemon->isRare() ? 'rare' : '' ?>">
                <img src='<?= $pokemon->image ?>' alt='<?= $pokemon->name ?>'>
                <h3><?= $pokemon->name ?></h3>
                <p>Type: <?= $pokemon->type ?></p>
                <p>Rarity: <strong><?= $pokemon->rarity ?></strong></p>
            </div>
        <?php endforeach; ?>

    </div>
</main>

<?php require 'partials/footer.php'; ?>