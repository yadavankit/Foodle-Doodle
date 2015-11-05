
$( document ).ready(function()
{
    //Window Scrolls...then fire this closure
    $(window).scroll(function()
    {
        //Fix the Checkout Box
        $('.checkoutBox').css(
            {
            position: 'fixed',
            width: 443
            });
    });
});