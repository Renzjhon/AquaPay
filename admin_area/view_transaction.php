<?php 

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }
    else{
?>

<div class="row">    <!--row start-->
    <div class="col-lg-12">    <!--col-lg-12 start-->
        <ol class="breadcrumb">    <!--breadcrumb start-->
            <li class="active">    <!--li start-->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Transactions
                
            </li>    <!--li end-->
        </ol>    <!--breadcrumb end-->
    </div>    <!--col-lg-12 end-->
</div>    <!--row end-->

<div class="row">    <!--row start-->
    <div class="col-lg-12">    <!--col-lg-12 start-->
        <div class="panel panel-defaults">    <!--pane panel-defaults start-->
            <div class="panel-heading">    <!--panel-heading start-->
                <h3 class="panel-title">    <!--panel-title start-->
                    
                    <i class="fa fa-calendar"></i> View Transactions
                    
                </h3>    <!--panel-title end-->
            </div>    <!--panel-heading end--><br>
<center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search customers.." title="Type in a name"></center>
            
            <div class="panel-body">    <!--panel-body start-->
                <div class="table-responsive">    <!--table-responsive start-->
                    <p><button onclick="sortTable()">Sort Alphabetically</button></p>
                    <table class="table table-striped table-bordered table-hover" id="myTable">    <!--table table-striped table-bordered table-hover start-->
                        
                        <thead>    <!--thead start-->
                            <tr>    <!--tr start-->
                                <th> Transaction ID: </th>
                                <th> Customer UserName: </th>
                                <th> Bill Date: </th>
                                <th> Amount: </th>
                                <th> Dues(if any)? </th>
                                <th> Final Amount </th>
                                <th> Transaction Date </th>
                                <th> Status: </th>
<!--                                <th> Delete: </th>-->
                            </tr>    <!--tr end-->
                        </thead>    <!--thead end-->
                        
                        <tbody>    <!--tbody start-->
                            
                            <?php 
                                
                                $i=0;
         
                                $get_b = "select * from transaction";
         
                                $run_b = mysqli_query($con,$get_b);
         
                                while($row_b=mysqli_fetch_array($run_b)){
                                    
                                    $transaction_id = $row_b['transaction_id'];
                                    
                                    $customer_id = $row_b['customer_id'];
                                    
                                    $payable = $row_b['payable'];
                                    $pdate = $row_b['pdate'];
                                    $status = $row_b['status'];
                                    
                                    $pdate = date('F j, Y', strtotime($pdate));
                                    
                                    
                                $get_c = "select * from customer where customer_id = $customer_id";
         
                                $run_c = mysqli_query($con,$get_c);
         
                                while($row_c=mysqli_fetch_array($run_c)){
                                    
                                    $u_name = $row_c['u_name'];
                                    
                                    
                                    $i++;
                                    
                                
                            
                            ?>
                            
                            <tr>    <!--tr start-->
                                <td> <?php echo $transaction_id; ?> </td>
                                <td> <?php echo $u_name; ?> </td>
                                <td> <?php echo $pdate; ?> </td>
                                <td> <?php echo $payable; ?></td>
                                <td> </td>
                                <td> <?php echo $payable; ?> </td>
                                <td> <?php echo $pdate; ?> </td>
                                <td> <?php echo $status; ?> </td>
<!--
                                <td> 
                                    <a href="index.php?delete_customer=<?php echo $c_id; ?>">
                                    
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                    </a> 
                                </td>
-->
                                 
                            </tr>    <!--tr end-->
                            
                            <?php }} ?>
                            
                        </tbody>    <!--tbody end-->
                        
                    </table>    <!--table table-striped table-bordered table-hover end-->
                </div>    <!--table-responsive end-->
            </div>    <!--panel-body end-->
            
        </div>    <!--pane panel-defaults end-->
    </div>    <!--col-lg-12 end-->
</div>    <!--row end-->


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>




<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>




























<?php 

        }

?>