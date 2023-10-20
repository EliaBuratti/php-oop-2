<section id="Leash">
    <h4>Leash</h4>

    <div class="eb_cards row gap-2">

        <?php foreach ($category->leash as $value) : ?>

            <div class="card" style="width: 18rem;">
                <img src="<?= $value['cover'] ?>" class="card-img-top" alt="<?= $value['name'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $value['name'] ?></h5>
                    <p class="card-text">
                        <?= $value['description'] ?>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $value['category'] ?></li>
                    <li class="list-group-item"><?= $value['quantity'] ?></li>
                    <li class="list-group-item"><?= $value['brand'] ?></li>
                    <li class="list-group-item"><?= $value['price'] ?></li>
                    <li class="list-group-item"><?= $value['leash_size'] ?></li>
                    <li class="list-group-item"><?= $value['leash_color'] ?></li>

                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</section>