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
$searchTp = getValue("searchType");

	
    ?>
<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" type = "text/css" href = "../css/searchResult.css">
    </head>

    <body> 
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <div class ="container">
            <div style ="background-color:black;">
                <img src="../media/assets/images/tripOutLogo.jpg"></img>
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
            
            <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
                <div class="panel-heading">Plan Your Trip </div>
                <div class="panel-body" align="center">
                    <form action="searchResult.php" method="post" class="form-inline" role="form">
                    <div style="padding-bottom:10px;">
                        
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox5" name = "searchType" value="option5" <?php if($searchTp == "option5") echo "checked"; ?>> All
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox1" name ="searchType" value="option1" <?php if($searchTp == "option1") echo "checked"; ?> > Attractions
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox2" name ="searchType" value="option2" <?php if($searchTp == "option2") echo "checked"; ?>> Restaurants
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox3" name = "searchType" value="option3" <?php if($searchTp == "option3") echo "checked"; ?>> Hotels
                            
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox4" name = "searchType" value="option4" <?php if($searchTp == "option4") echo "checked"; ?>> Events
                        </label>
                        
                    </div>
                    
                        <div class="form-group" style="width:40%;">
                          <input name="txtSearch" class="form-control"  placeholder="Enter search keywords" value="<?php echo $searchVal; ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Search Destinations</button>
                    </form>
                </div>
            </div>
            
            <!-- Filter By (left_pane)
            
            <div class = "left_pane">
			<h4> Filter By <?php echo $searchVal;?>: </h4>			
				
			<input type = "checkbox" name = "filter" value = "Landmarks"> Landmarks <br/>
			<input type = "checkbox" name = "filter" value = "Museums"> Museums <br/>
			<input type = "checkbox" name = "filter" value = "Parks"> Parks <br/>
			<input type = "checkbox" name = "filter" value = "Beach"> Beach <br/>
			<input type = "checkbox" name = "filter" value = "Shopping"> Shopping <br/>
					
		</div>
		
            -->
		<div class = "content">
                    
			<h3 style = "color: green"> Search Results of "<?php echo $searchVal;?>" </h3> 
			<p style = "text-align: right; padding-right: 200px"> Showing 1 - 5 out of 10 </p> <br/>
			<div class = "destination">
                                <div class ="search_name"> 
				<img src = "../media/images/landmark1.jpg" width = "150" height = "100" style = "float: left; margin: 5px;">			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
					<h4> (1) Marina Bay Sands </h4> 
				</a>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate1.png"/>
                                 <img src="../media/images/rate1.png"/><img src="../media/images/rate1.png"/>
                                 <img src="../media/images/rate1.png"/> 10 reviews<br/>
				&nbsp; Landmarks
                            </div>
                            <div class ="search_addr">
                                10 Bayfront Avenue <br/>
                                Singapore 018956 <br/>
                                +65 6688 8868
                            </div>
				<p style = "float: left; clear: both">
					Marina Bay Sands is newly built last three years ago and became one of the landmarks of Singapore! 
				</p>					
			</div>

			<div class = "destination">
                                <div class ="search_name"> 
				<img src = "../media/images/twinTower.jpg" width = "150" height = "100" style = "float: left; margin: 5px;">			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
					<h4> (2) Twin Tower </h4> 
				</a>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate1.png"/>
                                 <img src="../media/images/rate1.png"/> 43 reviews<br/>
				&nbsp; Landmarks
                            </div>
                                        <div class ="search_addr">
                                          10 Bayfront Avenue <br/>
                                          Singapore 018956 <br/>
                                          +65 6688 8868
                                        </div>
					<p style = "float: left; clear: both">
						Twin Tower is one of the most famous landmarks in Malaysia! 
					</p>			
			</div>

			<div class = "destination">
                                <div class ="search_name"> 
				<img src = "../media/images/landmark4.jpg" width = "150" height = "100" style = "float: left; margin: 5px;">			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
					<h4> (3) Esplanade </h4> 
				</a>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                 <img src="../media/images/rate2.png"/><img src="../media/images/rate1.png"/>
                                 <img src="../media/images/rate1.png"/> 12 reviews<br/>
				&nbsp; Landmarks
                            </div>
                                        <div class ="search_addr">
                                          10 Bayfront Avenue <br/>
                                          Singapore 018956 <br/>
                                          +65 6688 8868
                                        </div>
					<p style = "float: left; clear: both">
						Twin Tower is one of the most famous landmarks in Malaysia! 
					</p>			
			</div>
                        
                        <div class = "destination">
                                <div class ="search_name"> 
				<img src = "../media/images/twinTower.jpg" width = "150" height = "100" style = "float: left; margin: 5px;">			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
					<h4> (4) Twin Tower </h4> 
				</a>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate2.png"/>
                                 <img src="../media/images/rate1.png"/><img src="../media/images/rate1.png"/>
                                 <img src="../media/images/rate1.png"/> 6 reviews<br/>
				&nbsp; Landmarks
                            </div>
                                        <div class ="search_addr">
                                          10 Bayfront Avenue <br/>
                                          Singapore 018956 <br/>
                                          +65 6688 8868
                                        </div>
					<p style = "float: left; clear: both">
						Twin Tower is one of the most famous landmarks in Malaysia! 
					</p>			
			</div>
                        
                        <div class = "destination">
                                <div class ="search_name"> 
				<img src = "../media/images/twinTower.jpg" width = "150" height = "100" style = "float: left; margin: 5px;">			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
					<h4> (5) Twin Tower </h4> 
				</a>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                 <img src="../media/images/rate2.png"/> 55 reviews<br/>
				&nbsp; Landmarks
                            </div>
                                        <div class ="search_addr">
                                          10 Bayfront Avenue <br/>
                                          Singapore 018956 <br/>
                                          +65 6688 8868
                                        </div>
					<p style = "float: left; clear: both">
						Twin Tower is one of the most famous landmarks in Malaysia! 
					</p>			
			</div>
                        

		

       <!-- Can't find the destination? Create a new Destination -->
       
       <form action="createDestination.php" method="post" class="form-inline" role="form">
       <div class ="newDest">
           <p>
               Can't find your destination? Create a new one!
           </p>
           <button type="submit" class="btn btn-default">Create Destination</button>    
       </div>
       </form> 
       </div>
        </div>
    </body>
</html>
