$(document).ready(function(){
  
    $(document).on("click", "#profile-open", function () {
        $('#profile-dropdown').toggleClass('hidden');
        toggleChev($(this).find('i'));
    });

    function toggleChev($icon) {
        if ($icon.hasClass('bx-chevron-down')) {
            $icon.removeClass('bx-chevron-down').addClass('bx-chevron-up');
        } else {
            $icon.removeClass('bx-chevron-up').addClass('bx-chevron-down');
        }
    }

    $(document).on("click", "#logout-button", function(){

        $.ajax({
            url: "/logout",
            method: "POST",
            success: function(response){
                $('#navigation-buttons').load(location.href + " #navigation-buttons > *");
                $('#navigation-success-message').html("")
                $('#navigation-success-message').html(response)

                setTimeout(function(){
                        $('#navigation-success').toggleClass('hidden');
                    }, 8000);

                $('#navigation-success').toggleClass('hidden');
            }
        })
    });


});