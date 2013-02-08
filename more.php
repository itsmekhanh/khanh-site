<?php
include_once './manager/TumblrManager.php';
$tumblrManager = new TumblrManager();
$posts = $tumblrManager->getPosts(($_GET['o']-1)*10, 10);
?>
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
<a class="loadmore" href="./more?o=<?php echo $_GET['o']+1; ?>">next</a>
<?php endif;?>

