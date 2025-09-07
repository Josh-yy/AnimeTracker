<section aria-label="Intro" id="carousels" class="mt-6 min-h-[80vh]">
    <div class="carousel" data-carousel>
        <button class="carousel-button-next secondary-button py-4 " data-carousel-button="next">></button>
        <button class="carousel-button-prev secondary-button py-4 " data-carousel-button="prev"><</button>
        <ul data-slides>
            <?php foreach($topAnimes['data'] as $index => $anime): ?>
                <li class="slide flex  rounded justify-end items-end" <?= $index === 0 ? "data-active" : ""  ?>>
                    <div class="slide-details absolute z-[150] w-[50%] left-0 flex flex-col gap-5">

                        <h1 class="text-[var(--primary-color)] font-bold">#<?= $index + 1 ?> Airing</h1>

                        <h1 class="text-5xl font-bold"><?= $anime['node']['title'] ?></h1>

                        <div class="flex gap-2 items-center">
                            <p class="flex items-end gap-1">
                                <i style="font-size: 1.5em;" class='bx bx-tv'></i> <?= strtoupper($anime['node']['media_type']) ?>
                            </p>
                            <p class="flex items-end gap-1"> 
                                <i style="font-size: 1.5em;" class='bx bx-building'  ></i> 
                                <?php  foreach ($anime['node']['studios'] as $studio): ?>
                                <?= strtoupper($studio['name']) ?>
                                <?php endforeach ?>
                            </p>
                            <p class="flex items-end gap-1">
                                <i style="font-size: 1.5em;" class='bx  bx-film'  ></i> </i> <?= strtoupper($anime['node']['rating']) ?>
                            </p>
                        </div>

                        <p><?= $anime['node']['synopsis'] ?></p>

                        <div class="flex gap-2 justify-end">
                            <button class="primary-button">Add to list</button>
                            <button class="secondary-button">View Details</button>
                        </div>
                    </div>
                                
                    <div class="slide-image-container w-[60%]">
                        <img class="slide-image w-[100%] h-[45em] object-cover object-top" src="<?= $anime['node']['main_picture']['large'] ?>" alt="<?= $anime['node']['title'] ?>">
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>

