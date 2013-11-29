<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once("../Controllers/DestinationController.php");
    require_once("../Models/Destination.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $destin = new Destination();
        $destin->setName($_POST['destName']);
        $destin->setType($_POST['destType']);
        $destin->setAddress($_POST['destAddress']);
        $destin->setCity($_POST['destCity']);
        $destin->setState($_POST['destState']);
        $destin->setZipCode($_POST['destZip']);
        $destin->setPhoneNumber($_POST['destPhone']);
        $destin->setWebsite($_POST['destWebsite']);
        $destin->setDescription($_POST['destDescription']);
        
        try{
            $result = DestinationController::create($destin);
         }
        catch(DestinationException $e){
            echo $e;
            exit;
        }
        header('Location: destinationDetail.php');
        exit;
    }?>
<!DOCTYPE html>
<html>
    <head>
        <!--<link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <link rel ="stylesheet" type ="text/css" href ="../css/custom>
        <!-- Add jQuery library -->
        <script> type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- from the file uploader -->
        <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI styles -->
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/dark-hive/jquery-ui.css" id="theme">
        <!-- Demo styles -->
        <link rel="stylesheet" href="../jqueryFileUploader/css/demo.css">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/demo-ie8.css">
        <![endif]-->
        <style>
        /* Adjust the jQuery UI widget font-size: */
        .ui-widget {
            font-size: 0.95em;
        }
        </style>
        <!-- blueimp Gallery styles -->
        <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link rel="stylesheet" href="../jqueryFileUploader/css/jquery.fileupload.css">
        <link rel="stylesheet" href="../jqueryFileUploader/css/jquery.fileupload-ui.css">
        <!-- CSS adjustments for browsers with JavaScript disabled -->
        <noscript><link rel="stylesheet" href="../jqueryFileUploader/css/jquery.fileupload-noscript.css"></noscript>
        <noscript><link rel="stylesheet" href="../jqueryFileUploader/css/jquery.fileupload-ui-noscript.css"></noscript>
        <title>Create a Destination</title>
    </head>
    <body>
        <!-- BEGIN BANNER -->
        <!-- <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap.css"> -->
        <link rel ="stylesheet" type ="text/css" href ="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/bootstrap-responsive.css">
        <link rel ="stylesheet" type ="text/css" href ="../css/index.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/jquery.js"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>  
    <body> 
        <!-- BEGIN CONTAINER -->
        <div class="container">
            <!-- BEGIN BANNER -->
            <nav class="navbar navbar-inverse" role="navigation">
            <a class="navbar-brand" href="../index.php" id ="logo">TRIP OUT!</a>
            <ul class="nav navbar-nav">
                <li name = "home"><a href="../index.php" id="homeLink">Home</a></li>
                <li name = "writeReview" class="active"><a href="#" id ="writeReviewLink">Write a Review</a></li>
                <li name = "createDestination"><a href="createDestination.php">Create a Destination</a></li>
                <li name = "about"><a href="#" id="aboutLink">About</a></li>
                <li name = "contact"><a href="#" id ="contactLink">Contact</a></li>
                <li name = "FAQ"><a href="#" id ="faqLink">FAQ</a></li>

            </ul>
            <form class="navbar-form navbar-right">
                <a type="submit" class="btn btn-default" href="#" id ="signInButton">Sign In</a>
                <a type="submit" class="btn btn-default" href="#" id ="registerButton">Register</a>
            </form>
        </nav>
         <!-- END BANNER -->
         <!-- begin body of site -->
        <h2 align="center">Create a Destination</h2>
        <div align="center">
             <div style="border:2px solid; border-radius:25px; display: block;
               text-align: center; float: center; width: 55%; height: 50%">
        <p><br>Name of Destination</p>
        <!-- all must be in a form -->
        <form class="create_dest_form" method="POST" action="createDestination.php">
            <input class="input-medium" name ="destName" type="text" placeholder="Name" required>
            <br>
            <select name="destType" class="input-small">
                <option value="">-Category-</option>
                <option value="1">Attractions</option>
                <option value="2">Restaurants</option>
                <option value="3">Hotels</option>   
                <option value="4">Events</option>
                <!-- need to add option for shopping -->
            </select> 
            <!--<input type="submit" value="search!" /> <br><br> -->
            <p><br>Address</p>
            <input class="input-large" type="text" placeholder="Address" name="destAddress" required>
            <p></p>
            <input class="input-large" name="destCity" type="text" placeholder="City" required>
            <p></p>
            <input class="input-mini" name="destZip" type="number" placeholder="Zip" required pattern="\d{5}" required>
            <p></p>
            <!-- from http://chrishacia.com/2012/10/html-select-box-country-list-with-iso-codes-as-values/ -->
            <select name="destState" required> 
                <option> - Select Province/State - </option>
                <option value="Alabama">Alabama</option> 
                <option value="Alaska">Alaska</option> 
                <option value="Arizona">Arizona</option> 
                <option value="Arkansas">Arkansas</option> 
                <option value="California">California</option> 
                <option value="Colorado">Colorado</option> 
                <option value="Connecticut">Connecticut</option> 
                <option value="Delaware">Delaware</option> 
                <option value="Washington DC">District Of Columbia</option> 
                <option value="Florida">Florida</option> 
                <option value="Georgia">Georgia</option> 
                <option value="Hawaii">Hawaii</option> 
                <option value="Idaho">Idaho</option> 
                <option value="Illinois">Illinois</option> 
                <option value="Indiana">Indiana</option> 
                <option value="Iowa">Iowa</option> 
                <option value="Kansas">Kansas</option> 
                <option value="Kentucky">Kentucky</option> 
                <option value="Louisiana">Louisiana</option> 
                <option value="Maine">Maine</option> 
                <option value="Maryland">Maryland</option> 
                <option value="Massachusettes">Massachusetts</option> 
                <option value="Michigan">Michigan</option> 
                <option value="Minnesota">Minnesota</option> 
                <option value="Mississippi">Mississippi</option> 
                <option value="Missouri">Missouri</option> 
                <option value="Montana">Montana</option> 
                <option value="Nebraska">Nebraska</option> 
                <option value="Nevada">Nevada</option> 
                <option value="New Hampshire">New Hampshire</option> 
                <option value="New Jersey">New Jersey</option> 
                <option value="New Mexico">New Mexico</option> 
                <option value="New York">New York</option> 
                <option value="North Carolina">North Carolina</option> 
                <option value="North Dakota">North Dakota</option> 
                <option value="Ohio">Ohio</option> 
                <option value="Oklahoma">Oklahoma</option> 
                <option value="Oregon">Oregon</option> 
                <option value="Pennsylvania">Pennsylvania</option> 
                <option value="Rhode Island">Rhode Island</option> 
                <option value="South Carolina">South Carolina</option> 
                <option value="South Dakota">South Dakota</option> 
                <option value="Tennessee">Tennessee</option> 
                <option value="Texas">Texas</option> 
                <option value="Utah">Utah</option> 
                <option value="Vermont">Vermont</option> 
                <option value="Virginia">Virginia</option> 
                <option value="Washington">Washington</option> 
                <option value="West Virginia">West Virginia</option> 
                <option value="Wisconsin">Wisconsin</option> 
                <option value="Wyoming">Wyoming</option>
                <option> ---------------- </option>
                <option valfue="Alberta">Alberta</option>
                <option value="British Columbia">British Columbia</option>
                <option value="Manitoba">Manitoba</option>
                <option value="New Brunswick">New Brunswick</option>
                <option value="Newfoundland">Newfoundland and Labrador</option>
                <option value="Nova Scotia">Nova Scotia</option>
                <option value="Northwest Territories">Northwest Territories</option>
                <option value="Nunavut">Nunavut</option>
                <option value="Ontario">Ontario</option>
                <option value="Prince Edward Island">Prince Edward Island</option>
                <option value="Quebec">Quebec</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Yukon">Yukon</option>
            </select>
            <p><br>Additional Info</p>
            <input type="tel" class="input-large" placeholder="Phone Num" name="destPhone"> 
            <p></p>
            <input class="input-large" name="destWebsite" type="url" placeholder="website" pattern="https?://.+">
            <p></p>
            <p>Description</p>
            <textarea class="input-xxlarge" name="destDescription" style="resize: none; width: 40%;" required></textarea>
            <!-- <input type="submit" value="Submit" />  -->
            <!--
            <p>Select an image to upload</p>
             <input type="file" name="destImage" style="position: relative; left: 40%;"> -->
            <br>
           <!-- <input class ="btn btn-primary" type="submit"/> -->
             <a href="destinationDetail.php" class="btn btn-primary" id="createDestSubmitButtonButton">
                            Submit!
            </a>
        </form>
        <br/><br/>
        
        <!-- file uploader stuff -->
        
        <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="fileupload-buttonbar">
                <div class="fileupload-buttons">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="fileinput-button">
                        <span>Add files...</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <button type="submit" class="start">Start upload</button>
                    <button type="reset" class="cancel">Cancel upload</button>
                    <button type="button" class="delete">Delete</button>
                    <input type="checkbox" class="toggle">
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="fileupload-progress fade" style="display:none">
                    <!-- The global progress bar -->
                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table role="presentation"><tbody class="files"></tbody></table>
        </form>
        <br>
        <!-- The blueimp Gallery widget -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <!-- The template to display files available for upload -->
        <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress"></div>
                </td>
                <td>
                    {% if (!i && !o.options.autoUpload) { %}
                        <button class="start">Start</button>
                    {% } %}
                    {% if (!i) { %}
                        <button class="cancel">Cancel</button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <!-- The template to display files available for download -->
        <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}
                    </span>
                </td>
                <td>
                    <p class="name">
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                    </p>
                    {% if (file.error) { %}
                        <div><span class="error">Error</span> {%=file.error%}</div>
                    {% } %}
                </td>
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                    <button class="delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>Delete</button>
                    <input type="checkbox" name="delete" value="1" class="toggle">
                </td>
            </tr>
        {% } %}
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <!-- The Templates plugin is included to render the upload/download listings -->
        <script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
        <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
        <script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
        <!-- The Canvas to Blob plugin is included for image resizing functionality -->
        <script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
        <!-- blueimp Gallery script -->
        <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
        <script src="../jqueryFileUploader/js/jquery.iframe-transport.js"></script>
        <!-- The basic File Upload plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload.js"></script>
        <!-- The File Upload processing plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload-process.js"></script>
        <!-- The File Upload image preview & resize plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload-image.js"></script>
        <!-- The File Upload audio preview plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload-audio.js"></script>
        <!-- The File Upload video preview plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload-video.js"></script>
        <!-- The File Upload validation plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload-validate.js"></script>
        <!-- The File Upload user interface plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload-ui.js"></script>
        <!-- The File Upload jQuery UI plugin -->
        <script src="../jqueryFileUploader/js/jquery.fileupload-jquery-ui.js"></script>
        <!-- The main application script -->
        <script src="../jqueryFileUploader/js/main.js"></script>
        <script>
        // Initialize the jQuery UI theme switcher:
        $('#theme-switcher').change(function () {
            var theme = $('#theme');
            theme.prop(
                'href',
                theme.prop('href').replace(
                    /[\w\-]+\/jquery-ui.css/,
                    $(this).val() + '/jquery-ui.css'
                )
            );
        });
        </script>
        </div>
        <!-- BEGIN FOOTER-->
          <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
             <div class ="footer">
                 SFSU-FAU-FULDA joint SW Engineering Project Fall 2013
             </div>
          </nav>
        <!-- END FOOTER -->
      </div>
    </div>
    <!-- END CONTAINTER -->
    </body>
</html>
