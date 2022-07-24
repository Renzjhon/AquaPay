<?php 

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }
    else{
?>

  

  <div class="row">    <!--1st row start-->
   
    <div class="col-lg-12">    <!--col-lg-12 start-->
       
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb">    <!--bread crumb start-->
           
            <li class="active">    <!--active start-->
            
            <i class="fa fa-dashboard"></i> Dashboard
            
            </li>    <!--active end-->
            
        </ol>    <!--bread crumb end-->
    
    </div>    <!--col-lg-12 end-->
    
</div>    <!--row end-->


<div class="row">    <!--2nd row start-->
   
    <div class="col-lg-3 col-md-6">    <!--col-lg-3 col-md-6 start-->
       
        <div class="panel panel-primary">    <!--panel panel-primary start-->
           
            <div class="panel-heading">    <!--panel-heading start-->
               
                <div class="row">    <!--row start-->
                   
                    <div class="col-xs-3">    <!--col-xs-3 start-->
                       
                        <i class="fa fa-envelope fa-5x"></i>
                        
                    </div>    <!--col-xs-3 end-->
                    
                   <div class="col-xs-9 text-right">    <!--col-xs-9 text-right start-->
                         
                        <div class="huge"> <?php echo $count_bill; ?> </div>    <!--huge end-->    

                           
                            <div> Bills </div>
                            
                    </div>    <!--col-xs-9 text-right end-->
                    
                </div>    <!--row end-->
                
            </div>    <!--panel-heading end-->
            
            <a href="index.php?view_products">    <!--a start-->
               
                <div class="panel-footer">    <!--panel-footer start-->
                   
                    <span class="pull-left">    <!--pull-left start-->
                       
                        View Details 
                        
                    </span>    <!--pull-left end-->
                    
                    <span class="pull-right">    <!--pull-right start-->
                       
                        <i class="fa fa-arrow-circle-right"></i> 
                        
                    </span>    <!--pull-right end-->
                    
                    <div class="clearfix"></div>
                    
                </div>    <!--panel-footer end-->
                
            </a>    <!--a end-->
            
        </div>    <!--panel panel-primary end-->
        
    </div>    <!--col-lg-3 col-md-6 end-->
    
    <div class="col-lg-3 col-md-6">    <!--col-lg-3 col-md-6 start-->
       
        <div class="panel panel-green">    <!--panel panel-green start-->
           
            <div class="panel-heading">    <!--panel-heading start-->
               
                <div class="row">    <!--row start-->
                   
                    <div class="col-xs-3">    <!--col-xs-3 start-->
                       
                        <i class="fa fa-users fa-5x"></i>
                    
                    </div>    <!--col-xs-3 end-->
                    
                    <div class="col-xs-9 text-right">    <!--col-xs-9 text-right start-->
                       
                        <div class="huge"> <?php echo $count_customers; ?> </div>    <!--huge end-->    
                           
                            <div> Customers </div>
                            
                    </div>    <!--col-xs-9 text-right end-->
                    
                </div>    <!--row end-->
                
            </div>    <!--panel-heading end-->
            
            <a href="index.php?view_customers">    <!--a start-->
               
                <div class="panel-footer">    <!--panel-footer start-->
                   
                    <span class="pull-left">    <!--pull-left start-->
                       
                        View Details 
                        
                    </span>    <!--pull-left end-->
                    
                    <span class="pull-right">    <!--pull-right start-->
                       
                        <i class="fa fa-arrow-circle-right"></i> 
                        
                    </span>    <!--pull-right end-->
                    
                    <div class="clearfix"></div>
                    
                </div>    <!--panel-footer end-->
                
            </a>    <!--a end-->
            
        </div>    <!--panel panel-green end-->
        
    </div>    <!--col-lg-3 col-md-6 end-->
      
    <div class="col-lg-3 col-md-6">    <!--col-lg-3 col-md-6 start-->
       
        <div class="panel panel-orange">    <!--panel panel-yellow start-->
           
            <div class="panel-heading">    <!--panel-heading start-->
               
                <div class="row">    <!--row start-->
                   
                    <div class="col-xs-3">    <!--col-xs-3 start-->
                       
                        <i class="fa fa-book fa-5x"></i>
                    
                    </div>    <!--col-xs-3 end-->
                    
                    <div class="col-xs-9 text-right">    <!--col-xs-9 text-right start-->
                       
                        <div class="huge"> <?php echo $count_complain; ?> </div>    <!--huge end-->    
                           
                            <div> Complaints </div>
                            
                    </div>    <!--col-xs-9 text-right end-->
                    
                </div>    <!--row end-->
                
            </div>    <!--panel-heading end-->
            
            <a href="index.php?view_p_cats">    <!--a start-->
               
                <div class="panel-footer">    <!--panel-footer start-->
                   
                    <span class="pull-left">    <!--pull-left start-->
                       
                        View Details 
                        
                    </span>    <!--pull-left end-->
                    
                    <span class="pull-right">    <!--pull-right start-->
                       
                        <i class="fa fa-arrow-circle-right"></i> 
                        
                    </span>    <!--pull-right end-->
                    
                    <div class="clearfix"></div>
                    
                </div>    <!--panel-footer end-->
                
            </a>    <!--a end-->
            
        </div>    <!--panel panel-green end-->
        
    </div>    <!--col-lg-3 col-md-6 end-->
    
   <div class="col-lg-3 col-md-6">    <!--col-lg-3 col-md-6 start-->
       
        <div class="panel panel-red">    <!--panel panel-yellow start-->
           
            <div class="panel-heading">    <!--panel-heading start-->
               
                <div class="row">    <!--row start-->
                   
                    <div class="col-xs-3">    <!--col-xs-3 start-->
                       
                        <i class="fa fa-list fa-5x"></i>
                    
                    </div>    <!--col-xs-3 end-->
                    
                    <div class="col-xs-9 text-right">    <!--col-xs-9 text-right start-->
                       
                        <div class="huge"> <?php echo $count_complain; ?> </div>    <!--huge end-->    
                           
                            <div> Transaction </div>
                            
                    </div>    <!--col-xs-9 text-right end-->
                    
                </div>    <!--row end-->
                
            </div>    <!--panel-heading end-->
            
            <a href="index.php?view_p_cats">    <!--a start-->
               
                <div class="panel-footer">    <!--panel-footer start-->
                   
                    <span class="pull-left">    <!--pull-left start-->
                       
                        View Details 
                        
                    </span>    <!--pull-left end-->
                    
                    <span class="pull-right">    <!--pull-right start-->
                       
                        <i class="fa fa-arrow-circle-right"></i> 
                        
                    </span>    <!--pull-right end-->
                    
                    <div class="clearfix"></div>
                    
                </div>    <!--panel-footer end-->
                
            </a>    <!--a end-->
            
        </div>    <!--panel panel-green end-->
        
    </div>    <!--col-lg-3 col-md-6 end-->

<div class="row">    <!--row start-->
    <div class="col-lg-8">    <!--col-lg-start-->
        <div class="panel panel-primary">    <!--panel panel-primary start-->
            <div class="panel-heading">    <!--panel-heading start-->
                <h3 class="panel-title">    <!--panel-title start-->
                    
                    <i class="fa fa-money fa-fw"></i> New Transactions
                    
                </h3>    <!--panel-title end-->
            </div>    <!--panel-heading end-->
            
            <div class="panel-body">    <!--panel-body start-->
                <div class="table-responsive">    <!--table-responsive start-->
                    <table class="table table-hover table-striped table-bordered">    <!--table table-hover table-striped table-bordered start-->
                        
                        <thead>    <!--thead start-->
                          
                          <tr>    <!--th start-->
                           
                                <th> Transaction ID: </th>
                                <th> Payable: </th>
                                <th> Pay Date </th>
                                <th> Status: </th>
                            
                           </tr>    <!--th end-->
                            
                        </thead>    <!--thead end-->
                        
                        <tbody>    <!--tbody start-->
                          
                          <?php 
                            
                                $i=0;
                        
                                $get_transaction = "select * from transaction order by 1 DESC LIMIT 0,5";
                        
                                $run_transaction = mysqli_query($con,$get_transaction);
         
                                while($row_transaction=mysqli_fetch_array($run_transaction)){
                                    
                                    $transaction_id = $row_transaction['transaction_id'];
                                    
                                    $payable = $row_transaction['payable'];     
                                    $pdate = $row_transaction['pdate'];
                                    $status = $row_transaction['status'];
                                    $pdate = date('F j, Y', strtotime($pdate));


                                    
                                  
                            
                            ?>
                           
                            <tr>    <!--tr start-->
                                <td> <?php echo $transaction_id; ?> </td>
                                
                                <td> <?php echo $payable; ?> </td>
                                <td> <?php echo $pdate; ?></td>
                                <td><?php echo $status;?></td>
                            </tr>    <!--tr end-->
                           
                           <?php }?>
                           
                        </tbody>    <!--tbody end-->
                        
                    </table>    <!--table table-hover table-striped table-bordered end-->  
                </div>    <!--table-responsive end-->
                
                <div class="text-right">    <!--text-right start-->
                    
                    <a href="index.php?view_orders">    <!--a start-->
                        
                        View All Transactions <i class="fa fa-arrow-circle-right"></i>
                        
                    </a>    <!--a end-->
                    
                </div>    <!--text-right end-->
                
            </div>    <!--panel-body end-->
            
        </div>    <!--panel panel-primary end-->
    </div>    <!--col-lg-8 end-->
    
    <div class="col-md-4">    <!--col-md-4 start-->
    
        <div class="panel">    <!--panel start-->
            <div class="panel-body">    <!--panel-body start-->

                <div class="mb-md thumb-info">    <!--mb-md thumb-info start-->

                    <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">
                    
                    <div class="thumb-info-title">    <!--thumb-info-title start-->
                       
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        <span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
                        
                    </div>    <!--thumb-info-title end-->

                </div>    <!--mb-md thumb-info end-->
                
                <div class="mb-md">    <!--mb-md start-->
                    <div class="widget-content-expanded">    <!--widget-content-expanded start-->
                        <i class="fa fa-user"></i>    <span> Email: </span> <?php echo $admin_email; ?> <br>
                        <i class="fa fa-envelope"></i>    <span> Contact: </span> <?php echo $admin_contact; ?> <br>
                    </div>    <!--widget-content-expanded end-->
                    
                    <hr class="dotted short" style="margin:10px 0 10px 0;">
                    
                    
                    
                </div>    <!--mb-md end-->

            </div>    <!--panel-body end-->
        </div>    <!--panel end-->
    </div>    <!--col-md-4 end-->
</div>    <!--row end-->

<?php } ?>


























