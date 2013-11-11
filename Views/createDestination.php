<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create a Destination</title>
    </head>
    <body>
        <h2>Create a Destination</h2>
        <p>Enter a Destination</p>
        <form method="post" action="">
            <textarea name="search" cols="25" rows="1">Search for Destination</textarea>
            
            <select>
                <option value="Attractions">Attractions</option>
                <option value="Events">Events</option>
                <option value="Hotels">Hotels</option>
                <option value="Restaurants">Restaurants</option>
                <option value="all">All</option>
            </select> 
            <input type="submit" value="search!" /> <br><br>
            <p>Title of your Review</p>
            <textarea name="thereview" cols="50" rows="1">Title</textarea>
            <p>Your Review</p>
            <textarea name="review" cols="50" rows="20">Write your review here!
            </textarea><br>
            <input type="submit" value="Submit" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
