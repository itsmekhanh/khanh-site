    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a href="./index.php" class="brand <?php if($page == "portfolio") echo "class='active'" ?>">Khanh Luc</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="dropdown">Photography<b class="caret"></b></li>
                        <li <?php if($page == "blog") echo "class='active'" ?>><a href="./blog.php">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
