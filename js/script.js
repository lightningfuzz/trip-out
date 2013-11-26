$( document ).ready(function() {
    $('#aboutLink').on("click", function(){
        $('div li').removeClass('active')
        $( "li[name='about']" ).toggleClass('active');
        $('#mainContent').load('Views/about.html');
    });
});