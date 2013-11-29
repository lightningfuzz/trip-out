<?php /*

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

*/	
    ?>

<?php

require_once '../Controllers/SearchController.php';
$search = new Search($_GET['searchString'], $_GET['type']);
$result = $search->run();

$totalRecord = count($result);
$noOfRecord = 3;
$page = 1;
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} 
if($page < 1) {
    $page = 1;
}


$noOfPage = ceil($totalRecord / $noOfRecord);
$start = (($page-1) * $noOfRecord ) + 1;
$end = $page * $noOfRecord;
if($end > $totalRecord) {
    $end = $totalRecord;
}

 function showType ($type) {
     if ($type == 0){
         return 'All';
     }
     else if ($type == 1) {
         return 'Attractions';
     }
     else if ($type == 2) {
         return 'Restaurants';
     }
     else if ($type == 3) {
         return 'Hotels';
     }
     else if ($type == 4) {
         return 'Shopping';
     }
     else if ($type == 5) {
         return 'Events';
     }
     else {
         return '---';
     }
}

?>



<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/index.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/reviewSearchResult.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            $.fn.stars = function() {
                return $(this).each(function() {
                    // Get the value
                    var val = parseFloat($(this).html());
                    // Make sure that the value is in 0 - 5 range, multiply to get width
                    val = Math.round(val * 2) / 2; /* To round to nearest half */
                    var size = Math.max(0, (Math.min(5, val))) * 16;
                    // Create stars holder
                    var $span = $('<span />').width(size);
                    // Replace the numerical value with stars
                    $(this).html($span);

                });
            }
            $(function() {
                $('span.stars').stars();
            });
        </script>	
    </head>

    <body> 
        <div class ="container">
           <!-- BEGIN BANNER -->
            <nav class="navbar navbar-inverse" role="navigation">
                <a class="navbar-brand" href="../index.php">TRIP OUT!</a>
                <ul class="nav navbar-nav">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="reviewSearch.php">Write a Review</a></li>
                    <li><a href="createDestination.php">Create a Destination</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <a type="submit" class="btn btn-default" href="signIn.php">Sign In</a>
                    <a type="submit" class="btn btn-default" href="signUp.php">Register</a>
                </form>
            </nav>
            <!-- END BANNER -->
            <div class ="mainContent">
                
            <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
                <div class="panel-heading"> What would you like to review? </div>
                <div class="panel-body" align="center">
                    <form action="reviewSearchResult.php" method="get" class="form-inline" role="form">
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
                            <input type="radio" id="inlineCheckbox4" name = "type" value = "4" <?php if($_GET['type'] == "4") echo "checked"; ?>> Shopping
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" id="inlineCheckbox4" name = "type" value = "5" <?php if($_GET['type'] == "5") echo "checked"; ?>> Events
                        </label>
                    </div>
                        <div class="form-group" style="width:40%;">
                          <input name="searchString" class="form-control"  placeholder="Enter search keywords" value="<?php echo $_GET['searchString']; ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
            </div>
            <hr>
            <br/>
            
            <div class ="content">
            
            <!-- Showing ... - ... out of ... -->
            <div class ="showing">
                <?php
                echo 'Showing ' . $start . ' - ' . $end . ' out of ' . $totalRecord . '<br/>';

                if ($page > 1) {
                    echo ' <a href="reviewSearchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page - 1) . '">Previous</a> | ';
                }
                echo 'Page ' . $page;
                if ($noOfPage > $page) {
                    echo ' | <a href="reviewSearchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page + 1) . '">Next</a>';
                    //echo ' <a href="fnNexPage()">Next</a>';
                }
             ?>
            </div>
            
            <br/> <br/> <br/>
            
            <!-- List of Review Search Results start here -->
            
            <?php
                $no = $start;
                //foreach($result as $dest):
                for ($i = $start - 1; $i < $end; $i++) :
                $dest = $result[$i];

                $dest . "<br>";
            ?>
            
        <div class ="box_reviewResult">
            
            <div class = "box_name">
                <h4>(<?php echo $no++; ?>) <a href = "destinationDetail.php?destinationId=<?php echo $dest->getDestId();?>"> <?php echo $dest->getName(); ?> </a> </h4>                
                <?php echo showType($dest->getType()) . '<br/>'; ?>
            </div>
            
            <div class = "box_addr">
<!--            <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate3.png"/><img src="../media/images/rate3.png"/>
                <img src="../media/images/rate3.png"/> 33 reviews<br/>-->
                <br/>
                <span class="stars"><?php echo $dest->getAvgRating(); ?></span>
                <?php echo ' ' . $dest->getNumReviews() . ' reviews'; ?>
                <br/>
               <?php echo $dest->getAddress(); 
                     echo '<br/>'; 
                     echo $dest->getCity(); 
                     echo '<br/>';
                     echo $dest->getState(); 
                     echo ' - ' . $dest->getZipCode(); 
                     echo '<br/>';
                     echo $dest->getPhoneNumber();
               ?>
            </div>
            <div class ="box_button">
              <button type = "button" onclick = "window.open('review.php')"> Write a Review </button>
            </div>
         </div>    
        
       <?php endfor; ?>
            
       <!-- Can't find the destination? Create a new Destination -->
       
       <form action="createDestination.php" method="get" class="form-inline" role="form">
       <div class ="newDest">
           <p>
               Can't find your destination? Create a new one!
           </p>
           <button type="submit" class="btn btn-default">Create Destination</button>    
       </div>
       </form> 
       
       <!-- Showing ... - ... out of ... -->
            <div class ="showing">
                <?php
                echo 'Showing ' . $start . ' - ' . $end . ' out of ' . $totalRecord . '<br/>';

                if ($page > 1) {
                    echo ' <a href="reviewSearchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page - 1) . '">Previous</a> | ';
                }
                echo 'Page ' . $page;
                if ($noOfPage > $page) {
                    echo ' | <a href="reviewSearchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page + 1) . '">Next</a>';
                    //echo ' <a href="fnNexPage()">Next</a>';
                }
             ?>
            </div>
           
        </div>
        </div>
          <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
                <div class ="footer">
                    SFSU-FAU-FULDA joint SW Engineering Project Fall 2013 
                </div>
          </nav>
        </div>      
    </body>
</html>
