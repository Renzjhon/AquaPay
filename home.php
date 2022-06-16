<section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-sm-6">
                  <h1><span>PHERCHE</span> E-STORE</h1>
                  <h2>Mini-Hardware</h2>
                  <p>Every solution in our place, Our products are of the best quality, You’ll find reasons to buy hardware, once you try us, We’ll take care of your hardware.</p>
                 
                </div>
                <div class="col-sm-6">
                  <img src="images/home/logo_banner.png" class="girl img-responsive" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="col-sm-6">
                  <h1><span>PHERCHE</span> E-STORE</h1>
                  <h2>Shovel All types</h2>
                  <p>We have all types of shovel that you can possibly look for, and a very cute model hahaha</p>
                 
                </div>
                <div class="col-sm-6">
                  <img src="images/home/shovel_banner_resize_transparent.png" class="girl img-responsive" alt="" />
                  <img src="images/home/pricing.png"  class="pricing" alt=""/>
                </div>
              </div>
              
              <div class="item">
                <div class="col-sm-6">
                  <h1><span>PHERCHE</span>E-STORE</h1>
                  <h2>Pipes (All types and Sizes)</h2>
                  <p>We have all of pipes that you need (big pipes, small pipes, killer pipes, peter pipe</p>
                 
                </div>
                <div class="col-sm-6">
                  <img src="images/home/pipe_trans.png" class="girl img-responsive" alt="" />
                  <img src="images/home/pricing.png" class="pricing" alt="" />
                </div>
              </div>
              
            </div>
            
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/slider-->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
            <?php include 'sidebar.php'; ?>
        </div>
        
        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>

            <?php

            $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
            WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 ";
            $mydb->setQuery($query);
            $cur = $mydb->loadResultList();
           
            foreach ($cur as $result) { 

              ?>
               <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                      <h2>&#8369 <?php  echo $result->PRODISPRICE; ?></h2>
                      <p><?php  echo    $result->PRODESC; ?></p>
                      <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Product</button>
                    </div>
                    <div class="product-overlay">
                      <div class="overlay-content">
                        <h2>&#8369 <?php  echo $result->PRODISPRICE; ?></h2>
                        <p><?php  echo    $result->PRODESC; ?></p>
                       <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Product</button>
                      </div>
                    </div>
                </div>
                <div class="choose">
                  <ul class="nav nav-pills nav-justified">
                    <li>
                              <?php     
                            if (isset($_SESSION['CUSID'])){  

                              echo ' <a href="'.web_root. 'customer/controller.php?action=addwish&proid='.$result->PROID.'" title="Add to wishlist"><i class="fa fa-plus-square"></i>Add to wishlist</a></a>
                            ';

                             }else{
                               echo   '<a href="#" title="Add to wishlist" class="proid"  data-target="#smyModal" data-toggle="modal" data-id="'.  $result->PROID.'"><i class="fa fa-plus-square"></i>Add to wishlist</a></a>
                            ';
                            }  
                            ?>

                    </li> 
                  </ul>
                </div>
              </div>
            </div>
          </form>
       <?php  } ?>
            
          </div><!--features_items--> 
          
          <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>
            
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active"> 
                         <?php 
                    $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                    WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 limit 3 ";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();
                   
                    foreach ($cur as $result) { 
                  ?>
                      <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                          <h2>&#8369 <?php  echo $result->PRODISPRICE; ?></h2>
                          <p><?php  echo    $result->PRODESC; ?></p>
                           <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Product</button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </form>
                  <?php } ?>
                </div>
                <div class="item">  
                  <?php 
                    $query = "SELECT * FROM `tblpromopro` pr , `tblproduct` p , `tblcategory` c
                    WHERE pr.`PROID`=p.`PROID` AND  p.`CATEGID` = c.`CATEGID`  AND PROQTY>0 limit 3,6";
                    $mydb->setQuery($query);
                    $cur = $mydb->loadResultList();
                   
                    foreach ($cur as $result) { 
                  ?>
                      <form   method="POST" action="cart/controller.php?action=add">
            <input type="hidden" name="PROPRICE" value="<?php  echo $result->PROPRICE; ?>">
            <input type="hidden" id="PROQTY" name="PROQTY" value="<?php  echo $result->PROQTY; ?>">

            <input type="hidden" name="PROID" value="<?php  echo $result->PROID; ?>">
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="<?php  echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="" />
                          <h2>&#8369 <?php  echo $result->PRODISPRICE; ?></h2>
                          <p><?php  echo    $result->PRODESC; ?></p>
                           <button type="submit" name="btnorder" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Product</button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </form>
                  <?php } ?>
                </div>
              </div>
               <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>      
            </div>
          </div><!--/recommended_items-->
          
        </div>
      </div>
    </div>
  </section>