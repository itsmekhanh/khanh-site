<!DOCTYPE html>
<?php 
$page = "galleries"; 
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include_once './includes/header.php';?>
        <?php include_once './includes/js.php'?>
    </head>
    <body>
        <?php include_once './includes/navbar.php' ;?>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="span6" style="margin-bottom: 20px">
                    <div class="border1 shadow1 main-gallery">
                    <a id="people" href="./gallery?tags=people" target="_blank"><img src="./img/people.jpg"/></a>
                    <center><h2>People</h2></center>
                    </div>
                </div>
                <div class="span6" style="margin-bottom: 20px">
                    <div class="border1 shadow1 main-gallery">
                   <a id="animals" href="./gallery?tags=animals" target="_blank"><img src="./img/animals.jpg"/></a>
                    <center><h2>Animals</h2></center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span6" style="margin-bottom: 20px">
                    <div class="border1 shadow1 main-gallery">
                    <a id="travels" href="./gallery?tags=travels" target="_blank"><img src="./img/travels.jpg"/></a>
                    <center><h2>Travels</h2></center>
                    </div>
                </div>
                <div class="span6" style="margin-bottom: 20px">
                    <div class="border1 shadow1 main-gallery">
                    <a id="nature" href="./gallery?tags=nature" target="_blank"><img src="./img/nature.jpg"/></a>
                    <center><h2>Nature</h2></center>
                    </div>
                </div>
            </div>
        </div>
                <?php include_once './includes/footer.php';?>
    </body>

</html>
