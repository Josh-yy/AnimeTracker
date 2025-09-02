$(document).ready(function(){
    
    $(document).on("input", "#search-input", function() {
         const dropdownContent = $("#search-dropdown");
        if($(this).val().length > 0){
            dropdownContent.removeClass("hidden");
        }else{
            dropdownContent.addClass("hidden");
        }  
    });

});