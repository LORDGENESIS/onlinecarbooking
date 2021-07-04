        <?php include("database.php");
        $sql = "SELECT * FROM cars";
        $result= $conn->query($sql);

        $sql1 = "SELECT * FROM categories";
        $result1= $conn->query($sql1);

        if(isset($_GET) && !empty($_GET))
        {
            $categoryid=$_GET['categoryid'];
            $sql = "SELECT * FROM cars WHERE carcategory=$categoryid";
            $result = $conn->query($sql);
        }
        $sql="SELECT rating FROM cars";
         ?>


        <?php 
        include ("header.php"); ?>





        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                           <h2>ONLINE CAR BOOKING</h2> 
                           <ul class="breadcrumbs-list">
                                <li>
                                   Home
                                </li>
                                <li> <a title="Return to Home" href="/finalproject/">ONLINE CAR BOOKING</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Breadcrumbs Area Start --> 
        <!-- Shop Area Start -->
        <div class="shopping-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="shop-widget">
                            <div class="shop-widget-top">
                                <aside class="widget widget-categories">
                                    <h2 class="sidebar-title text-center">CATEGORIES</h2>
                                    <ul class="sidebar-menu">
                                        <?php while ($row1=$result1->fetch_assoc()) { ?>
                                        <li>
                                            <a href="/finalproject/?categoryid=<?php echo $row1['categoryid'] ?>">
                                               <i class="fa fa-angle-double-right"></i>
                                                <?php echo $row1['categoryname']  ?>                                       
                                                <span><?php echo $row1['status'] ?></span>
                                            </a>
                                           </li>
                                       <?php } ?>
                                        
                                    </ul>
                                    <!-- <a href="addcat.php"><input type="" class="btn btn-danger btn-lg btn-block" value="ADD Category"/></a> -->
                                </aside> 
                                                            
                            </div>
                            <div class="shop-widget-bottom">
                                <aside class="widget widget-tag">
                                    <h2 class="sidebar-title">POPULAR TAG</h2>
                                    <ul class="tag-list">
                                        <li>
                                            <a href="#">Sedan</a>
                                        </li>
                                        <li>
                                            <a href="#">Hatchback</a>
                                        </li>
                                        <li>
                                            <a href="#">LUV</a>
                                        </li>
                                        <li>
                                            <a href="#">XUV</a>
                                        </li>
                                        <li>
                                            <a href="#">SUV</a>
                                        </li>
                                        <li>
                                            <a href="#">Classic</a>
                                        </li>
                                    </ul>
                                </aside>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="shop-tab-area">
                            
                            <div class="tab-content">
                                <div class="row tab-pane fade in active" id="home">
                                    <div class="shop-single-product-area">
                                        <?php while($row=$result->fetch_assoc()){  ?>

                                        <div class="col-md-4 col-sm-6">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="img/featured/<?php echo $row['carimage'] ?>">
                                                        <div class="price"><span>INR</span><?php echo $row['bookingprice']  ?><span>/Day</span></div>
                                                    </a>
                                                    <div class="product-description">
                                                        <div class="functional-buttons">
                                                            <a href="addtocart.php?carid=<?php echo $row['carid']; ?>" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            
                                                            <!-- <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"> -->
                                                                <i class="fa fa-compress"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="banner-bottom text-center">
                                                    <div class="banner-bottom-title">
                                                        <a href="#"><?php echo $row['carname'] ?></a>
                                                    </div>
                                                    <div class="rating-icon">
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

                                       
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->
        <!-- <a href="cars.php" type="submit" class="btn btn-danger btn-lg btn-block" value="">CARS LIST</a> -->

        <<?php include ("footer.php"); ?>