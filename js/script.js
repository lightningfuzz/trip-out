$( document ).ready(function() {
    
    $('#homeLink').on("click", function(){
        $('div li').removeClass('active')
        $( "li[name='home']" ).toggleClass('active');
        $('#mainContent').load('Views/home.php');
    });
    
    $('#aboutLink').on("click", function(){
        $('div li').removeClass('active')
        $( "li[name='about']" ).toggleClass('active');
        $('#mainContent').load('Views/about.html');
    });
});