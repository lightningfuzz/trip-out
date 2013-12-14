<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<?php
    require_once("../DAOs/VideoDAO.php");

    $url = $_GET['url'];
    $video = VideoDAO::getByUrl($url);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class ="videoPlayer">
        <video name="media" width="640" height="480" controls>
            <source src= "<?php echo $url; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </body>

</html>
