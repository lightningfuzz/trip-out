<?php

function getValue($pname) {
        if(isset($_POST[$pname])){
		$pvalue = $_POST[$pname];
	} else {
		$pvalue = "";
	}
        return $pvalue;
}

$searchVal = getValue("txtSearch");
$reviewTp = getValue("reviewType");

	
    ?>
<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/reviewSearchResult.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body> 
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <div class ="container">
            <div style ="background-color:black;">
                <img src="../media/assets/images/tripOutLogo.jpg"/>
                <div class ="pull-right" style="padding-top:20px;color:white;">
                    Login: <input type="text" placeholder="username" name="tag" value="" />
                    <input type="password" placeholder="password" name="tag" value="" />
                    <br>
                        <div class="col-md-2" style="padding-top:5px;">
                            <button class ="btn btn-primary">Sign Up</button>
                        </div>
                        <div style = "text-align:right; float:right;padding-top:10px;padding-right:10px;">
                            <a href="" >forgot password?</a>
                        </div>
                </div>
            </div>
            <nav class="navbar navbar-inverse" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Write a Review</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
         <!--   <h3> Write a Review </h3> <br/>
            <p> Review a Destination (e.g., Attractions, Restaurants, Hotels, Events, All) you visited... </p>
            <br/> <br/> -->
            <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
                <div class="panel-heading">What would you like to review?</div>
                <div class="panel-body" align="center">
                    <form action="reviewSearchResult.php" method="post" class="form-inline" role="form">
                    <div style="padding-bottom:10px;">
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox1" name ="reviewType" value="option1" <?php if($reviewTp == "option1") echo "checked"; ?> > Attractions
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox2" name ="reviewType" value="option2" <?php if($reviewTp == "option2") echo "checked"; ?>> Restaurants
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox3" name = "reviewType" value="option3" <?php if($reviewTp == "option3") echo "checked"; ?>> Hotels
                            
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox4" name = "reviewType" value="option4" <?php if($reviewTp == "option4") echo "checked"; ?>> Events
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox5" name = "reviewType" value="option5" <?php if($reviewTp == "option5") echo "checked"; ?>> All
                        </label>
                    </div>
                    
                        <div class="form-group" style="width:40%;">
                          <input name="txtSearch" class="form-control"  placeholder="Enter search keywords" value="<?php echo $searchVal; ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
            </div>
            <hr>
            <br/>
            
            <!-- List of Review Search Results start here -->
            
    <div class ="box_reviewResult">
            
            <div class = "box_name">
                <h4>(1) Marina Bay Sands</h4>
                Landmark
            </div>
            
            <div class = "box_addr">
                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate3.png"/><img src="../media/images/rate2.png"/>
                <img src="../media/images/rate1.png"/> 7 reviews <br/>
                10 Bayfront Avenue <br/>
                Singapore 018956 <br/>
                +65 6688 8868
            </div>
            <div class ="box_button">
              <button type = "button" onclick = "window.open('review.php')" > Write a Review </button>
            </div>
            
        </div>
           
        <div class ="box_reviewResult">
            
            <div class = "box_name">
                <h4>(2) Marina Bay Sands</h4>
                Landmark
            </div>
            
            <div class = "box_addr">
                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate1.png"/><img src="../media/images/rate1.png"/>
                <img src="../media/images/rate1.png"/> 20 reviews<br/>
                10 Bayfront Avenue <br/>
                Singapore 018956 <br/>
                +65 6688 8868
            </div>
            <div class ="box_button">
              <button  type = "button" onclick = "window.open('review.php')" > Write a Review </button>
            </div>
            
        </div>
            
            
        <div class ="box_reviewResult">
            
            <div class = "box_name">
                <h4>(3) Marina Bay Sands</h4>
                Landmark
            </div>
            
            <div class = "box_addr">
                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate1.png"/> 29 reviews<br/>
                10 Bayfront Avenue <br/>
                Singapore 018956 <br/>
                +65 6688 8868
            </div>
            <div class ="box_button">
              <button type = "button" onclick = "window.open('review.php')" > Write a Review </button>
            </div>
            
        </div>
            
        <div class ="box_reviewResult">
            
            <div class = "box_name">
                <h4>(4) Marina Bay Sands</h4>
                Landmark
            </div>
            
            <div class = "box_addr">
                <img src="../media/images/rate3.png"/><img src="../media/images/rate1.png"/>
                <img src="../media/images/rate1.png"/><img src="../media/images/rate1.png"/>
                <img src="../media/images/rate1.png"/> 11 reviews<br/>
                10 Bayfront Avenue <br/>
                Singapore 018956 <br/>
                +65 6688 8868
            </div>
            <div class ="box_button">
              <button type = "button" onclick = "window.open('review.php')" > Write a Review </button>
            </div>
            
        </div>
            
        <div class ="box_reviewResult">
            
            <div class = "box_name">
                <h4>(5) Marina Bay Sands</h4>
                Landmark
            </div>
            
            <div class = "box_addr">
                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate3.png"/> 33 reviews<br/>
                10 Bayfront Avenue <br/>
                Singapore 018956 <br/>
                +65 6688 8868
            </div>
            <div class ="box_button">
              <button type = "button" onclick = "window.open('review.php')" > Write a Review </button>
            </div>
            
        </div>
            
        </div>
    </body>
</html>
