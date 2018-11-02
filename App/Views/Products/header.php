<?php 
    $firstIndex = strripos($_SERVER["REQUEST_URI"], "/");
    $string=$_SERVER["REQUEST_URI"];
    $query=substr($string,$firstIndex+1,strlen($string));
?>
<div id="site-header-wrap" style="box-shadow: 3px 3px 3px #ccc;position: fixed;z-index: 2;width: 100%;">
<!-- Top Bar -->
<div id="top-bar" class="style-2">
    <div id="top-bar-inner" class="container">
        <div class="top-bar-inner-wrap">
            
            <div class="top-bar-socials">
                <div class="inner">
                    <span class="icons">
                        <a href="#" title="Twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        <a href="https://www.facebook.com/pajogroup/" title="Facebook" target="_blank">
                            <span class="fa fa-facebook" aria-hidden="true"></span>
                        </a>
                        <a href="#" title="Pinterest"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                    </span>
                </div>
            </div><!-- /.top-bar-socials -->

            <div class="top-bar-content">
                <span id="top-bar-text">
                    <i class="fa fa-phone-square"></i>+250788307212
                    <i class="fa fa-envelope"></i>pajogroup@gmail.com
                    <i class="fa fa-clock-o"></i>Mon-Fri: 7:00 - 17:00
                </span>
            </div><!-- /.top-bar-content -->
        </div>
    </div>
</div>
<header id="site-header" class="header-front-page style-1" style="">
    <div id="site-header-inner" class="container">
        <div class="wrap-inner">          
            <div id="site-logo" class="clearfix">
                <div id="site-logo-inner">
                    <a href="home" title="Construction" rel="home" class="main-logo">
                        <img src="assets/img/products/logo.png" alt="Pajo Group" data-retina="assets/img/logo@2x.png" data-width="204" data-height="30">
                    </a>
                </div>
            </div>
            <div class="mobile-button"><span></span></div>

            <nav id="main-nav" class="main-nav">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="home">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Company</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">About Us</a></li>
                            <li class="menu-item"><a href="#">Mission & Vision</a></li>
                            <li class="menu-item"><a href="#">Our Team</a></li>
                            <li class="menu-item"><a href="#">Services</a></li>
                        </ul>
                    </li>
                    <li class="menu-item <?php 
                        if($query=="products"){
                            echo 'current-menu-item';
                        }
                     ?>">
                        <a href="products">Products</a>
                    </li>
                    <li class="menu-item <?php 
                        if($query=="news"){
                            echo 'current-menu-item';
                        }
                     ?>">
                        <a href="news">News & Updates</a>
                    </li>
                    <li class="menu-item <?php 
                        if($query=="contact"){
                            echo 'current-menu-item';
                        }
                     ?>">
                        <a href="contact">Contact</a>
                    </li>
                </ul>
            </nav><!-- /#main-nav -->

            <div id="header-search">
                <a class="header-search-icon" href="#"><span class="fa fa-search"></span></a>

                <form role="search" method="get" class="header-search-form" action="#">
                    <input type="text" value="" name="s" class="header-search-field" placeholder="Type and hit enter...">
                    <button type="submit" class="header-search-submit" title="Search">Search</button>
                    <input type="hidden" name="post_type" value="post">
                </form>
            </div>
        </div>
    </div>
</header>
</div>