<!-- HEADER-->

<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span>alombd.bd@gmail.com</span></a></div>
                <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+8801771000096</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a><a href="#" class="blog"><i class="fa fa-rss"></i></a><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></div>
                <div class="group-sign-in"><a href="login.html" class="login">login</a><a href="register.html" class="register">register</a></div>
            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-heade">
                    <div class="logo pull-left"><a href="index-2.html" class="header-logo"><img src="assets/images/logo-color-1.png" alt=""/></a></div>
                    <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <nav class="navigation collapse navbar-collapse pull-right">
                    <ul class="nav-links nav navbar-nav">
                        <li class="dropdown active"><a href="<?php echo $this->Url->build(['controller' => 'Homes', 'action' => 'index']); ?>" class="main-menu">Home<!-- <span class="fa fa-angle-down icons-dropdown"></span> --></a>
                            <!-- <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="index-2.html" class="link-page">Home page 01</a></li>
                                <li><a href="homepage-02.html" class="link-page">Home page 02</a></li>
                                <li><a href="homepage-03.html" class="link-page">Home page 03</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu">Tutorilas<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="<?php echo $this->Url->build(['controller' => 'Headers', 'action' => 'courses']); ?>" class="link-page">courses</a></li>
                                <li><a href="<?php echo $this->Url->build(['controller' => 'Headers', 'action' => 'coursesDetail']); ?>" class="link-page">course detail</a></li>
                                <li><a href="events.html" class="link-page">events</a></li>
                                <li><a href="event-detail.html" class="link-page">event detail</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu">gallery<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="gallery-3column.html" class="link-page">gallery 3 column</a></li>
                                <li><a href="gallery-4column.html" class="link-page">gallery 4 column</a></li>
                                <li><a href="gallery-masonry.html" class="link-page">gallery masonry</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu">pages<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="categories.html" class="link-page">categories</a></li>
                                <li><a href="profile-teacher.html" class="link-page">profile teacher</a></li>
                                <li><a href="about-us.html" class="link-page">about us</a></li>
                                <li><a href="login.html" class="link-page">login</a></li>
                                <li><a href="register.html" class="link-page">register</a></li>
                                <li><a href="404.html" class="link-page">404 page</a></li>
                                <li><a href="faq.html" class="link-page">FAQ page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu">News<span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="news.html" class="link-page">news list</a></li>
                                <li><a href="news-grid.html" class="link-page">news grid</a></li>
                                <li><a href="news-grid-nonsidebar.html" class="link-page">news grid nonsidebar</a></li>
                                <li><a href="news-masonry.html" class="link-page">news masonry</a></li>
                                <li><a href="news-detail.html" class="link-page">news detail</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" class="main-menu">Contact</a></li>
                        <li class="button-search"><p class="main-menu"><i class="fa fa-search"></i></p></li>
                        <div class="nav-search hide">
                            <form><input type="text" placeholder="Search" class="searchbox"/>
                                <button type="submit" class="searchbutton fa fa-search"></button>
                            </form>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>