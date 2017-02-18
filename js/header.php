<div class="header-wrapper style03">
            <!-- .header.header-style02 start -->
            <header id="header"  class="header-style03" style="margin-top:-9px; margin-bottom:-9px;">
                <div class="logo-info-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo1.png" alt=""/>
                                    </a>
                                </div><!-- .logo end -->
                            </div><!-- .col-md-6 end -->

                            <div class="col-md-7" style="margin-top: 16px;">
                                <nav class="navbar navbar-default nav-left" role="navigation">
                                        <!-- MAIN NAVIGATION -->
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li <?php if($_SESSION['rcpage'] == 1) { ?> class="dropdown current-menu-item" <?php } ?>>
                                                    <a href="index.php" >Home</a>
                                                    <!-- .dropdown-menu end -->
                                                </li><!-- .dropdown end -->

                                                <li <?php if($_SESSION['rcpage'] == 2) { ?> class="dropdown current-menu-item" <?php } ?>>
                                                    <a href="about.php">About Us</a>
                                                    <!-- .dropdown-menu end -->
                                                </li><!-- .dropdown end -->

                                                <li <?php if($_SESSION['rcpage'] == 3) { ?> class="dropdown current-menu-item" <?php } ?>>
                                                    <a href="services.php">Services</a>
                                                    <!-- .dropdown-menu end -->
                                                </li><!-- .dropdown end -->

                                                <li <?php if($_SESSION['rcpage'] == 4) { ?> class="dropdown current-menu-item" <?php } ?>>
                                                    <a href="contact.php">Contact Us</a>
                                                    <!-- .dropdown-menu end -->
                                                </li><!-- .dropdown end -->

                                                <!-- .dropdown end -->
                                            </ul><!-- .nav.navbar-nav end -->

                                            <!-- RESPONSIVE MENU -->
                                            <div id="dl-menu" class="dl-menuwrapper">
                                                <button class="dl-trigger">Open Menu</button>

                                                <ul class="dl-menu">
                                                    <li>
                                                        <a href="index.index">Home</a>
                                                        <!-- dl-submenu end -->
                                                    </li>

                                                    <li>
                                                        <a href="about.php">About</a>
                                                        <!-- dl-submenu end -->
                                                    </li>

                                                    <li>
                                                        <a href="services.php">Services</a>
                                                        <!-- dl-submenu end -->
                                                    </li>
                                                                                                
                                                    <li>
                                                        <a href="contact.php">Contact Us</a>
                                                        <!-- .dl-submenu end -->
                                                    </li>
                                                </ul><!-- .dl-menu end -->
                                            </div><!-- #dl-menu end -->                                         
                                            <a class="btn btn-medium" href="#">
                                                <span style="font-size:18px;">
                                                    0423 808 240
                                                </span>
                                            </a>
                                        </div><!-- MAIN NAVIGATION END -->
                                    </nav><!-- .info-container end -->
                            </div><!-- .col-md-6 end -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->
                </div><!-- .logo-info-container end -->

                <!-- .header-inner end -->
            </header><!-- .header.header-style02 -->
        </div>