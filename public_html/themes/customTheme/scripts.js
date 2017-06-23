$(document).ready(function() {
    $(".scrollLink").click(function(e) {

        $.scrollTo($(this).attr("href"));    
        e.preventDefault();
        
    });
});