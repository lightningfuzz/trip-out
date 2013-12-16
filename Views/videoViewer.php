<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<?php
    error_reporting(E_ERROR | E_PARSE);
    require_once("../DAOs/VideoDAO.php");
    require_once("../DAOs/RegisteredUserDAO.php");
    
    $url = $_GET['url'];
    $video = VideoDAO::getByUrl($url);
    $user = RegisteredUserDAO::getByID($video->getUserId());
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body style="height:550px">
        <h3 style="text-align:center;">Trip Out Video Viewer</h3>
        <div class ="videoPlayer">
        <video name="media" width="500" height="auto" style="margin: 0 auto;" controls>
            <source src= "<?php echo $url; ?>?1" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class ="metaData" style ="padding-top:20px;">
            <strong>Title:</strong> <?php echo $video->getTitle() ?><br> 
            <strong>Description:</strong> <?php echo $video->getDescription()?><br>
            <strong>Uploaded By:</strong> <?php echo $user->getUserName()?><br>
            <strong>Upload Date:</strong> <?php echo $video->getUploadTime()?>
        </div>
    </body>
    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        $(document).ready(function(){
        });
    </script>
</html>
