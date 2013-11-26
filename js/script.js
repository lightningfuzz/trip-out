$( document ).ready(function() {
    
    $('#homeLink').on("click", function(){
        $('div li').removeClass('active')
        $( "li[name='home']" ).toggleClass('active');
        $('#mainContent').load('Views/home.php');
    });
    
    $('#writeReviewLink').on("click", function(){
        $('div li').removeClass('active')
        $( "li[name='writeReview']" ).toggleClass('active');
        $('#mainContent').load('Views/reviewSearch.php');
    });
    $('#aboutLink').on("click", function(){
        $('div li').removeClass('active')
        $( "li[name='about']" ).toggleClass('active');
        $('#mainContent').load('Views/about.html');
    });
});