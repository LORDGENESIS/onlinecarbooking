<?php 
$err_msg="";
    if (isset($_POST) && !empty($_POST))
    {
        //echo "<pre>";
        //print_r($_POST);
        //echo "</pre>";
        include("database.php");
        $uname=$_POST['uname'];

        $password=$_POST['password'];
        $sql = "SELECT * FROM customers WHERE cname='".$uname."' AND password='".$password."'";
        //echo $sql;exit;

        $result = $conn->query($sql);//returns result
        $row=$result->fetch_assoc();//converted to associative array
        //echo "<pre>";
        //print_r($row);
        //echo "</pre>";
        //exit;
        
        if (!empty($row)) {

            if($uname ='admin'){
            session_start();
            $_SESSION['user']=$row;
            header("Location:index1.php");//Redirect to dashboard page
        }
        else{
            session_start();
            $_SESSION['user']=$row;
            header("Location:index.php");
            }
    }
        else{
            $err_msg="Username/password is wrong";
        }


    }
    ?>

<?php include("header.php");  ?>

<div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                           <h2>LOGIN/REGISTER</h2> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a title="Return to Home" href="index.php">Home</a>
                                </li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Breadcrumbs Area Start --> 
        <!-- Loging Area Start -->
        <div class="login-account section-padding">
           <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <form action="#" class="create-account-form" method="post">
                            <h2 class="heading-title">
                                CREATE AN ACCOUNT
                            </h2>
                            <p class="form-row">
                                <p class="form-row"><input type="text" placeholder="Username"></p>
                                <p class="form-row"><input type="email" placeholder="Email address"></p>
                                <p class="form-row"><input type="password" placeholder="Unique password"></p>
                                <p class="form-row"><input type="number" placeholder="phone number"></p>
                                <p class="form-row"><input type="email" placeholder="Email address"></p>
                                <p class="form-row"><input type="email" placeholder="Email address"></p>
                                <p class="form-row"><input type="email" placeholder="Email address"></p>
                                <p class="form-row"><input type="number" placeholder="Pincode">
                            </p>
                            <div class="submit">                    
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default">
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        Create an account
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <form action="#" class="create-account-form" method="post">
                            <h2 class="heading-title">
                                ALREADY RESIGTERED?
                            </h2>
                            <p class="form-row">
                                <input type="text" name="uname" placeholder="user name" required="">
                            </p>
                            <p class="form-row">
                                <input type="password" name="password" placeholder="password" required="">
                            </p>
                             
                            <div class="submit">                    
                                <button name="submitcreate" id="submitcreate" type="submit" class="btn-default" >
                                    <span>
                                        <i class="fa fa-user left"></i>
                                        LOG IN
                                    </span>
                                </button>
                            </div>                          
                       </form>
                    </div>
                </div>               
           </div>
        </div>
        <!-- Loging Area End -->