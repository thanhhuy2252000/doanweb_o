<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php include'layout/headpage.php' ?>
</head>

<body>

    <?php include'layout/left-sidebar.php' ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <?php include'layout/start-menu-area.php' ?>
    </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <?php include'layout/mobile-menu.php' ?>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <?php include'layout/breadcome-area.php' ?>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>All Form Element</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                               <form action="../controller/UserController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">id</font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_id" name="txt_id" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">name</font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_name" name="txt_name" class="form-control"></div>
                                        </div>
                                       
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label"><font color="white">password</font></label></div>
                                            <div class="col-12 col-md-9"><input  id="txt_pass" name="txt_pass" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label"><font color="white">phone</font></label></div>
                                            <div class="col-12 col-md-9"><input  id="txt_phone" name="txt_phone" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label"><font color="white">address</font></label></div>
                                            <div class="col-12 col-md-9"><input  id="txt_adress" name="txt_adress" class="form-control"></div>
                                        </div>
                                        
                                        <div>
                                            <button name="save" value="save" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Create
                                            </button>
                                            
                                        </div>
                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        
        <?php include'layout/footerpage.php' ?>

    <?php include'layout/script.php'?>
</body>

</html>