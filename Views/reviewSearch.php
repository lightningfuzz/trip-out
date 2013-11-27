
<h3> Write a Review </h3> <br/>
<p> Review a Destination (e.g., Attractions, Restaurants, Hotels, Events, All) you visited... </p>
<br/> <br/>
<div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
    <div class="panel-heading">What would you like to review?</div>
    <div class="panel-body" align="center">
         <form action="Views/reviewSearchResult.php" method="get" class="form-inline" role="form">
        <div style="padding-bottom:10px;">
            <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox5" name="type" value="0" checked> All
            </label>
            <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox1" name="type" value="1"> Attractions
            </label>
            <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox2" name="type" value="2"> Restaurants
            </label>
            <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox3" name="type" value="3"> Hotels
            </label>
            <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox4" name = "type" value = "4"> Shopping
            </label>
            <label class="checkbox-inline">
                <input type="radio" id="inlineCheckbox6" name="type" value="5"> Events
            </label>
        </div>
            <div class="form-group" style="width:40%;">
              <input name="searchString" class="form-control"  placeholder="Enter search keywords" value="">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
    </div>
</div>
