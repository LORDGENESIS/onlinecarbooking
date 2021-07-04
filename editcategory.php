<?php
    include("logincheck.php");
    
    include("database.php");
    $sql="SELECT * FROM categories";
    $result = $conn->query($sql);
    $err_msg="";
     if(isset($_GET) && !empty($_GET))
    {
        $id = $_GET['id'];
        $sql2 = "SELECT * FROM categories WHERE categoryid=$id";
        $result1=$conn->query($sql2);
        $row1= $result1->fetch_assoc();
        //echo "<pre>";print_r($row);exit;
    }
    if (isset($_POST) &&! empty($_POST))
    {
        //echo "<pre>"; print_r($_POST);exit;
        
        $sql1 = "UPDATE categories SET categoryname='".$_POST['categoryname']."',
                                  status=".$_POST['status']." WHERE categoryid=".$_POST['categoryid'];

                                //echo $sql1;exit;

        if($conn->query($sql1))
            header("Location:category.php");
        else
            $err_msg="Category is not edited.";
    }

    include("header.php");
?>




<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit Category</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create-account-form" method="post">
                        <input type="hidden" name="categoryid" value="<?php echo $row1['categoryid']?>">

                            <h2 class="heading-title">
                                EDIT CATEGORY
                            </h2>
                            <p class="form-row">
                                <label>Category name</label>
                                <input value="<?php echo $row1['categoryname']?>" type="text" name ="categoryname" required="" />
                            </p>
                            <label>Status</label>
                            <p class="form-row">
                                <input value="<?php echo $row1['status']?>"type="number" name="status" required="" />
                            </p>
                             
                            <div class="submit">                    
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default" >
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        SAVE CHANGES
                                    </span>
                                </button>
                            </div>                          
                       </form>
                        <a href="category.php">Goto Category</a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>






