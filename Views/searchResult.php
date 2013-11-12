<!DOCTYPE HTML>
<html>

	<head> 
		<link rel = "stylesheet" type = "text/css" href = "searchResult.css">
		<title> Search Result </title>
	</head>
	
	<body>
		
		<script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
		
		<div class ="container">
            <div style ="background-color:black;">
                <img src="media/assets/images/tripOutLogo.jpg">
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
                <div class="panel-heading">Plan Your Destination</div>
                <div class="panel-body" align="center">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Attractions
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Restaurants
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Hotels
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Events
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox3" value="option3"> All
                    </label>
                    <form class="form-inline" role="form">
                        <div class="form-group" style="width:40%;">
                          <input class="form-control"  placeholder="Enter search keywords">
                        </div>
                        <button type="submit" class="btn btn-default">Search Destinations</button>
                    </form>
                </div>
            </div>
            <div class = "left_pane">
			<h4> Filter By Attractions: </h4>			
				
			<input type = "checkbox" name = "filter" value = "Landmarks"> Landmarks <br/>
			<input type = "checkbox" name = "filter" value = "Museums"> Museums <br/>
			<input type = "checkbox" name = "filter" value = "Parks"> Parks <br/>
			<input type = "checkbox" name = "filter" value = "Beach"> Beach <br/>
			<input type = "checkbox" name = "filter" value = "Shopping"> Shopping <br/>
					
		</div>
		
		<div class = "content">
			<h3 style = "color: green"> Results of Search "Attractions" </h3> 
			<p style = "text-align: right; padding-right: 100px"> Showing 1 - 3 out of 10 </p> <br/>
			<div class = "destination">
				<img src = "landmark1.jpg" width = "150" height = "100" style = "float: left">			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
					<h4> (1) Marina Bay Sands </h4> 
				</a>
				&nbsp; Landmarks
				<p style = "float: left; clear: both">
					Marina Bay Sands is newly built last three years ago and became one of the landmarks of Singapore! 
				</p>					
			</div>
			<br/>
		
			<div class = "destination">
					<img src = "twinTower.jpg" width = "150" height = "100" style = "float: left">			
					<a href = "destinationDetail.php" style = "text-decoration: none"> 			
						<h4> (2) Twin Tower </h4> 
					</a>
					&nbsp; Landmarks
					<p style = "float: left; clear: both">
						Twin Tower is one of the most famous landmarks in Malaysia! 
					</p>			
			</div>
			<br/>
			
			<div class = "destination">
					<img src = "landmark5.jpg" width = "150" height = "100" style = "float: left">			
					<a href = "destinationDetail.php" style = "text-decoration: none"> 			
						<h4> (3) Esplanade </h4> 
					</a>
					&nbsp; Landmarks
					<p style = "float: left; clear: both">
						Esplanade is situated in downtown area of Singapore! 
					</p>			
			</div>
			<br/>
		</div>

        </div>	
		
		
	</body>