<!DOCTYPE html>
<?php 
$page = "gallery";
$jsSource = "./javascript/simpleviewer/js/simpleviewer.js";
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/js.php'?>
        <style type="text/css">
            html, body {
            height: 100%;
            overflow: hidden;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #222;
            color: #888;
            font-family: sans-serif;
            font-size: small;
        }
        </style>
        <script type="text/javascript">
            var searchStr, searchStrParams, parameters, parameter, i;
            var searchStr = window.location.search.substr(1);
            var searchStrParams = searchStr.split('&');
            parameters = {};
            for (i = 0; i < searchStrParams.length; i += 1) {
              parameter = searchStrParams[i].split('=');
              parameters[parameter[0]] = decodeURIComponent(parameter[1]);
            }

            flashvars = {};
            flashvars.galleryURL = "./javascript/simpleviewer/gallery.xml";
            if(parameters.user != undefined){
                flashvars.flickrUserName = parameters.user;
            }
            if(parameters.tags != undefined){
                flashvars.flickrTags = parameters.tags;
            }
            if(parameters.set != undefined){
                flashvars.flickrSetId = parameters.set;
            }

            </script>
            <script type="text/javascript" src="<?php echo $jsSource?>"></script>
            <script type="text/javascript">
            simpleviewer.ready(function () {
              SV.simpleviewer.load('sv-container', '100%', '100%', '222222', true, flashvars);
            });
        </script>
    </head>
    <body>
           <div id="sv-container"></div>
           <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-31362963-1']);
            _gaq.push(['_trackPageview']);

            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </body>

</html>
