<!DOCTYPE html>
<html lang="en">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/header.php';?>
           <style>
      html, body {
       height:100%;
      }
    </style>
    </head>
    
</html>
<body>
    <?php include_once './includes/navbar.php' ;?>
  <!-- BEGIN Timeline Embed -->
  <div id="timeline-embed"></div>
  <script type="text/javascript">
    var timeline_config = {
        width: "100%",
        height: "100%",
        source: {
	"timeline":
	{
		"headline":"The Main Timeline Headline Goes here",
		"type":"default",
		"text":"<p>Intro body text goes here, some HTML is ok</p>",
		"asset": {
			"media":"http://yourdomain_or_socialmedialink_goes_here.jpg",
			"credit":"Credit Name Goes Here",
			"caption":"Caption text goes here"
		},
		"date": [
			{
				"startDate":"2011,12,10",
				"endDate":"2011,12,11",
				"headline":"Headline Goes Here",
				"text":"<p>Body text goes here, some HTML is OK</p>",
				"tag":"This is Optional",
				"asset": {
					"media":"http://twitter.com/ArjunaSoriano/status/164181156147900416",
					"thumbnail":"optional-32x32px.jpg",
					"credit":"Credit Name Goes Here",
					"caption":"Caption text goes here"
				}
			}
		],
		"era": [
			{
				"startDate":"2011,12,10",
				"endDate":"2011,12,11",
				"headline":"Headline Goes Here",
				"tag":"This is Optional"
			}
			
		],
		"chart": [
			{
				"startDate":"2011,12,10",
				"endDate":"2011,12,11",
				"headline":"Headline Goes Here",
				"value":"28"
			}
			
		]
		
	}
}
    }
  </script>
  <?php include_once './includes/js.php'?>
  <script type="text/javascript" src="./javascript/timeline/js/storyjs-embed.js"></script>
  <!-- END Timeline Embed-->
</body>
</html>