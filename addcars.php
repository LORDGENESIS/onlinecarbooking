<?php
    include("logincheck.php");
    
    include("database.php");
    $sql="SELECT* FROM categories";
    $result=$conn->query($sql);
    $err_msg="";

    if(isset($_POST) && !empty($_POST))
    {
        //echo "<pre>";print_r($_POST);exit;
        $sql1="INSERT INTO cars(carname,carcompany,categoryid,carquantity,bookingprice,status)
                                VALUES('".$_POST['carname']."',
                                        '".$_POST['carcompany']."',
                                        ".$_POST['carcategory'].",
                                        ".$_POST['carquantity'].",
                                        ".$_POST['bookingprice'].",
                                        ".$_POST['status'].")";
    //echo $_sql1;exit;
    if($conn->query($sql1))
        header("Location:cars.php");
    else
        $err_msg="car not added";                           
                                                                                    
    }
    include("header.php");
    ?>
   


    <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ADD CAR</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg ?></p>
                         
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


                        <div class="form-group">
                            <label>CAR NAME</label>
                            <div class="form-row">
                            <input  type="text" name="carname" required="" />
                            
                        </div>
                        </div>
                         <div class="form-group">
                            <label>CAR COMPANY</label>
                            <div class="form-row">
                            <input  type="text" name="carcompany" required="" />
                            
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label> CATEGORY ID</label>
                            <div class="form-row">
                            <select   name="categoryid">
                                <option value="">Select Category</option>
                                <?php while($row=$result->fetch_assoc()){ ?>
                                    <option value="<?php echo $row['categoryid'] ?>" >  
                                        <?php echo $row['categoryname'] ?>
                                        </option>
                                    <?php } ?>
                                    </select>       
                            </div>
                        </div>
                        <div class="form-group">
                            <label>CAR QUANTITY</label>
                            <div class="form-row">
                            <input  type="number" name="carquantity" required="" />
                           
                        </div>
                        </div>
                        <div class="form-group">
                            <label>BOOKING PRICE</label>
                            <div class="form-row">
                            <input  type="number" name="bookingprice" required="" />
                           
                        </div>
                        </div>
                        <div class="form-group">
                            <label>status</label>
                            
                            <input class="" type="radio" name="status" 
                             value="1" required="" checked />Active
                            <input class="" type="radio" name="status" value="0" required=""/>Inactive
                            
                        </div>
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Add new cars"/>
                    </form> 
                    <p></p>
                    <a href="cars.php"><input type="submit" class="btn btn-danger btn-lg btn-block" value="Go To Cars List"/></a>                  
                    </div>

                    <div class="col-lg-4 col-md-4">
                       
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>