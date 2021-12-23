<?php  ?>
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
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>User List</h4>
                            
                            <div class="add-product btn btn-custon-four">
                                <a href="usercreate.php">New user</a>
                            </div>
                            <table>
                                <tr>
                              <th>Image</th>
                              <th>id</th>
                              <th>Name</th>
                              <th>phone</th>
                              <th>address</th>
                              <th>Setting</th>
                          </tr>
                    <?php 
                        session_start();
                        if(isset($_GET['edit']))
                        $id=$_GET['edit'];
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname="web";
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT `user_id`, `user_name`, `user_pass`, `user_phone`, `user_address` FROM `user` ");
                            $stmt->execute();
                            $user= $stmt-> fetchALL(PDO::FETCH_ASSOC);
                            IF($user){
                                foreach($user as $user){
                                  echo'<form action="../controller/usersController.php" method="POST" enctype="multipart/form-data" class="form-horizontal"';
                                    echo '<tr>';
                                    echo '<td class = "avatar">';
                                    echo '<div class = "round-img">';
                                    echo '<a href = "#"><img class = "rounded-circle" src = "images/1.jpg" alt = ""></a>';
                                    echo '</div>';
                                    echo '</td>';
                                    echo '<td name="txt_id">'.$user['user_id'].'</td>';
                                    echo '<td name="txt_name"> <span class = "name">'.$user['user_name'].'</span> </td>';
                                    echo '<td name="txt_phone">';
                                    echo '<span class = "type phone">'.$user['user_phone'].'</span>';
                                    echo '</td>';
                                    echo '<td name="txt_adress"> <span class = "adress">'.$user['user_address'].'</span> </td>';
                                    echo '<td width="50px">';
                                    echo '<a href="useredit.php?edit='. $user['user_id'] .'" type = "button" class = "btn btn-success"><i class = "fa fa-edit"></i> Sửa</a>';
                                    echo '</td>';
                                    echo '<td width="50px">';
                                    echo '<a href="../controller/userController.php?delete='. $user['user_id'] .'" type = "button" class = "btn btn-danger" "  ><i class = "fa fa-times"></i> Xóa</a>';
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