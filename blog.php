<!DOCTYPE html>
<?php $page = "blog"; ?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/header.php';?>
    </head>
    <body>
        <?php 
            include_once './includes/navbar.php' ;
            include_once './manager/TumblrManager.php';
            $tumblrManager = new TumblrManager();
            $posts = $tumblrManager->getPosts(0, 10);
        ?>
        <div class="container">  
            <div id="posts" class="row">
                <?php foreach($posts as $post): ?>
                <?php echo $post; ?>
                <?php endforeach; ?>
            </div>
        <?php include_once './includes/js.php'?>
        <script src="http://masonry.desandro.com/jquery.masonry.min.js"></script>
        <script>
        $(document).ready(function () {
   
            $("#posts").masonry({
                itemSelector: '.tumblr-post',
                isAnimated: true,
                columnWidth: 
                    function( containerWidth ) {
                    console.log("containerWidth: "+containerWidth);
                    var width = containerWidth;
                    var col = 200;
                    console.log("width: "+width);

                    if(width < 1200 && width >= 980) {
                        col = 160;
                    }
                    else if(width < 980 && width >= 768) {
                        col = 20;
                    }
                    else if(width < 768 ){
                        col = 19;
                    }
                    console.log("column: "+col);
                    return col;
                  }
            });
        });
        </script>
    </body>
</html>