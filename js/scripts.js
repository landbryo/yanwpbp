//////////////////
// GOOGLE FONTS //
//////////////////
WebFontConfig = {
    google: { families: [ 'Open+Sans', 'Vollkorn' ] }
};
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();
//////////
// MENU //
//////////
jQuery( ".cross" ).hide();
jQuery( ".menu" ).hide();

jQuery( ".hamburger" ).click(function() {
    jQuery( ".menu" ).slideToggle( "slow", function() {
        jQuery( ".hamburger" ).hide();
        jQuery( ".cross" ).show();
    });
});
    
jQuery( ".cross" ).click(function() {
    jQuery( ".menu" ).slideToggle( "slow", function() {
        jQuery( ".cross" ).hide();
        jQuery( ".hamburger" ).show();
    });
});