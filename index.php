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
            <div class="row">
                <div class="span6 clearfix">
                    <div class="carousel slide carousel-behind">
                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="./img/1.jpg"/>
                            </div>
                            <div class="item">
                                <img src="./img/2.jpg"/>
                            </div>
                            <div class="item">
                                <img src="./img/3.jpg"/>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="span6" style="padding-top: 20px">
                    <h1>hello</h1>
                </div>
            </div>
        </div>
    </body>
    <?php include_once './includes/js.php'?>
    <script>
    $('.carousel').carousel();
    </script>
</html>
