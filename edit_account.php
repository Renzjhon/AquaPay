 <?php
  $customer = New customer;
  $res = $customer->single_customer($_SESSION['CUSID']);
 
  ?>  
<h3>Your Account</h3>
  <form  class="form-horizontal span6" action="customer/controller.php?action=edit" onsubmit="return personalInfo();" name="personal" method="POST" enctype="multipart/form-data"> 
          <div class="row">
             <div class="col-lg-6">
            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-4 control-label" for=
                "FNAME">First Name:</label>
                  <div class="col-md-8">
                   <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                      "First Name" type="text" value="<?php echo $res->f_name; ?>">
                </div>
              </div>
            </div>
           </div>   
           
           <div class="col-lg-6"> 
            <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-4 control-label" for=
                "LNAME">Last Name:</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                      "Last Name" type="text" value="<?php echo $res->l_name; ?>">
                </div>
              </div>
            </div>
           </div>   

         
            <div class="col-lg-6">
             
             <div class="form-group">
              <div class="col-md-12">
                <label class="col-md-4 control-label" for=
                "CITYADD">Municipality/City:</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="CITYADD" name="CITYADD" placeholder=
                      "Municipality/City Address" type="text" value="<?php echo $res->c_address; ?>">
                </div>
              </div>
            </div>

           </div>  


       
  

            <div class="col-lg-6"> 
                <div class="form-group">
                <div class="col-md-12">
                  <label class="col-md-4 control-label" for=
                  "PHONE">Contact#:</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                        "Contact Number" type="text" value="<?php echo $res->c_phone; ?>">
                  </div>
                </div>
              </div> 
           </div> 

             <div class="col-lg-6">
              <div class="form-group">
                <div class="col-md-12">
                  <label class="col-md-4 control-label" for=
                  "CUSUNAME">Username:</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="CUSUNAME" name="CUSUNAME" placeholder=
                        "Username" type="text" value="<?php echo $res->u_name; ?>">
                  </div>
                </div>
              </div> 
           </div>  
     
      
          </div>
          
           

          <div class="col-lg-6"> 
              <div class="form-group">
                <div class="col-md-12">
                   <label class="col-md-4" align = "right"for=
                  "btn"></label>
                  <div class="col-md-8">
                    <input type="submit"  name="save"  value="Save"  class="submit btn btn-primary btn-lg"  />
                      
                </div>
              </div>
            </div>
         </div>     
  </form>   
  
   
                
 
                  

                               
                





 
              








                   
        
        </form>