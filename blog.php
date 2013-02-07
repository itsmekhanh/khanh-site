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
            //$posts = $tumblrManager->getPosts(10, 20);
        ?>
        <div class="container">
            <div id="posts" class="row" style="margin-top: 10px">
                <?php foreach($posts as $post): ?>
                <?php echo $post; ?>
                <?php endforeach; ?>
            </div>
            <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Modal header</h3>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>
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
             
                    var width = containerWidth;
                    var col = 200;

                    if(width < 1200 && width >= 980) {
                        col = 160;
                    }
                    else if(width < 980 && width >= 768) {
                        col = 20;
                    }
                    else if(width < 768 ){
                        col = 19;
                    }
                    return col;
                  }
            });
            
            $('#postModal').modal();
        });
        </script>
    </body>
</html>