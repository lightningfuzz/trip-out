<!-- Author:Matthew Rutherford 
Made by Modifying signIn.php-Rob Pennock and file uploading tutorial on W3 Schools-->
<?php
require_once '../Session/Session.php';
require_once '../Controllers/AccountController.php';
require_once '../Controllers/MediaController.php';
require_once"../Models/Destination.php";
require_once"../DAOs/DestinationDAO.php";
require_once '../Models/Image.php';
require_once '../Models/Video.php';
$s = Session::getInstance();
    $s->start();
    if(AccountController::isLogin()){
        $user = AccountController::getLoggedinUser();
    }
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $destin = DestinationDAO::getByID($_POST['destinationID']);
    $imageNum= $destin->getNumImages();
    // create new directory with 777 permissions if it does not exist yet
    // owner will be the user/group the PHP script is run under
   $dir = "../media/images/".$_POST['destinationID'];
   if ( !file_exists($dir) ) {
      mkdir ($dir, 0777);
    }
    
    $path="../media/images/".$_POST['destinationID']."/".$imageNum.".jpg";
   $allowedExts = array("gif", "jpeg", "jpg", "png");
   $temp = explode(".", $_FILES["file"]["name"]);
   $extension = end($temp);
   if ((($_FILES["file"]["type"] == "image/gif")
   || ($_FILES["file"]["type"] == "image/jpeg")
   || ($_FILES["file"]["type"] == "image/jpg")
   || ($_FILES["file"]["type"] == "image/pjpeg")
   || ($_FILES["file"]["type"] == "image/x-png")
   || ($_FILES["file"]["type"] == "image/png"))
   && in_array($extension, $allowedExts))
     {
     if ($_FILES["file"]["error"] > 0)
       {
       echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
       }
     else
       {
       if (file_exists($path))
         {
         echo $_FILES["file"]["name"] . " already exists. ";
         }
       else
         {
         if(move_uploaded_file($_FILES["file"]["tmp_name"],
         $path));
            echo "File Successfully Uploaded";
         $img=new Image();
         $img->setDestId($_POST['destinationID']);
         $img->setUserId($user->getUserID());
         $img->setRelUrl($path);
         $img->setTitle("test title");
         $img->setDescription("test descr");
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
   else
     {
     echo "Invalid file";
     }
}
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
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="Submit">
                </form>
         </div>
     </div>
    </div>
</html>

