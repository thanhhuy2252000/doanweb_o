<?php 
session_start(); 
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="icon nalika-menu-task"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                <div class="header-top-menu tabl-d-n hd-search-rp">
                                    <div class="breadcome-heading">
                                        <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        
                                        
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <i class="icon nalika-user"></i>
                                                <span class="admin-name">Advanda Cro</span>
                                                <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <?php

                                                    if(isset($_SESSION['useremail'])){

                                                        // echo'<li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>';
                                                        // echo'</li>';
                                                        echo'<li><a href="#"><span class="icon nalika-user author-log-ic"></span>'.$_SESSION["useremail"].'</a>';
                                                        echo' </li>';
                                                        echo'<li><a href="../view/logout.php"><span class="icon nalika-settings author-log-ic"></span> Logout</a>';
                                                        echo'</li>';
                                                    }else{
                                                        echo'<li><a href="../view/login.php"><span class="icon nalika-unlocked author-log-ic"></span>Login</a>';
                                                        echo'</li>';
                                                        // echo'<li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>';
                                                        // echo'</li>';
                                                        
                                                     }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>