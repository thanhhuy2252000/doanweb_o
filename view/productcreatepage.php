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
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product create</a></li>
                                   
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="content-body">
                                                <div class="container-fluid">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="form-validation">
                                                                        <form action="../controller/productcontroller.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                                            <div class="row form-group">
                                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">id</font></label></div>
                                                                                <div class="col-12 col-md-9"><input type="text" id="txt_id" name="txt_id" class="form-control"></div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">name</font></label></div>
                                                                                <div class="col-12 col-md-9"><input type="text" id="txt_name" name="txt_name" class="form-control"></div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label"><font color="white">price</font></label></div>
                                                                                <div class="col-12 col-md-9"><input id="txt_price" name="txt_price" class="form-control" require></div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label"><font color="white">list-id</font></label></div>
                                                                                <div class="col-12 col-md-9"><input  id="txt_list_id" name="txt_list_id" class="form-control"></div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                
                                                                                <div class="col col-md-3"><label for="file-input" class=" form-control-label"><font color="white">avatar</font></label></div>
                                                                                <div class="col-12 col-md-9"><input  type="file" name="fileToUpload" id="fileToUpload" class="form-control-file"></div>
                                                                            
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
                    </div>
                </div>
            </div>
        </div>
                                                    
        <?php include'layout/footerpage.php' ?>

    
    <?php include'layout/script.php'?>
</body>

</html>