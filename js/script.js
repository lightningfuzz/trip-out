$id ='';
$(document).ready( function() {
    //$("#mainContent").load('pages/main.html')
    $("#aboutLink").on("click", function() {
        $("#mainContent").load('pages/about.html');
    });
    
    $("#homeLink").on("click", function() {
        $("#mainContent").load('pages/main.html');
    });
    $("#signInUpLink").on("click", function() {
        $("#mainContent").load('signIn.php');
    });
    
    $("#registerButton").on("click", function() {
        $("#mainContent").load('signUp.php');
    });
    
    $("#editReviewLink").on("click", function() {
        $("#mainContent").load('editReviewList.php');
    });
    
    //todo destroy user cookie on logout!
    $("#logoutLink").on("click", function() {
    });
    
    
    /*$("form").submit(function() {
        $.post($(this).attr("action"), $(this).serialize(), function(data) {
            $("#mainContent").html(data);
        });
        return false; // prevent normal submit
    });
    */
});