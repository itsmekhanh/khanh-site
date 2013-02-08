<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="./" class="brand <?php if($page == "portfolio") echo "class='active'" ?>">Khanh Luc</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Photography <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Galleries</a></li>
                        <li><a href="#">Events</a></li>
                    </ul>
              </li>
                    <li <?php if($page == "blog") echo "class='active'" ?>><a href="./blog">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
