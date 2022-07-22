<?php 

session_start();
include("includes/db.php");

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }
    else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
       
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MJJ Online Store Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/select2.min.css" />
    
</head>
<body>

    <div id="wrapper">    <!--wrapper start-->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper">    <!--page-wrapper start-->
            <div class="container-fluid">    <!--container-fluid start-->
               
                
                <?php
                if(isset($_GET['dashboard'])){
                    
                    include("dashboard.php");
                }
              if(isset($_GET['complain'])){
                    
                    include("complain.php");
                }
                ?>
                
            </div>    <!--container-fluid end-->
        </div>    <!--page-wrapper end-->
    </div>    <!--wrapper end-->
    
    
    
    

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>


<?php 

}

?>
























