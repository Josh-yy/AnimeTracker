<div id="modal-backdrop" class="hidden">
    <div id="login-modal" class="relative flex bg-[var(--tint-background-color)] w-[60%] items-center p-[3em] rounded-lg shadow-lg shadow-[var(--primary-color)]">
        <button id="close-modal" class="absolute top-[1em] right-[1em]"><i style="color: var(--primary-color); font-size: 2.5em; font-weight: bold;" class='bx bx-x'></i></button>
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

        <div class="flex absolute w-[50%] right-0 justify-center items-center">
            <div id="sign-in-modal" class="flex flex-col px-[5em] absolute dataMistShow">
                <form id="sign-in-form" class="flex flex-col gap-[1em] ">
                    <div class="flex flex-col justify-center relative mb-6">
                        <img class="bocchi w-[20em] self-center object-cover" src="/public/external/bocchi.png" alt="bocchi bg">
                        <h1 class="text-3xl font-bold absolute bottom-0 left-[35%] z-100 text-center text-shadow-2xl text-[var(--primary-color)] mt-[-1em]">Sign in</h1>
                    </div>
                    <div class="w-full">
                        <label for="username">Username</label>
                        <input id="username" class="input-field" name="" type="text">
                        <p id="sign-in-error-message" class="text-sm font-bold text-red-500 mt-1"></p>
                    </div>
                    <div class="w-full">
                        <label for="password">Password</label>
                        <input id="password" class="input-field" name="" type="password">
                    </div>
                    <label class="self-start" for="remember-me"><input id="remember-me" type="checkbox">Remember me</label>
                    <button id="sign-in-submit-button" type="button" class="primary-button w-full">Sign in</button>
                    <p class="text-center">Don't have an account? <button type="button" id="sign-up-button-modal" class="text-[var(--primary-color)]">Sign up</button></p>
                </form>
            </div>

            <div id="sign-up-modal" class="flex flex-col px-[5em] absolute dataMistHide">
                <form id="sign-up-form" class="flex flex-col gap-[1em] ">
                    <div class="flex flex-col justify-center relative mb-6">
                        <img class="bocchi w-[20em] self-center object-cover" src="/public/external/one_piece.png" alt="one piece bg">
                        <h1 class="text-3xl font-bold absolute bottom-0 left-[35%] z-100 text-center text-shadow-2xl text-[var(--primary-color)] mt-[-1em]">Sign up</h1>
                    </div>
                    <div class="w-full">
                        <label for="username">Username</label>
                        <input id="username" class="input-field" name="username" type="text" required>
                        <p id="sign-up-error-message" class="text-sm font-bold text-red-500 mt-1"></p>
                    </div>
                    <div class="w-full">
                        <label for="password">Password</label>
                        <input id="password" class="input-field" name="password" type="password" required>
                    </div>
                    <div class="w-full">
                        <label for="password_confirmation">Confirm Password</label>
                        <input id="password_confirmation" class="input-field" name="password_confirmation" type="password" required>
                    </div>
                    <button id="sign-up-submit-button" type="button" class="primary-button w-full">Sign up</button>
                    <p class="text-center">Already have an account? <button type="button" id="sign-in-button-modal" class="text-[var(--primary-color)]">Sign in</button></p>
                </form>
            </div>
        </div>
    </div>
</div>