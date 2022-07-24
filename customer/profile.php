<?php  
       if (!isset($_SESSION['CUSID'])){
      redirect("index.php");
     }



     // if($_SESSION['fixnmixConfiremd']>0){
     //   $query = "update `tblpayment` SET `HVIEW` = true WHERE `CUSTOMERID`='".$_SESSION['CUSID']."' AND STATS in ('Confirmed','Cancelled')  AND HVIEW=0";
     //    mysql_query($query);
     // }
    

     $customer = New Customer();
      $res = $customer->single_customer($_SESSION['CUSID']);
    ?>
<section>
    <div class="container">
         <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Profile</li>
        </ol>
      </div>
        <div class="row">
    <div class="col-sm-3">
        <div class="panel">
            <div class="panel-body">
                <a data-target="#myModal" data-toggle="modal" href=
                ""><img class="img-hover" src="<?php echo web_root. "customer/customer_image/".$res->c_image; ?>"
                style="width:100%; height:100%;text-align:center" title=
                "profile image"></a>
            </div>
            <ul class="list-group">
            <!-- <li class="list-group-item text-muted">Profile</li> -->
                <li class="list-group-item text-right"><span class=
                "pull-left"><strong>Full name</strong></span>
                <?php echo $res->f_name .' '.$res->l_name; ?></li>
                <li class="list-group-item text-right"> 
                <div class="panel-group" id="accordion">   
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"  >Change Password</a>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <form action="<?php echo web_root; ?>customer/controller.php?action=changepassword" method="POST"> 
                          <input type="password" class="form-control" name="CUSPASS" required placeholder="Password"><br/>
                          <input class="btn btn-sm btn-primary" type="submit" name="save"  value="Change">
                        </form>
                      </div>
                  </div>
                </div> 
                </li>
            </ul>
        </div>
    </div><!--/col-3-->
    <div class="col-sm-9">
        <div class="panel">
            <div class="panel-body">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a data-toggle="tab" href="#home">Bills</a>
                    </li> 
                    <li>
                        <a data-toggle="tab" href="#settings">Update
                        Account</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#transaction">Transaction</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#complain">Complain</a>
                    </li>
                </ul>
                <div class="tab-content">
                   
                    <div class="tab-pane active" id="home">
                        <?php
                            check_message();
                              
                            ?>
                        <div class="table-responsive" style="margin-top:5%;">
                            <form action=
                            "customer/controller.php?action=delete" method=
                            "post">
                                <table cellspacing="0" class=
                                "table table-striped table-bordered table-hover"
                                id="example" style="font-size:12px">
                                   
                                    
                                    <thead>
                                        <tr>
                                            <th>Bill ID</th>
                                            <th>Units</th>
                                            <th>Amount</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                
                                        $get_bill = "select * from bill";
        
                                        $run_bill = mysqli_query($con,$get_bill);
        
                                        while($row_bill=mysqli_fetch_array($run_bill)){
                            
                                        $bill_id = $row_bill['bill_id'];
                        
                                        $units = $row_bill['units'];
                        
                                        $amount = $row_bill['amount'];
                                        $status = $row_bill['status'];
                                        $ddate = $row_bill['ddate']; 
                                        $ddate = date('F j, Y', strtotime($ddate));
                
                ?>
                                        <tr>
                                            <td><?php echo $bill_id?></td>                                      
                                            <td><?php echo $units?></td>
                                            <td><?php echo $amount?></td>
                                            <td><?php echo $ddate?></td>                                         
                                            <td><?php echo $status?></td>
                                            


                                           
                                            
                                         
                                            
                                        </tr>
                                           <?php } ?>
                                    </tbody>
                                 
                                </table>
                            </form> 
                        </div><!--/table-resp-->
                    </div><!--/tab-pane-->
                    
                    
                    
                    <div class="tab-pane" id="settings">
                        <?php include  "edit_account.php" ?>
                    </div><!--/tab-pane-->
                     
                     
                     
<!--                     This is for transaction-->
                     <div class="tab-pane" id="transaction">
                        <?php
                            check_message();
                              
                            ?>
                        <div class="table-responsive" style="margin-top:5%;">
                            <form action=
                            "customer/controller.php?action=delete" method=
                            "post">
                                <table cellspacing="0" class=
                                "table table-striped table-bordered table-hover"
                                id="example" style="font-size:12px">
                                   
                                    <?php 
                
                                        $get_transaction = "select * from transaction";
        
                                        $run_transaction = mysqli_query($con,$get_transaction);
        
                                        while($row_transaction=mysqli_fetch_array($run_transaction)){
                            
                                        $transaction_id = $row_transaction['transaction_id'];
                        
                                        $payable = $row_transaction['payable'];
                        
                                        $pdate = $row_transaction['pdate'];
                                        $status = $row_transaction['status'];
                                        $pdate = date('F j, Y', strtotime($pdate));
                
                ?>
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Payable</th>
                                            <th>Pay Date</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td><?php echo $transaction_id?></td>                                      
                                            <td><?php echo $payable?></td>
                                            <td><?php echo $pdate?></td>
                                            <td><?php echo $status?></td>        


                                           
                                            
                                         
                                            
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </form> 
                        </div><!--/table-resp-->
                    </div><!--/tab-pane-->
                     
<!--                     this is for complain-->
                     <div class="tab-pane" id="complain">
                        <?php
                            check_message();
                              
                            ?>
                        <div class="table-responsive" style="margin-top:5%;">
                            <form action=
                            "customer/controller.php?action=delete" method=
                            "post">
                                <table cellspacing="0" class=
                                "table table-striped table-bordered table-hover"
                                id="example" style="font-size:12px">
                                   
                                    <?php 
                
                                        $get_complain = "select * from complain";
        
                                        $run_complain = mysqli_query($con,$get_complain);
        
                                        while($row_complain=mysqli_fetch_array($run_complain)){
                            
                                        $complain_id = $row_complain['complain_id'];
                        
                                        $reason = $row_complain['complaint_reason'];
                        
                                        $status = $row_complain['status'];
                
                ?>
                                    <thead>
                                        <tr>
                                            <th>Complaint ID</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td><?php echo $complain_id?></td>                                      
                                            <td><?php echo $reason?></td>
                                            <td><?php echo $status?></td>


                                           
                                            
                                         
                                            
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </form> 
                        </div><!--/table-resp-->
                    </div><!--/tab-pane-->
                      
                </div><!--/tab-content-->
            </div>
        </div><!--/col-9-->
    </div><!-- Modal photo -->
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type=
                    "button">×</button>
                    <h4 class="modal-title" id="myModalLabel">Choose
                    Image.</h4>
                </div>
                <form action="customer/controller.php?action=photos" enctype=
                "multipart/form-data" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="rows">
                                <div class="col-md-12">
                                    <div class="rows">
                                        <div class="col-md-8">
                                            <input name="MAX_FILE_SIZE" type=
                                            "hidden" value="1000000">
                                            <input id="photo" name="photo"
                                            type="file">
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal"
                        type="button">Close</button> <button class=
                        "btn btn-pup" name="savephoto" type="submit">Upload
                        Photo</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--   
  <script>
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
}); 

  </script> --> 
  </div>
  </div>
</section>