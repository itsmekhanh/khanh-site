<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/header.php';?>
    </head>
    <body>
        <div class="container">
            <img src="./img/home_banner.jpg"/>
            <?php include_once './includes/navbar.php' ;?>
            <div class="row-fluid">
                <div class="span6 clearfix">
                    <div class="carousel slide carousel-behind carousel-fade" style="padding-left:20px">
                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="./img/1.png"/>
                            </div>
                            <div class="item">
                                <img src="./img/2.png"/>
                            </div>
                            <div class="item">
                                <img src="./img/3.png"/>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="span6">
                    <h1 style="padding-top: 50px">Hi, I'm Khanh!</h1>
                    <h3><span class="gray" style="padding-right:30px">I am a software engineer currently based in the Bay Area where I like to write elegant code and take beautiful pictures of animals (and other subjects too!).</span></h3>
                </div>
            </div>
            <hr/>
            <div class="row-fluid">
                <div class="span6">
                    <center><h4>Latest Blog Post</h4></center>
                </div>
                <div class="span6">
                    <center><h4>Featured Gallery</h4></center>
                </div>
            </div>
        </div>
    </body>
    <?php include_once './includes/js.php'?>
    <script>
    $('.carousel').carousel();
    </script>
</html>
