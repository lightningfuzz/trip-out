$( document ).ready(function() {
    /*$('#createDestinationLink').on("click", function(){
       if($('#navbar').has().children('#signIn')){
            alert('You must sign in to create a destination!');
       }
    });*/
    
    $('#imagesLink').on("click", function(){
        $('#videos').hide();
        $('#images').show();
        return false;
    })
    
    $('#videosLink').on("click", function(){
        $('#images').hide();
        $('#videos').show();
        return false;
    })
    
    $('#allLink').on("click", function(){
        $('#images').show();
        $('#videos').show();
        return false;
    })
});