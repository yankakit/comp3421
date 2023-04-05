$( document ).ready(function() {
    if($('#cart-btn')!='undefined'){
        $('#cart-btn').click(function(e){
            e.preventDefault();
            $(".cart-menu,.dark-overlay").addClass('active');
        });
        $('#close').click(function(e){
            e.preventDefault();
            $(".cart-menu,.dark-overlay").removeClass('active');
        });
    }
});