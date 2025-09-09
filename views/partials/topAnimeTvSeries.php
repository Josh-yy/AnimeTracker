<section class="flex flex-col gap-6 mb-[5em]">
    <div class="flex items-end justify-between">
        <h1 class="text-2xl ">Top Anime TV Series</h1>
        <a href="/view-more?anime=tv" id="tv-series-view-more-button" class="flex items-center text-[var(--tint-text-white)] hover:text-white cursor-pointer">View more <i class='bx  bx-chevron-right' ></i> </a>
    </div>
    <div id="grid-container" class="flex gap-2">
        <?php foreach ($topTvSeries['data'] as $index => $anime): ?>
            <div id="tv-series-image" class="flex-1 relative group">
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
</section>