<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<?php
    require_once("../DAOs/VideoDAO.php");

    $url = $_GET['url'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class ="videoPlayer" name ="">
        <video name="media" width="" height="" style="margin: 0 auto;" controls>
            <source src= "<?php echo $url; ?>?1" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </body>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $(document).ready(function(){
            $('video').height('fit');
            $('video').width('fit');

        });
    </script>

</html>
