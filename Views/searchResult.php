<?php /*
function getValue($_GET['searchString']) {
        if(isset($_GET['searchString']){
		$pvalue = $_GET['searchString'];
	} else {
		$pvalue = "";
	}
        return $pvalue;
}
$searchVal = getValue("txtSearch");
$searchTp = getValue("searchType");
   */ ?>


<?php

require_once '../Controllers/SearchController.php';
$search = new Search($_GET['searchString']);
$result = $search->run();

?>

<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/index.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/searchResult.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body> 
         <div class ="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <a class="navbar-brand" href="../index.php">TRIP OUT!</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="reviewSearch.php">Write a Review</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <a type="submit" class="btn btn-default" href="signIn.php">Sign In</a>
                    <a type="submit" class="btn btn-default" href="signUp.php">Register</a>
                </form>
            </nav>
            <div class ="mainContent">
            
            <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
                <div class="panel-heading">Plan Your Trip </div>
                <div class="panel-body" align="center">
                    <form action="searchResult.php" method="get" class="form-inline" role="form">
                    <div style="padding-bottom:10px;">
                        
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox5" name = "type" value = "0" <?php if($_GET['type'] == "0") echo "checked"; ?>> All
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox1" name = "type" value = "1" <?php if($_GET['type'] == "1") echo "checked"; ?> > Attractions
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox2" name = "type" value = "2" <?php if($_GET['type'] == "2") echo "checked"; ?>> Restaurants
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox3" name = "type" value = "3" <?php if($_GET['type'] == "3") echo "checked"; ?>> Hotels
                            
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox4" name = "type" value = "4" <?php if($_GET['type'] == "4") echo "checked"; ?>> Events
                        </label>
                    </div>
                        <div class="form-group" style="width:40%;">
                          <input name="searchString" class="form-control"  placeholder="Enter search keywords" value= "<?php echo $_GET['searchString']; ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Search Destinations</button>
                    </form>
                </div>
            </div>
            
            <!-- Filter By (left_pane)
            
            <div class = "left_pane">
			<h4> Filter By <?php /*echo $searchVal;*/?>: </h4>			
				
			<input type = "checkbox" name = "filter" value = "Landmarks"> Landmarks <br/>
			<input type = "checkbox" name = "filter" value = "Museums"> Museums <br/>
			<input type = "checkbox" name = "filter" value = "Parks"> Parks <br/>
			<input type = "checkbox" name = "filter" value = "Beach"> Beach <br/>
			<input type = "checkbox" name = "filter" value = "Shopping"> Shopping <br/>
					
		</div>
		
            -->
		<div class = "content">
                    
			<h3 style = "color: green"> Search Results for "<?php echo $_GET['searchString']; ?>" </h3> 
			<p style = "text-align: right; padding-right: 200px"> Showing 1 - 5 out of 10 </p> <br/>
			
                        
                        <?php 
                             $no = 1;
                             foreach($result as $dest):
                             $dest . "<br>";
                             
                        ?>
                        <div class = "destination">
                                <div class ="search_name"> 
                                    <img src = <?php echo $dest->getImageUrl(); ?>  width = "150" height = "100" style = "float: left; margin: 5px;"/>			
				<a href = "destinationDetail.php" style = "text-decoration: none"> 			
                                    <h4> (<?php echo $no++; ?>) 
                                        <?php echo $dest->getName();?> 
                                        
                                        
                                    </h4> 
				</a>
                                
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                 <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                                 <img src="../media/images/rate2.png"/> 55 reviews<br/>
                                 <br/>
				
                            </div>
                            <div class = "search_addr">
                                    <?php echo $dest->getAddress();
                                          echo '<br/>';
                                          echo $dest->getCity() . ', '; 
                                          echo $dest->getState() . ', '; 
                                          echo $dest->getZipCode(); ?> 
                            </div>
                            <div style ="float: left"> 
                                    <?php echo $dest->getDescription(); ?>
                            </div>   
                         			
			</div>
                        <?php endforeach; ?>

		

       <!-- Can't find the destination? Create a new Destination -->
       
       <form action="createDestination.php" method="get" class="form-inline">
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
