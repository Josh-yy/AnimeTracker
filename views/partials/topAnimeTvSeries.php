<section class="top-full">
    <div class="flex justify-between">
        <div>
            <h1 class="text-2xl ">Top Anime TV Series</h1>
        </div>
        <div>
            <button class="text-[var(--tint-text-white)] hover:text-white">View more ></button>
        </div>
    </div>
    <div class="flex gap-2 relative">
        <?php foreach ($topTvSeries['data'] as $anime): ?>
            <div class="flex-1">
                <img class="w-full h-full object-cover object-center" src="<?= $anime['node']['main_picture']['medium'] ?>" alt="<?= $anime['node']['title'] ?>">
            </div>
            <div class="absolute bottom-full">
                <div>
                    <h1><?= $anime['node']['title'] ?></h1>
                    <h1><?= $anime['node']['alternative_title']['ja'] ?></h1>
                </div>
                <div>
                    <p><?= strtoupper($anime['node']['media_type']) ?></p>
                    <p class="flex items-end gap-1"> 
                        <?php  foreach ($anime['node']['studios'] as $studio): ?>
                        <?= strtoupper($studio['name']) ?>
                        <?php endforeach ?>
                    </p>
                    <p class="flex items-end gap-1">
                        </i> <?= strtoupper($anime['node']['rating']) ?>
                    </p>
                </div>
                <div>
                    <p><?= $anime['node']['synopsis'] ?></p>
                </div>
                <div>
                    <p>
                        Start date: <?= $anime['node']['start_date'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>