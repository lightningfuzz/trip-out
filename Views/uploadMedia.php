<!-- Author:Matthew Rutherford 
Made by Modifying signIn.php-Rob Pennock and file uploading tutorial on W3 Schools

This class deals with displaying the buttons to upload data, and handling the uploading to the server, and telling the database
where it is stored at-->
<?php
require_once '../Session/Session.php';
require_once '../Controllers/AccountController.php';
require_once '../Controllers/MediaController.php';
require_once"../Models/Destination.php";
require_once"../DAOs/DestinationDAO.php";
require_once '../Models/Image.php';
require_once '../Models/Video.php';
//Starts the session and sets what user is logged in
$s = Session::getInstance();
    $s->start();
    if(AccountController::isLogin()){
        $user = AccountController::getLoggedinUser();
    }
//This checks if an file is trying to be uploaded, this won't be needed as much if it wasn't in the display file
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Gets the destination and the number of videos and images it has uploaded to it
    $destin = DestinationDAO::getByID($_POST['destinationID']);
    $imageNum= $destin->getNumImages();
    $videoNum= $destin->getNumVideos();
    //THese two variables hold what kind of images will be allowed when uploaded
   $allowedImgExts = array("gif", "jpeg", "jpg", "png");
   $allowedVidExts = array("mov","mp4");
   //this gets the file type(the parts after the ".") and then sets it to a variable
   $temp = explode(".", $_FILES["file"]["name"]);
   $extension = end($temp);
   //this checks if the image being uploaded is an image of either gif, jpeg....
   //it also checks that the extension gotten in the line above is a valid one
   if ((($_FILES["file"]["type"] == "image/gif")
   || ($_FILES["file"]["type"] == "image/jpeg")
   || ($_FILES["file"]["type"] == "image/jpg")
   || ($_FILES["file"]["type"] == "image/pjpeg")
   || ($_FILES["file"]["type"] == "image/x-png")
   || ($_FILES["file"]["type"] == "image/png"))
   && in_array($extension, $allowedImgExts))
     {
       //checks if there was any error with the posting of the file
     if ($_FILES["file"]["error"] > 0)
       {
       echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
       }
       //if no errors we can now attempt to upload the image
     else
     {
         // create new directory with 777 permissions if it does not exist yet using appropriate destinationID
        // owner will be the user/group the PHP script is run under
            $dir = "../media/images/".$_POST['destinationID'];
            if ( !file_exists($dir) ) {
                mkdir ($dir, 0777);
            }
            //$path holds what the name of the file will be on the server, and where it will be uploaded to
            //this uses the number of images uploaded on this destination to determine its name
        $path="../media/images/".$_POST['destinationID']."/".$imageNum.".".$extension;
        //checks if image of this name exists yet
        if (file_exists($path))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
       else
       {
           //THIS MOVES THE TEMPORARY IMAGE TO THE SERVER USING THE $path
            if(move_uploaded_file($_FILES["file"]["tmp_name"],
            $path));
            //checks to see if there is a main image set, if not then this becomes it(NOT WORKING YET)
            if($destin->getImageUrl()=="")
                $destin->setImageUrl ($path);
                 echo "File Successfully Uploaded";
            //Create new image model that holds all the info that the database will need
            $img=new Image();
            $img->setDestId($_POST['destinationID']);
            $img->setUserId($user->getUserID());
            $img->setRelUrl($path);
            echo $_POST['fileTitle'];
            $img->setTitle($_POST['fileTitle']);
            $img->setDescription("test descr");
            //tries to add image to the database
            try{
                MediaController::addImage($img);
            }
            catch(ReviewException $e){
                echo $e;
                exit;
            }
        }
       }
     }
     //this whole if block almost the same as the image block except the file types are different
     //to upload videos, which also means the video functions are used instead of the image
     //a a directory is made in videos instead of images, the video model is used
     else if((($_FILES["file"]["type"] == "video/mov")
        || ($_FILES["file"]["type"] == "video/mp4"))
        && in_array($extension, $allowedVidExts))
     {
     if ($_FILES["file"]["error"] > 0)
       {
       echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
       }
     else
     {
            $dir = "../media/videos/".$_POST['destinationID'];
            if ( !file_exists($dir) ) {
                mkdir ($dir, 0777);
            }
        $path="../media/videos/".$_POST['destinationID']."/".$videoNum.".".$extension;
        if (file_exists($path))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
       else
       {
            if(move_uploaded_file($_FILES["file"]["tmp_name"],
            $path));
                 echo "File Successfully Uploaded";
            $vid=new Video();
            $vid->setDestId($_POST['destinationID']);
            $vid->setUserId($user->getUserID());
            $vid->setRelUrl($path);
            $vid->setTitle($_POST['fileTitle']);
            $vid->setDescription("test descr");
            try{
                MediaController::addVideo($vid);
            }
            catch(ReviewException $e){
                echo $e;
                exit;
            }
        }
       }
     }
   else
     {
     echo "Invalid file";
     }
}
//when coming from another page, it sends the destination that needs to be uploaded
elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
            $dest=$_GET['destid'];
}
?>
<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <div class="container">
     <div class="row">
         <div class="span5">
                <h3>Upload pictures or videos</h3>
                <p>
                <form action="uploadMedia.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="destinationID" value="<?php echo $dest;?>">
                Title: <input type="text" name="fileTitle">
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="Submit">
                </form>
         </div>
     </div>
    </div>
</html>

