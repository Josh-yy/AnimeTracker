<section aria-label="Top Airing Anime" id="topAiringAnimeSection" class="min-w-screen ">
    <div class="carousel" data-carousel>
        <button class="carousel-button-next secondary-button" data-carousel-button="next">></button>
        <button class="carousel-button-prev secondary-button" data-carousel-button="prev"><</button>
        <ul data-slides>
            <?php foreach($topAnimes['data'] as $index => $anime): ?>
                <li class="slide flex" <?= $index === 0 ? "data-active" : ""  ?>>
                    <div class="slide-image-container border">
                        <img class="slide-image w-full object-contain " src="<?= $anime['node']['main_picture']['large'] ?>" alt="<?= $anime['node']['title'] ?>">
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>

<!-- <div class="slide-details absolute w-[50%] left-0">
    <h1 class="text-6xl font-bold"><?= $anime['node']['title'] ?></h1>
    <p><?= $anime['node']['synopsis'] ?></p>
    <button class="primary-button">ADD</button>
</div> -->