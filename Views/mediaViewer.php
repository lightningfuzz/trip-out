<?php

?>

<div class ="mediaViewer">
<div class ="row" align ="center">
    <div class ="col-md-3">
    </div>
    <div class ="col-md-2">
        <a class ="btn btn-default" href="#" id="backToDest">Back to Destination</a>
    </div>
    <div class ="col-md-3">
        <a href ="">All</a> | 
        <a href ="">Images</a> | 
        <a href ="">Videos</a>
    </div>
</div>
<hr>
<table align="center" cellpadding="10px">
    <tr>
        <td colspan ="4">Alcatraz- images</td>
        <td colspan="1"style="text-align:right;">Showing 1-10 of 200</td>
    </tr>
    <tr>
        <td>
            <a href="media/images/alcatraz/alcatraz1.jpg" title="Arriving on the ferry">
                <img src="media/images/alcatraz/alcatraz1.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">
            </a>
        </td>    
        <td>
            <a href="media/images/alcatraz/alcatraz2.jpg" title="Indian Graffiti from when they owned the island">
                <img src="media/images/alcatraz/alcatraz2.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">
            </a>
        </td>
        <td>
            <a href="media/images/alcatraz/alcatraz3.jpg" title="The power plant">
                <img src="media/images/alcatraz/alcatraz3.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">                    
            </a>
        </td>
        <td>
            <a href="media/images/alcatraz/alcatraz4.jpg" title="tunnel going through a part of the island">
                <img src="media/images/alcatraz/alcatraz4.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">                    
            </a>
        </td>
        <td>
            <a href="media/images/alcatraz/alcatraz5.jpg" title="Table in the morgue">
                <img src="media/images/alcatraz/alcatraz5.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">                    
            </a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="media/images/alcatraz/alcatraz6.jpg" title="A prison hospital room">
                <img src="media/images/alcatraz/alcatraz6.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">
            </a>
        </td>
        <td>
            <a href="media/images/alcatraz/alcatraz7.jpg" title="view from below of main prison block">
                <img src="media/images/alcatraz/alcatraz7.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">
            </a>
        </td>
        <td>
            <a href="media/images/alcatraz/alcatraz8.jpg" title="Room">
                <img src="media/images/alcatraz/alcatraz8.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">
            </a>
        </td>
        <td>
            <a href="media/images/alcatraz/alcatraz9.jpg" title="The Garden at alcatraz">
                <img src="media/images/alcatraz/alcatraz9.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">
            </a>
        </td>
        <td>
            <a href="media/images/alcatraz/alcatraz10.jpg" title="Watertower with indian graffiti">
                <img src="media/images/alcatraz/alcatraz10.jpg" alt="" class="img-thumbnail" height="140px" width ="140px">
            <a>
        </td>
    </tr>
    <tr>
        <td colspan="5"style="text-align:right;"><a href="">Next>></a></td>
    </tr>
</table>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //load destinationDetail_DRY.php into mainContent div of index.php
        $('#backToDest').on("click", function(){
            $('div.mediaViewer').parent().load('Views/destinationDetail_DRY.php');
        });
    });
</script>


