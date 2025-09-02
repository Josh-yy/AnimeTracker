<nav class="flex justify-between">
    <div class="flex items-center w-[30%] gap-6">
        <div class="w-[20%]">
            <img class="object-contain" src="/public/external/Logo_Transparent_BG_v1.png" alt="Logo Picture">
        </div>
        <div class="dropdown w-full relative">
            <div class="flex relative">
                <input id="search-input" name="search-input" class="px-5 py-2 w-full text-black" type="text" placeholder="Search Anime">
                <button class="search-filter-button"><i class='bx bx-slider'></i></button>
            </div>
            <div id="search-dropdown" class="flex w-full flex-col absolute text-nowrap z-[200] hidden">
                <?php foreach ($searchAnime['data'] as $anime): ?>
                    <div class="flex justify-between gap-2 p-2 border-b gap-2 bg-[var(--tint-background-color)]">
                        <div>
                            <div>
                                <p class="text-lg"><?= $anime['node']['title'] ?></p>
                                <p class="text-lg"><?= $anime['node']['alternative_titles']['ja'] ?? "" ?></p>
                            </div>

                            <div class="flex">
                                <p>
                                    <?= strtoupper($anime['node']['media_type']) ?> •
                                </p>
                                <p>  
                                    <?php  foreach ($anime['node']['studios'] as $studio): ?> 
                                    <?= strtoupper($studio['name']) ?>
                                    <?php endforeach ?>
                                    •
                                </p>
                                <p>
                                    </i> </i> <?= strtoupper($anime['node']['rating']) ?>
                                </p>
                            </div>
                        </div>
                        <div class="w-[5em]">
                            <img src="<?= $anime['node']['main_picture']['medium'] ?>" alt="">
                        </div>  
                          
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="flex gap-2">
        <button class="primary-button">Login</button>
        <button class="secondary-button">Register</button>
    </div>
</nav>