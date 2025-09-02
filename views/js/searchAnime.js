$(document).ready(function(){
    let searchTimer;
    const dropdownContent = $("#search-dropdown");
    $(document).on("input", "#search-input", function() {

        clearTimeout(searchTimer);
        const query = $(this).val();
        
        searchTimer = setTimeout(() => {
            searchAnime(query);
        }, 500);
        
    });

    function searchAnime(query){
            if(query.length > 2){
                $.ajax({
                    url: "/search",
                    method: "POST",
                    data: { search: query },
                    success: function(response) {
                        
                        dropdownContent.empty();
                        console.log(response)
                        response.forEach(anime => {
                            dropdownContent.append(`
                                <div class="flex justify-between gap-2 p-2 border-b bg-[var(--tint-background-color)]">
                                    <div>
                                        <div>
                                            <p class="text-lg">${anime.node.title}</p>
                                            <p class="text-lg">${anime.node.alt_title ?? ""}</p>
                                        </div>

                                        <div class="flex gap-2">
                                            <p>${anime.node.media_type.toUpperCase()} •</p>
                                            <p>
                                                ${anime.node.studios.map(studio => studio.name.toUpperCase()).join(", ")} •
                                            </p>
                                            <p>${anime.node.rating.toUpperCase()}</p>
                                        </div>
                                    </div>
                                    <div class="w-[5em]">
                                        <img src="${anime.node.main_picture.medium}" alt="">
                                    </div>  
                                </div>
                            `);
                        });

                        dropdownContent.removeClass("hidden");
                    },
                });
            }else{
                dropdownContent.addClass("hidden");
            }  
        }

});