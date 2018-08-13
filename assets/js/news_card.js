$(document).ready(function ($) {
    
    /** Team Member Switch Layout Style **/
    $(".select button").click(function (e) {
        e.preventDefault();
        var oself = $(this);
        var dispstyle = oself.text();
        
        $(".card").hide();
        $(".select button").removeClass('alt');
        oself.addClass('alt');
        $("."+dispstyle).fadeIn();
    });
    $("#layout-all").click(function (e) {
        e.preventDefault();

        $(".card").hide();
        $(".card").fadeIn();
    });
        
    /** Team Member Search **/
    $("#team-search-box").keyup(function (e) {
        e.preventDefault();
        var id_str = $(this).val().toLowerCase();
        
        $(".post-content h2").each(function (){
            ck_str = $(this).text().toLowerCase();

            if(ck_str.indexOf(id_str) < 0) {
                $(this).parents('.card').hide();
            }
        });
    });

});
