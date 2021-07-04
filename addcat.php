<?php
	include("logincheck.php");
	include("header.php");
	include("database.php");
	
	$err_msg="";


	if(isset($_POST) && !empty($_POST))
	{
		
		$sql1="INSERT INTO categories(categoryname,status)
								 VALUES('".$_POST['categoryname']."',
										".$_POST['status'].")";

	//echo $sql1;exit;
	if($conn->query($sql1))
		header("Location:categories.php");
	else
		$err_msg="category Is Not Added.";
	}

?>

	<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ADD CATEGORY</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4"> 
                        <p style="color: red;"><?php echo $err_msg ?></p>
                        <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">

                        <div class="form-row">
                            <label>Category name</label>
                            <input  type="text" name="categoryname" required="" />
                            <!--<p class="help-block">Help text here.</p> -->
                        </div>

                         
                        <div class="form-group">
                            <label>STATUS</label>
                            <input class="" type="radio" value="1" name="status" required=""checked />Available
                            <input class="" type="radio" value="0" name="status" required="" />Not Available
                            <!--<p class="help-block">Help text here.</p>-->
                        </div>

                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="ADD CATEGORY"/>
                        </form>
                        <a href="index.php">GO HOME</a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
