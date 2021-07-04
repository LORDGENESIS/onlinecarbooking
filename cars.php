<?php
	//include("logincheck.php");
	include("database.php");
	include("header.php");

	$sql="SELECT c.*,ca.categoryname FROM cars c  join categories ca ON c.carcategory=ca.categoryid";
	$result = $conn->query($sql);
?>
<?php //include("side-bar.php");?>
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>CARS LIST</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    	<?php if(isset($_SESSION['delete'])){  ?>
                    	<p style="color:red;"><?php echo $_SESSION['delete'] ?></p>
                    	<?php unset($_SESSION['delete']); }  ?>
                        <h5>Table of available carss</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>CAR ID</th>
                                    <th>CAR NAME</th>
                                    <th>CAR COMPANY</th>
                                    <th>CAR CATEGORY</th>
                                    <th>CAR QUANTITY</th>
                                    <th>BOOKING PRICE</th>
                                    <th>CAR IMAGE</th>
                                    <th>STATUS</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php while($row=$result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $row['carid'] ?></td>
                                    <td><?php echo $row['carname'] ?></td>
                                    <td><?php echo $row['carcompany'] ?></td>
                                    <td><?php echo $row['categoryname'] ?></td>
                                    <td><?php echo $row['carquantity'] ?></td>
                                    <td><?php echo $row['bookingprice'] ?></td>
                                    <td><?php echo $row['carimage'] ?></td>
                                    <td><?php echo $row['status']==1?"Active":"Inactive"?></td>
                                 	<td ><a  href="edit.php?id=<?php echo $row['carid'] ?>"><div style="color: blue;">Edit</a> | <a href="deletecars.php?id=<?php echo$row['carid'] ?>" onclick="return confirm('Are You Sure?')">Delete</a></td>

                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                        
                        <a href="addcars.php"><input type="submit" class="btn btn-danger btn-lg btn-block" value="Add new cars"/></a>

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