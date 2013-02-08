<!DOCTYPE html>
<?php 
$page = "events";
require_once './manager/phpFlickr.php';
$flickr = new phpFlickr("63cee3b6bc72105b32cbed186ee52655");
$photoset = $flickr->photosets_getList("49585808@N08");
$sets=$photoset['photoset'];
$count = 0;
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/header.php';?>
        <?php include_once './includes/js.php'?>
    </head>
    <body>
        <?php include_once './includes/navbar.php' ;?>
        <div class="container" style="margin-top: 20px; padding-bottom:220px">
            <?php if(isset($sets)): ?>
                <?php for($i=count($sets)-1; $i>=0; $i--): ?>
                    <?php if($count == 0): ?>
                        <div class="row">
                            <?php endif; ?>
                            <div class="span2">
                            <a href="./gallery?set=<?php echo $sets[$i]['id']?>" target="_blank">
                                <img class="event-thumbnail border1 shadow1" src="<?php echo "http://farm{$sets[$i]['farm']}.static.flickr.com/{$sets[$i]['server']}/{$sets[$i]['primary']}_{$sets[$i]['secret']}_q.jpg"; ?>"/>
                            </a>
                            <center><p style="padding-top:5px"><?php echo $sets[$i]['title']; $count++; ?></p></center>
                            </div>
                        <?php if($count== 6): ?>
                        </div>
                        <?php $count = 0; ?>
                        <?php endif; ?>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
                <?php include_once './includes/footer.php';?>
    </body>

</html>
