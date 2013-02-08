<!DOCTYPE html>
<?php $page = "home"; 
include_once './manager/TumblrManager.php';
$tumblrManager = new TumblrManager();

require_once './manager/phpFlickr.php';
$flickr = new phpFlickr("63cee3b6bc72105b32cbed186ee52655");
$photoset = $flickr->photosets_getList("49585808@N08");
$sets=$photoset['photoset'];
$max = count($sets);
$random = rand(0,$max-1);

$gallery = $sets[$random];
$post = $tumblrManager->getPosts(0, 1);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/header.php';?>
    </head>
    <body>
        <?php include_once './includes/navbar.php' ;?>
        <div class="row-fluid">
            <img src="./img/home_banner_full.jpg"/>
        </div>
        <div class="container">
            <div class="row-fluid" style="margin-top: 40px;">
                <div class="span6 clearfix">
                    <div class="carousel slide carousel-behind carousel-fade">
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
                            <div class="item">
                                <img src="./img/4.png"/>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="span6">
                    <h1>Hi, I'm Khanh!</h1>
                    <h3><span class="gray" style="padding-right:30px">I am a software engineer currently based in the Bay Area where I like to write elegant code and take beautiful pictures of animals (and other subjects too!)</span></h3>
                </div>
            </div>
            <hr/>
            <div class="row-fluid">
                <div class="span6">
                    <h4>Latest Blog Post</h4>
                    <div class="tumblr-post border1 shadow1">
                    <?php echo $post[0]['formatted']; ?>
                    </div>
                </div>
                <div class="span6">
                    <h4>Featured Gallery</h4>
                    <div class="main-gallery shadow1 border1">
                        <a href="./gallery?set=<?php echo $gallery['id'];?>" target="_blank">
                        <img src="<?php echo "http://farm{$gallery['farm']}.static.flickr.com/{$gallery['server']}/{$gallery['primary']}_{$gallery['secret']}_z.jpg"; ?>"
                        </a>
                        <h2><center><?php echo $gallery['title'];?></center></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php';?>
    </body>
    <?php include_once './includes/js.php'?>
    <script>
    $('.carousel').carousel();
    $('.dropdown-toggle').dropdown();
    </script>
</html>
