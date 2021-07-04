<?php
	//include("logincheck.php");
	include("database.php");
	include("header.php");
	$sql="SELECT * FROM categories";
	$result = $conn->query($sql);
?>



        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>CATEGORY LIST</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php if(isset($_SESSION['delete'])){ ?>
                        <p style="color:red;"><?php echo $_SESSION['delete'] ?></p>
                        <?php unset($_SESSION['delete']); } ?>
                        <h5>Table of available Category</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category name</th>
                                    <th>Status</th>
                                     <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php while($row=$result->fetch_assoc()){ ?>

                                <tr>
                                    <td><?php echo $row['categoryid']?></td>
                                    <td><?php echo $row['categoryname']?></td>
                                    <td><?php echo $row['status']?></td>
                                    <td><a href ="editcategory.php?id=<?php echo $row['categoryid']?>" class="btn btn-danger btn-lg btn-block">Edit</a> 
                                         <a href="deletecategory.php?id=<?php echo $row['categoryid']?>" class="btn btn-danger btn-lg btn-block" onclick =" return confirm('Are you sure')" >delete</a></td>
                                </tr>
                            		<?php } ?>
                               </tbody>

                        </table>
                            <div class="col-lg-4 col-md-4">
                       <a href="category_register.php"><input type="submit" class="btn btn-danger btn-lg btn-block" value="Add New Category"/></a>  
                    </div>
                        	
                    </div>
                </div>
                <!-- /. ROW  -->
                
            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <?php
include("footer.php");
?>
