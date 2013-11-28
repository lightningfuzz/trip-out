<?php

?>


<html>
    <head>
        <title>TRIP OUT!</title>    
        <link rel ="stylesheet" type ="text/css" href ="css/bootstrap.css">
        <link rel ="stylesheet" type ="text/css" href ="css/bootstrap-responsive.css"> 
        <link rel ="stylesheet" type ="text/css" href ="css/index.css">
        <script src="js/bootstrap.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Start: Google Analytics Code -->
         <script>
             
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-45881599-1', 'sfsuswe.com');
            ga('send', 'pageview');

         </script>
        
        <!-- End: Google Analytics Code -->
        
    </head>
    <body> 
        <div id="demo">
            <ul id="menu">
                <li><a href="#/apricots">Learn about Apricots</a></li>
                <li><a href="#/bananas">Lean about Bananas</a></li>
                <li><a href="#/coconuts">Learn about Coconuts</a></li>
            </ul>
            <div id="result">
                <div id="content">
                        <div id="apricots">
                                Apricots are small and orange.
                        </div>
                        <div id="bananas">
                                Bananas are long and yellow.
                        </div>
                        <div id="coconuts">
                                Coconuts are round and hairy.
                        </div>
                </div>
                <div id="current"></div>
            </div>
        <div>
        <!--FANCY BOX FILES-->
        <!-- Add jQuery library --
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <!--END FANCYBOX FILES-->
    </body>
    <!-- Include jQuery (History Requirement) -->
    <script type="text/javascript" src="jquery-history/scripts/jquery-1.4.2.min.js"></script>
    <!-- Include History (Production) -->
    <script type="text/javascript" src="jquery-history/scripts/jquery.history.min.js"></script>
    
    <script>
        
        	$(function(){
			// Fetch the elements
			var $result = $('#result'),
				$menu = $('#menu'),
				$content = $('#content'),
				$apricots = $('#apricots'),
				$bananas = $('#bananas'),
				$coconuts = $('#coconuts'),
				$current = $('#current');
			
			// Get the tabs
			var $tabs = $content.children();
			
			// Hide all our tabs initially
			$tabs.hide();
			
			// Fetch our original document title
			var document_title = document.title;
			
			// Define our update menu function - as this is used a lot
			var updateMenu = function(state){
				// Update out tab menu
				$menu.children('li:has(a[href="#'+state+'"])').addClass('active').siblings('.active').removeClass('active');
			};
			
			// Bind a handler for ALL hash/state changes
			$.History.bind(function(state){
				// Update the current element to indicate which state we are now on
				$current.text('Our current state is: ['+state+']');
				// Update the page's title with our current state on the end
				document.title = document_title + ' | ' + state;
			});
			
			// Bind a handler for state: apricots
			$.History.bind('/apricots',function(state){
				// Update Menu
				updateMenu(state);
				// Show apricots tab, hide the other tabs
				$tabs.hide();
				$apricots.stop(true,true).fadeIn(200);
			});
		
			// Bind a handler for state: bananas
			$.History.bind('/bananas',function(state){
				// Update Menu
				updateMenu(state);
				// Show bananas tab, hide the other tabs
				$tabs.hide();
				$bananas.stop(true,true).fadeIn(200);
			});
			
			// Bind a handler for state: coconuts
			$.History.bind('/coconuts',function(state){
				// Update Menu
				updateMenu(state);
				// Show coconuts tab, hide the other tabs
				$tabs.hide();
				$coconuts.stop(true,true).fadeIn(200);
			});
		});
        </script>
</html>
