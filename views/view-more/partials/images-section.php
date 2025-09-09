<div id="grid-container" class="grid grid-cols-[repeat(auto-fit,minmax(13em,1fr))] gap-2">
    <?php foreach ($animes['data'] as $index => $anime): ?>
        <div class="relative  group">
            <img class="w-full h-full object-cover object-center" src="<?= $anime['node']['main_picture']['medium'] ?>" alt="<?= $anime['node']['title'] ?>">
            <div class="hover-details group-hover:flex z-[100] bottom-[50%] left-[110%]  absolute p-3 flex-col gap-3 bg-[var(--tint-background-color)] hidden">
                <div>
                    <div class="flex gap-6 justify-between items-center text-nowrap">
                        <h1 class="text-xl">
                            <?= $anime['node']['title'] ?>
                        </h1>
                        <h1 class="flex items-center gap-2">
                            <i class='bx  bx-star'  ></i> 
                            <?= $anime['node']['mean'] ?? "N/A" ?>
                        </h1>
                    </div>
                    <h1 class="text-[var(--tint-text-white)]"><?= $anime['node']['alternative_titles']['ja'] ?></h1>
                </div>
                <div class="flex gap-2 text-nowrap">
                    <p><?= strtoupper($anime['node']['media_type']) ?></p>
                    <p class="text-[var(--tint-text-white)]">•</p>
                    <p class="flex items-end text-center gap-1 line-clamp-1"> 
                        <?php  foreach ($anime['node']['studios'] as $studio): ?>
                        <?= $studio['name'] ?>
                        <?php endforeach ?>
                    </p>
                    <p class="text-[var(--tint-text-white)]">•</p>
                    <p class="flex items-end gap-1">
                        </i> <?= strtoupper($anime['node']['rating']) ?>
                    </p>
                    <p class="text-[var(--tint-text-white)]">•</p>
                    <p class="flex items-end gap-1">
                        </i> <?= $anime['node']['average_episode_duration'] ?>
                    </p>
                </div>
                <div>
                    <p class="line-clamp-3 text-sm text-[var(--tint-text-white)]"><?= $anime['node']['synopsis'] ?></p>
                </div>
                <div>
                    <p>
                        Episodes: <?= $anime['node']['num_episodes'] ?>
                    </p>
                    <p>
                        Start date: <?= $anime['node']['start_date'] ?>
                    </p>
                    <p>
                        Status: <?= $anime['node']['status'] ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>