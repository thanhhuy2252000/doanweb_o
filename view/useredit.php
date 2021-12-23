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
                                            $stmt = $conn->prepare("SELECT `user_id`, `user_name`, `user_pass`, `user_phone`, `user_address` FROM `user`  WHERE user_id=:user_id");
                                            $stmt->bindParam(':user_id', $id);
                                            $stmt->execute();
                                            $user= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                                            IF($user){
                                                foreach($user as $user){
                                                    echo '<form action="../controller/productController.php" method="POST" enctype="multipart/form-data" class="form-horizontal">';
                                                    echo '<div class="row form-group">';
                                                    echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">id</font></label></div>';
                                                    echo '<div class="col-12 col-md-9"><input type="text" value="'.$user['user_id'].'" id="txt_id" name="txt_id" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">name</font></label></div>';
                                                        echo '<div class="col-12 col-md-9"><input type="text" value="'.$user['user_name'].'" id="txt_name" name="txt_name" class="form-control"></div>';
                                                    echo '</div>';
                                                      echo '<div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="text-input" class=" form-control-label"><font color="white">password</font></label></div>';
                                                        echo '<div class="col-12 col-md-9"><input type="text" value="'.$user['user_pass'].'" id="txt_pass" name="txt_pass" class="form-control"></div>';
                                                    echo '</div>';
                                                   echo ' <div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="password-input" class=" form-control-label"><font color="white">phone</font></label></div>';
                                                        echo '<div class="col-12 col-md-9"><input  id="txt_status" value="'.$user['user_phone'].'" name="txt_phone" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo ' <div class="row form-group">';
                                                        echo '<div class="col col-md-3"><label for="password-input" class=" form-control-label"><font color="white">address</font></label></div>';
                                                        echo '<div class="col-12 col-md-9"><input  id="txt_status" value="'.$user['user_address'].'" name="txt_adress" class="form-control"></div>';
                                                    echo '</div>';
                                                    echo '<div>';
                                                        echo '<a href="../controller/UserController.php?update='. $id .'" type = "button" class="btn btn-primary btn-sm">
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
        
        <?php include'layout/footerpage.php' ?>

    <?php include'layout/script.php'?>
</body>

</html>