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
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <?php include'layout/breadcome-area.php' ?>
            </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="productcreatepage.php">Add Product</a>
                            </div>
                            <table>
                                <tr>
                              <th>Image</th>
                              <th>id</th>
                              <th>Name</th>
                              <th>Price</th>
                              <th>type id</th>
                              <th>Setting</th>
                          </tr>
                               
                                <?php
                                $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname="web";
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT `product_id`, `product_name`, `product_price`, `product_img`, `list_id` FROM `product`");
                            $stmt->execute();
                            $product= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                            IF($product){
                                foreach($product as $product){
                                  echo'<form action="../controller/productcontroller.php" method="POST" enctype="multipart/form-data" class="form-horizontal"';
                                    echo '<tr>';
                                    echo '<td class = "avatar">';
                                    echo '<div class = "round-img">';
                                    echo '<a href = "#"><img class = "rounded-circle" src = "images/'.$product['product_img'].'" alt = ""></a>';
                                    echo '</div>';
                                    echo '</td>';
                                    echo '<td name="txt_id">'.$product['product_id'].'</td>';
                                    echo '<td name="txt_name"> <span class = "name">'.$product['product_name'].'</span> </td>';
                                    echo '<td name="txt_price"> <span class = "price">'.$product['product_price'].'</span> </td>';
                                    echo '<td name="txt_list_id">';
                                    echo '<span class = "list id">'.$product['list_id'].'</span>';
                                    echo '</td>';
                                    
                                    echo '<td width="50px">';
                                    echo '<a href="editProductpage.php?edit='. $product['product_id'] .'" type = "button" class = "btn btn-success"><i class = "fa fa-edit"></i> Sửa</a>';
                                    echo '</td>';
                                    echo '<td width="50px">';
                                    echo '<a href="../controller/productController.php?delete='. $product['product_id'] .'" type = "button" class = "btn btn-danger" "  ><i class = "fa fa-times"></i> Xóa</a>';
                                    echo '</td>';
                                    echo '</tr>';
                                    echo '</form>';
                                }
                            }
                        }
                        catch(PDOException $e) {
                          echo "Error: " . $e->getMessage();
                            }
                            $conn = null;
                                 ?>
                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
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