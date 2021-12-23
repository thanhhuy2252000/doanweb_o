<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php include'layout/headpage.php' ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php include'layout/left-sidebar.php' ?>
    
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <?php include'layout/start-menu-area.php' ?>
    </div>
    
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <?php include'layout/mobile-menu.php' ?>
    </div>
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
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>
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
                                                                        <?php
                                        if(isset($_GET['edit']))
                                        $id=$_GET['edit'];
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname="web";
                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT `list_id`, `list_name` FROM `list`  WHERE list_id=:list_id");
                                            $stmt->bindParam(':list_id', $id);
                                            $stmt->execute();
                                            $product= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                                            IF($product){
                                                foreach($product as $product){
                                                    echo '<form action="../controller/product-portfolioController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">';
                                                    echo '<div class="row form-group">';
                                                    echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">id</font></label></div>';
                                                    echo '<div class="col-12 col-md-9"><input type="text" value="'.$product['list_id'].'" id="txt_id" name="txt_id" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">name</font></label></div>';
                                                        echo '<div class="col-12 col-md-9"><input type="text" value="'.$product['list_name'].'" id="txt_name" name="txt_name" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div>';
                                                        echo '<a href="../controller/product-portfolio-controller.php?update='. $id .' type = "button" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Update';
                                                        echo '</a>';
                                                        
                                                    echo '</div>';
                                                    echo '</form>';
                                                }
                                            }
                                        }
                                        catch(PDOException $e) {
                                        echo "Error: " . $e->getMessage();
                                        }
                                        $conn = null;
                                      ?>

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