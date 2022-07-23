<?php 

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }
    else{
?>

   

   <nav class="navbar navbar-inverse navbar-fixed-top">    <!--navbar navbar-inverse navbar-fixed-top start-->
    <div class="navbar-header">    <!--navbar-header start-->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">    <!--navbar-toggle start-->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button>    <!--navbar-toggle end-->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div>    <!--navbar-header end-->
    
    <ul class="nav navbar-right top-nav">    <!--nav navbar-right top-nav start-->
        
        <li class="dropdown">    <!--dropdown start-->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">    <!--dropdown-toggle start-->
                
                <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>
                
            </a>    <!--dropdown-toggle end-->
            
            <ul class="dropdown-menu">    <!--dropdown-menu start-->
                <li>    <!--li start-->
                   
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>">    <!--a start-->
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a>    <!--a end-->
                
                </li>    <!--li end-->
                <li>    <!--li start-->
                   
                    <a href="index.php?view_products">    <!--a start-->
                        
                        <i class="fa fa-fw fa-envelope"></i> Bills
                        
                        <span class="badge"><?php echo $count_bill; ?></span>
                        
                    </a>    <!--a end-->
                
                </li>    <!--li end-->
                <li>    <!--li start-->
                   
                    <a href="index.php?view_customers">    <!--a start-->
                        
                        <i class="fa fa-fw fa-users"></i> Customers
                        
                        <span class="badge"><?php echo $count_customers; ?></span>
                        
                    </a>    <!--a end-->
                
                </li>    <!--li end-->
                <li>    <!--li start-->
                   
                    <a href="index.php?view_cats">    <!--a start-->
                        
                        <i class="fa fa-fw fa-gear"></i> Complaints
                        
                        <span class="badge"><?php echo $count_complain; ?></span>
                        
                    </a>    <!--a end-->
                
                </li>    <!--li end-->
                
                
                <li class="divider"></li>
                
                <li>    <!--li start-->
                   
                    <a href="logout.php">    <!--a start-->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a>    <!--a end-->
                
                </li>    <!--li end-->
            </ul>    <!--dropdown-menu end-->
            
        </li>    <!--dropdown end-->
        
    </ul>    <!--nav navbar-right top-nav end-->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">    <!--collapse navbar-collapse navbar-ex1-collapse start-->
        <ul class="nav navbar-nav side-nav">   <!--nav navbar-nav side-nav start--> 
            <li>    <!--li start-->
                <a href="index.php?dashboard">    <!--a start-->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                    </a>    <!--a end-->
            </li>    <!--li end-->
            
            <li>    <!--li start-->
                <a href="#" data-toggle="collapse" data-target="#p_cat">    <!--a start-->
                        
                        <i class="fa fa-fw fa-users"></i> Customers
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                    </a>    <!--a end-->
                    
                    <ul id="p_cat" class="collapse">    <!--collapse start-->
                       
                        <li>    <!--li start-->
                            <a href="index.php?insert_p_cat"> Add Customers </a>
                        </li>    <!--li end-->
                        <li>     <!--li start-->
                            <a href="index.php?view_p_cats"> View Customers </a>
                        </li>    <!--li end-->
                        
                    </ul>    <!--collapse end-->
                    
            </li>    <!--li end-->
            <li>    <!--li start-->
                <a href="#" data-toggle="collapse" data-target="#supplier">    <!--a start-->
                        
                        <i class="fa fa-fw fa-envelope"></i> Bills
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                    </a>    <!--a end-->
                    
                    <ul id="supplier" class="collapse">    <!--collapse start-->
                       
                        <li>    <!--li start-->
                            <a href="index.php?insert_supplier"> Add Bills </a>
                        </li>    <!--li end-->
                        <li>     <!--li start--> 
                            <a href="index.php?view_suppliers"> View Bills </a>
                        </li>    <!--li end-->
                        
                    </ul>    <!--collapse end-->
            </li>    <!--li end-->
            
             <li>    <!--li start-->
                <a href="index.php?view_customers">    <!--a href start-->
                    <i class="fa fa-fw fa-book"></i>    Complaints
                </a>    <!--a href end-->
            </li>    <!--li end-->
             <li>    <!--li start-->
                <a href="index.php?view_customers">    <!--a href start-->
                    <i class="fa fa-fw fa-users"></i>   Transactions
                </a>    <!--a href end-->
            </li>    <!--li end-->
            <li>    <!--li start-->
                <a href="#" data-toggle="collapse" data-target="#admins">    <!--a start-->
                        
                        <i class="fa fa-fw fa-users"></i> Admins
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                    </a>    <!--a end-->
                    
                    <ul id="admins" class="collapse">    <!--collapse start-->
                       
                        <li>    <!--li start-->
                            <a href="index.php?insert_supplier"> Add Admins </a>
                        </li>    <!--li end-->
                        <li>     <!--li start--> 
                            <a href="index.php?view_suppliers"> View Admins </a>
                        </li>    <!--li end-->
                        
                    </ul>    <!--collapse end-->
            </li>    <!--li end-->
            
            <li>    <!--li start-->
                <a href="logout.php">    <!--a href start-->
                    <i class="fa fa-fw fa-power-off"></i>    Logout
                     
                </a>    <!--a href end-->
                <br><br><br> <br><br><br> <br><br><br>
            </li>    <!--li end-->
           
        </ul>    <!--nav navbar-nav side-nav end-->
    </div>    <!--collapse navbar-collapse navbar-ex1-collapse end-->
    
</nav>    <!--navbar navbar-inverse navbar-fixed-top end-->

<?php } ?>




















