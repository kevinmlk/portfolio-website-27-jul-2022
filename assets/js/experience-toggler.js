// Work toggle-switcher
$('#toggle-work > li').click(function() {
    var ix = $(this).index();
    
    $('#education').toggle( ix === 0 );
    $('#experience').toggle( ix === 1 );
});
