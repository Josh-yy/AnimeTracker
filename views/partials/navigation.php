<nav class="flex justify-between">
    <div class="flex items-center w-[30%] gap-6">
        <div class="w-[20%]">
            <a href="/"><img class="object-contain" src="/public/external/Logo_Transparent_BG_v1.png" alt="Logo Picture"></a>
        </div>
        <div class="dropdown w-full relative">
            <div class="flex relative">
                <input id="search-input" name="search-input" class="px-5 py-2 w-full text-black" type="text" placeholder="Search Anime" autocomplete="off">
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
    <div  class="flex gap-6">
        <div id="navigation-success" class="flex gap-2 items-center text-green-800 bg-green-100 py-[0] px-5 rounded shadow hidden">
            <i class='bx bx-check-circle text-lg '  ></i>
            <p id="navigation-success-message" class="text-sm "></p>
        </div>
        <div id="navigation-buttons" class="flex gap-2 items-center ">
            <?php if(isset($_SESSION['user_login'])): ?>
                <div class="flex flex-col relative">
                    <button id="profile-open" class="text-md text-[var(--primary-color)] flex gap-2 items-center">
                        Josh <i class='text-2xl bx  bx-chevron-down'  ></i> 
                    </button>
                    <div id="profile-dropdown" class="hidden absolute z-[500] top-full right-0 bg-[var(--tint-background-color)] flex flex-col shadow rounded text-[var(--tint-text-white)]">
                        <div class="border-b border-[var(--border-color)] px-5 py-2 hover:bg-[var(--border-color)] hover:text-white">
                            <button class="flex gap-2 text-nowrap items-center">
                                <i class='bx  bx-list-ul'  ></i> Anime list
                            </button>
                        </div>
                        <div class="px-5 py-2 text-red-500 hover:bg-[var(--border-color)] hover:text-red-400">
                            <button id="logout-button" class="flex gap-2 text-nowrap  items-center">
                                <i class='bx  bx-arrow-from-left-stroke'  ></i> Logout
                            </button>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <button id="log-in-button" class="primary-button">Login</button>
                <button id="sign-up-button" class="secondary-button">Register</button>
            <?php endif ?>
        </div>
    </div>
</nav>