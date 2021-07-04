<?php
	include("logincheck.php");
	
	include("database.php");
	$sql="SELECT * FROM categories";
	$result = $conn->query($sql);
	$err_msg="";
	if (isset($_POST) &&! empty($_POST)) {
		//echo "<pre>"; print_r($_POST);exit;
		$sql1= "INSERT INTO categories(categoryid,categoryname,status)
									VALUES('".$_POST['categoryid']."',
									'".$_POST['categoryname']."',
									".$_POST['status'].")";
		if($conn->query($sql1)){
			header("Location:category.php");
        }
		else{
			$err_msg="user is not added.";
        }
	}

    include("header.php");
?>




<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ADD Category</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label>Category Name</label>
                            <div class="form-row">
                            <input  type="text" name="categoryname" required="" />
                            
                        </div>

                        <div class="form-group">
                            <label>status</label>
                            
                            <input class="" type="radio" name="status" 
                             value="1" required="" checked />Active
                            <input class="" type="radio" name="status" value="0" required=""/>Inactive
                            
                        </div>
                        
                        
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Submit details"/>
                        </form>
                        
                    </div>
                    <div class="col-lg-4 col-md-4">
                       <a href="category.php"><input type="submit" class="btn btn-danger btn-lg btn-block" value="Go To Cars List"/></a>  
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>