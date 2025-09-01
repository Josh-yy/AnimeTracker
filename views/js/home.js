const button = document.querySelectorAll("[data-carousel-button]");

button.forEach(button =>{
    button.addEventListener("click", ()=>{
        const offset = button.dataset.carouselButton === "next" ? 1 : -1;
        const slides = button.closest("[data-carousel]").querySelector("[data-slides]");

        const acticeSlides = slides.querySelector("[data-active]")
        let newIndex = [...slides.children].indexOf(acticeSlides) + offset
        if(newIndex < 0) newIndex = slides.children.length - 1
        if(newIndex >= slides.children.length) newIndex = 0

        slides.children[newIndex].dataset.active = true
        delete acticeSlides.dataset.active
    });
});