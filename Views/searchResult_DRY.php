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
<div class ="searchResults">
<div class="panel panel-default" style="width:75%;margin-left:auto;margin-right:auto;">
    <div class="panel-heading">Plan Your Trip </div>
    <div class="panel-body" align="center">
        <form name="formSearch" action="#" method="get" class="form-inline" role="form" id="srSearchForm">
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
            </label>
        </div>
            <div class="form-group" style="width:40%;">
              <input name="searchString" class="form-control"  placeholder="Enter search keywords" value= "<?php echo $_GET['searchString']; ?>">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
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
    <p style = "text-align: right; padding-right: 200px"> 

    <!-- Showing ... - ... out of ... -->
    <div class ="showing">
        <?php 
            echo 'Showing ' . $start . ' - ' . $end . ' out of ' . $totalRecord . '<br/>'; 
                if($page > 1) {
                    echo ' <a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page-1) . '">Previous</a> | ';
                }
                echo 'Page ' . $page;
                if($noOfPage > $page) {
                    echo ' | <a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page+1) . '">Next</a>';
                    //echo ' <a href="fnNexPage()">Next</a>';
                }
            ?>
     </div>
    <br/>
    </p><br/>
    <?php 
         $no = $start;
         //foreach($result as $dest):
         for ($i = $start - 1; $i < $end; $i++) :
             $dest = $result[$i];

         $dest . "<br>";
    ?>
    <div class = "destination">
        <div class ="search_pic"> 
        <a href = "destinationDetail.php" style = "text-decoration: none"> 			    
            <img src = <?php echo $dest->getImageUrl(); ?> width = "170" height = "130" style = "float: left; margin: 5px;"/>			
        </a>    
        </div>
        <div class ="search_name"> 
            <a href = "#" id ="destinationDetailLink"style = "text-decoration: none"> 			
                <h4> (<?php echo $no++; ?>) 
                    <?php 
                        echo $dest->getName() . '<br/>';                                              
                    ?>                                     
                </h4> 
            </a>
            <?php echo showType($dest->getType()) . '<br/>'; ?>

                <br/>
                 <span class="stars"><?php echo $dest->getAvgRating(); ?></span>
                 <?php echo ' ' . $dest->getNumReviews() . ' reviews'; ?>
                 <br/>

                 <!-- Address -->
                      <?php
                          echo $dest->getAddress();
                          echo '<br/>';
                          echo $dest->getCity() . ', '; 
                          echo '<br/>';
                          echo $dest->getState() . ' - '; 
                          echo $dest->getZipCode();  
                          echo '<br/>';
                          echo $dest->getPhoneNumber();
                      ?>
            </div>
            <!-- "Write a Review" button -->
            <div class ="box_review">
                 <button type = "button" onclick = "window.open('review.php')"> Write a Review </button>
                 <br/><br/>                                 
                 <button type = "button" onclick = "window.open('review.php')"> Book Now </button>
            </div>

            <div class ="description"> 
                    <?php echo '<br/>' . $dest->getDescription(); ?>
            </div>   

        </div>
        <?php endfor; ?>
       <!-- Can't find the destination? Create a new Destination -->
       
            <form action="createDestination.php" method="get" class="form-inline">
            <div class ="newDest">
                <p>
                    Can't find your destination? Create a new one!
                </p>
                <button type="submit" class="btn btn-default">Create Destination</button>    
            </div>
            </form> 
            <div class ="showing">
                 <?php
                      echo 'Showing ' . $start . ' - ' . $end . ' out of ' . $totalRecord . '<br/>';

                      if ($page > 1) {
                          echo ' <a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page - 1) . '">Previous</a> | ';
                      }
                      echo 'Page ' . $page;
                      if ($noOfPage > $page) {
                          echo ' | <a href="searchResult.php?searchString=' . $_GET['searchString'] . '&type=' . $_GET['type'] . '&page=' . ($page + 1) . '">Next</a>';
                          //echo ' <a href="fnNexPage()">Next</a>';
                      }
                 ?>
            </div>
        </div>
</div>
<script>
    $(document).ready(function(){
        //jQuery to load searchResults_DRY.php page into mainContent div of index.php
        $("#srSearchForm").submit(function(event){
            event.preventDefault();
            $.get( 'Views/searchResult_DRY.php', $("#srSearchForm").serialize(), function(data){
                $("#mainContent").html(data);
            });
        });
        
        //jQuery to destinationDetail_DRY.php into mainContent div of index.php
        $('#destinationDetailLink').on("click",function(){
            $('div.searchResults').load('Views/destinationDetail_DRY.php');
        });
    });
</script>

