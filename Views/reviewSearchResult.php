
<?php

require_once '../Controllers/SearchController.php';
    
    // Getting 'searchString' and 'type' parameters in URL from Home Page
    $search = new Search($_GET['searchString'], $_GET['type']);
    $result = $search->run();

    //Getting page no from URL
    $totalRecord = count($result); //total records in the database/result
    $noOfRecord = 3; //no of records per page to show
    $page = 1;
    //if there's a parameter called "page" in URL, assign it to variable $page
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } 
    if($page < 1) {
        $page = 1;
    }

    /* Calculating for "showing" pages */

    // Calculating no of pages
    $noOfPage = ceil($totalRecord / $noOfRecord); 

    // Calculating the start record no for a specific page 
    // {((specific page no - 1) * no of records per page) + 1}
    $start = (($page-1) * $noOfRecord ) + 1; 

    // Calculating the end record no for a specific page
    // {specific page no * no of records per page}
    $end = $page * $noOfRecord; 
    // for eg., if ($page = 3, $totalRecord = 7, $end = 9), change value of $end to $totalRecord
    if($end > $totalRecord) {
        $end = $totalRecord;
    }

    /* Assigning type numbers into real category names */
    
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
        <link rel ="stylesheet" type ="text/css" href ="../rateit/src/rateit.css"> <!-- for avg rating stars -->
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="../rateit/src/jquery.rateit.js"></script> <!-- for avg rating stars -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Script for popover window for "Write a Review" page -->
        <script type="text/javascript">
            function popup(destination){
              cuteLittleWindow = window.open("review.php?destid=destination", "littleWindow", "location=no, width=500, height=500"); 
            }
        </script>
        <!-- End of Script for "Write a Review" popover window -->
        
        <!--FANCY BOX FILES-->
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <!--END FANCYBOX FILES-->
        
    </head>

    <body> 
        <div class ="container"> <!-- 1st div -->
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
            <div class ="mainContent"> <!-- 2nd div -->
            <!-- Plan Your Trip: Search box for Keywords and Categories -->
            <div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
                <div class="panel-heading"> What would you like to review? </div>
                <div class="panel-body" align="center">
                    <!-- Plan Your Trip FORM -->
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
                        <!-- Search Keywords and Search Button -->
                        <div class="form-group" style="width:40%;">
                          <input name="searchString" class="form-control"  placeholder="Enter search keywords" value="<?php echo $_GET['searchString']; ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div>
            </div>         
            
            <div class ="content"> <!-- 3rd div -->
                
                <!-- Title of "Search Results for" and shows 'searchString' -->
                    <h3 style = "color: green"> Search Results for "<?php echo $_GET['searchString']; ?>" </h3> 
            
                <hr> <!-- horizontal line break -->
                
                <!-- "Showing... out of... pages: Previous, Next -->
                    <p style = "text-align: right; padding-right: 200px"> 
                        <!-- Previous | Page... | Next -->
                        <div class ="showing">
                            <?php
                                echo 'Showing ' . $start . ' - ' . $end . ' out of ' . $totalRecord . '<br/>';

                                // Refresh the searchResult page, and send 'searchString' and 'type' parameters (Previous |)
                                if ($page > 1) {
                                    echo '<a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page - 1) . '">Previous</a> | ';
                                }
                                // (Page...)
                                echo 'Page ' . $page;
                                // Refresh the searchResult page, and send 'searchString' and 'type' parameters (| Next)
                                if ($noOfPage > $page) {
                                    echo ' | <a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page + 1) . '">Next</a>';
                                }
                            ?> 
                        </div>
                        <br/>
                    </p> 
                    <!-- End of Showing... out of... pages: Previous, Next -->
            
            <br/> <br/> <br/>
                             
            <!-- Using FOR loop to show the destination results from database -->
            <?php
                $no = $start;
                //foreach($result as $dest):
                for ($i = $start - 1; $i < $end; $i++) :
                $dest = $result[$i];
                //$dest . "<br>";
            ?>
            
            <!-- Displaying each destination result to review -->    
            <div class ="review_destination"> <!-- 4th div -->

                <div class = "review_name"> <!-- 1st div within "review_destination" div -->

                    <!-- Getting "DestId" from database and sending destinationId to URL for "destinationDetail" page -->
                    <h4> (<?php echo $no++; ?>) <a href = "destinationDetail.php?destinationId=<?php echo $dest->getDestId();?>"> <?php echo $dest->getName(); ?> </a> </h4>                

                    <!-- Getting destination type from the database and send it as a parameter 
                         to "showType" function in order to display the name of the destination type
                    -->
                    <?php echo showType($dest->getType()) . '<br/>'; ?>

                </div> <!-- End of "review_name" 1st div within "review_destination" div -->

                <!-- Displaying destination addresses to write a review -->
                <div class = "review_address"> <!-- 2nd div within "review_destination" div -->
                    <br/>
                    <!-- Displaying average rating stars using "rateit" plugin -->
                    <span class="rateit" data-rateit-value="<?php echo $dest->getAvgRating();  ?>" data-rateit-ispreset="true" data-rateit-readonly="true"> </span>

                    <!-- Sending destinationId as a parameter and point to the review section of "destinationDetail" page -->
                    <a href ="destinationDetail.php?destinationId=<?php echo $dest->getDestId();?>#destReviews">
                        <!-- Getting no of reviews from the database -->
                        <?php echo ' ' . $dest->getNumReviews() . ' reviews'; ?>
                    </a>
                    
                    <br/>
                    
                    <!-- Getting address and phone information from the database -->
                    <?php echo $dest->getAddress(); 
                         echo '<br/>'; 
                         echo $dest->getCity(); 
                         echo '<br/>';
                         echo $dest->getState(); 
                         echo ' - ' . $dest->getZipCode(); 
                         echo '<br/>';
                         echo $dest->getPhoneNumber();
                    ?>
                </div> <!-- End of "review_address" 2nd div within "review_destination" div -->

                <div class ="box_buttons"> <!-- 3rd div within "review_destination" div -->                     
                  <!-- "Write a Review" button link to a popup window -->
                  <a class ="btn btn-primary fancybox fancybox.iframe" href="../Views/review.php?destid=
                             <?php echo $dest->getDestId() ?>" title="Write a review">Write a Review</a>                   
                </div> <!-- End of "box_buttons" 3rd div within "review_destination" div -->
             </div>    
            
             <?php endfor; ?>
            
             <!-- Can't find the destination? Create a new Destination -->

             <form action="createDestination.php" method="get" class="form-inline">
                <div class ="newDest"> <!-- a div within "content" div -->
                   <p>
                       Can't find your destination? Create a new one!
                   </p>
                   <button type="submit" class="btn btn-default"> Create Destination </button>    
                </div> <!-- End of "newDest" div within "content" div -->
             </form> <!-- End of form for creating a new destination if can't find -->
                
             <!-- "Showing... out of... pages: Previous, Next -->
             <div class ="showing">
                 <?php
                     echo 'Showing ' . $start . ' - ' . $end . ' out of ' . $totalRecord . '<br/>';

                     // Refresh the searchResult page, and send 'searchString' and 'type' parameters (Previous |)
                     if ($page > 1) {
                         echo '<a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page - 1) . '">Previous</a> | ';
                     }
                     // (Page...)
                     echo 'Page ' . $page;
                     // Refresh the searchResult page, and send 'searchString' and 'type' parameters (| Next)
                     if ($noOfPage > $page) {
                         echo ' | <a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page + 1) . '">Next</a>';
                     }
                 ?> 
             </div> 
            <!-- End of Showing... out of... pages: Previous, Next -->
           
        </div> <!-- End of "content" 3rd div -->
    </div> <!-- End of "mainContent" 2nd div -->
    
    <!-- Footer -->
       <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
            <div class ="footer">
                SFSU-FAU-FULDA joint SW Engineering Project Fall 2013 
            </div>
       </nav>
    <!-- End of Footer -->
    
    </div> <!-- End of "container" 1st div -->  
    
    <!-- Fancy Box Script -->
    <script>
        $(document).ready(function() {
                    $(".fancybox").fancybox({"width":500,"height":200});
        });
    </script>
    
</body>
</html>
