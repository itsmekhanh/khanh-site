<!DOCTYPE html>
<?php 
$page = "blog"; 
if(empty($_GET['o'])){
    $_GET['o']=1;
}
?>
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
        <div class="container" style="margin-top:10px">
            <div class="row">
                <div class="span3">
                     <div class="well">
                        <img src="./img/blog_profile.jpg" alt="" /><center><p style="margin-top: 10px">Going places, meeting faces, and setting paces. Enjoying life one moment at a time.</p></center>
                    </div>
                </div>
                <div class="span9" id="blog">
                    <?php if(!empty($posts)): ?>
                        <?php foreach($posts as $post): ?>
                        <div class="row"><div class='tumblr-post shadow1 span6'><?php echo $post['formatted']; ?></div>
                            <div class="span3">
                                <div class="tumblr-type-icon pull-left" style="padding-right: 10px; padding-top:4px">
                                    <img src="<?php echo "./img/{$post['post']['type']}.png"?>"/>
                                </div>
                                <div class="tumblr-date"><?php echo date('j F, Y',$post['post']['timestamp']);?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <a class="loadmore" href="./more.php">next</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    
        <?php include_once './includes/js.php'?>
        <script src="./javascript/jquery.infinitescroll.min.js"></script>
        <script>
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
    </body>
</html>