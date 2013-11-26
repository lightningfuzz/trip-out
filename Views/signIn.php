<div class="row">
    <div class="span5">
        <h3>Sign In</h3>
        <p>
        <form name="logon" action="index.php" method="POST" >
            Username: <input type="text" name="user"><br>
            Password: <input type="password" name="userpassword"><br>
            <div class="btn-group">
            <a href="" class="btn btn-primary" id="signInGoButton">
                Sign In
            </a>
            </div>
            <!-- <input class="btn btn-primary" type="submit" id="editButton" value="Sign In"> -->
        </form>
        </p>
    </div>
    <div class ="span5">
        <h3>Haven't Tripped Out?</h3>
        <div class="btn-group">
            <a href="#" class="btn btn-primary" id="registerGoButton">
                Register Now
            </a>
        </div>
    </div>
</div>

<!-- jQuery to load signUp.php page into mainContent div of index.php -->
<script>
    $('#registerGoButton').on("click",function(){
        $('div.row').parent().load('Views/signUp.php');
    });
</script>