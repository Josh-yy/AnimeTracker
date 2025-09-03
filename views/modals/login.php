<div id="modal-backdrop">
    <div id="login-modal" class="flex bg-[var(--tint-background-color)] w-[60%] items-center p-[3em] rounded-lg shadow-lg shadow-[var(--primary-color)]">
        <div class="flex flex-col gap-[2em] w-[50%] ">
            <div class="flex justify-center">
                <div class="w-[20%]">
                    <img src="/public/external/symbol.png" alt="logo">
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <h1 class="text-4xl font-bold">Welcome To <span class="text-shadow-lg text-shadow-[var(--primary-color)] text-[var(--primary-color)] text-nowrap">Anime Tracker</span></h1>
                <p class="text-sm">Keep all your favorite anime organized in one place. 
                    Log in to continue tracking what you’ve watched, discover new shows, and explore detailed information about each series. 
                    Stay connected with your anime journey anytime, anywhere.
                </p>
            </div>
            <div class="w-full login-image-con">
                <img src="/public/external/anime-bg.jpg" alt="anime background">
            </div>
        </div>
        <div class="flex flex-col justify-center items-center px-[5em] gap-[1em] w-[50%]">
            <h1 class="text-2xl">Sign up</h1>
            <div class="w-full">
                <label for="username">Username</label>
                <input id="username" class="input-field" name="" type="text">
            </div>
            <div class="w-full">
                <label for="password">Password</label>
                <input id="password" class="input-field" name="" type="password">
            </div>
            <label class="self-start" for="remember-me"><input id="remember-me" type="checkbox">Remember me</label>
            <button class="primary-button w-full">Sign up</button>
        </div>
    </div>
</div>