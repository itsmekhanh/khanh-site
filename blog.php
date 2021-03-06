<!DOCTYPE html>
<?php 
$page = "blog"; 
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/header.php';?>
        <?php include_once './includes/js.php'?>
    </head>
    <body>
        <?php 
            include_once './includes/navbar.php' ;
            include_once './manager/TumblrManager.php';
            $tumblrManager = new TumblrManager();
            $posts = $tumblrManager->getPosts(0, 10);
        ?>
        <div class="container" style="margin-top:10px">
            <div class="row">
                <div class="span3">
                     <div class="well">
                        <img src="./img/blog_profile.jpg" alt="" /><center><p style="margin-top: 10px">Going places, meeting faces, and setting paces. Enjoying life one moment at a time.</p></center>
                        <center><iframe border="0" allowtransparency="true" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=khanhluc&color_scheme=dark" frameborder="0" height="25" scrolling="no" width="114"></iframe></center>
                     </div>
                </div>
                <div id="blog" class="span9">
                    <?php if(!empty($posts)): ?>
                        <?php foreach($posts as $post): ?>
                        <div class="row">
                            <div class='tumblr-post shadow1 span6'><?php echo $post['formatted']; ?></div>
                            <div class="span3">
                                <div class="tumblr-type-icon pull-left" style="padding-right: 10px; padding-top:4px">
                                    <img src="<?php echo "./img/{$post['post']['type']}.png"?>"/>
                                </div>
                                <div class="tumblr-date"><?php echo date('j F, Y',$post['post']['timestamp']);?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <a class="loadmore" href="more?o=2">next</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./javascript/jquery.infinitescroll.min.js"></script>
        <script type="text/javascript">
            $("#blog").infinitescroll({
                navSelector: 'a.loadmore',
                nextSelector: 'a.loadmore:last',
                itemSelector: '.row',
                loading:{
                    finishedMsg: "<em>All posts are loaded.</em>",
                    img: "./img/loading.gif",
                    msgText: "",
                    speed: 'fast'
                }
            });
        </script>
                <?php include_once './includes/footer.php';?>
    </body>
</html>