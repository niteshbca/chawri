<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>






                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1> Products Details</h1>   
                                            </div>
                                         
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    

                                                    <ul class="form-list">

                                                        <li class="fields">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">  Name</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_name']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                       
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> Brand Name</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_brand_name']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
                                                        </li>
                                                           <li class="fields">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">Manufacturer</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_manufacturer']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                       
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> Substance</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_substance']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
                                                        </li>
                                                         <li class="fields">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> Bulk </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_thickness']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">Size (in s/m)  </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_size']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                       
                                                        </li>
                                                         <li class="fields">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">Grain</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_grain']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                       
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">Sheets  per  packet  </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_sheets_per_packet']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
                                                        </li>
                                                         <li class="fields">
                                                           <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> Pkt. Weight </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_weight']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">Packets Per Bundle</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_packets_per_bundle']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                       
                                                        </li>
                                                         <li class="fields">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> Quantity on offer </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_quantity_on_offer']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">Packing</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_packing']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                       
                                                        </li>
                                                        <li class="fields">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">Rate per KG</label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_rate']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required">CENVAT Amount </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_cenvat_amount']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                
	                                                               
	                                                            </div>
	                                                       
	                                                            
                                                        </li>


                                                        <li class="fields">
                                                        <div class="customer-name-middlename">
	                                                     <div class="field name-firstname">
	                                                     <form class="form-inline" role="form" action="<?php echo base_url().'products/buyNow/'.$data[0]['chawri_products_id']; ?>" Method="post">
                                                         <div class="form-group">
                                                         <label  for="qty">Quantity on offer</label>
                                                         <input type="text" name="qty" class="form-control" placeholder="QTY." required/>
                                                         </div>
	                                                     </div>
	                                                     </div>
                                                            </li>
                                                        
                                                    </ul>
                                                         
	                                                      <div class="customer-name-middlename">
	                                                      <div class="field name-firstname">
	                                                      <div class="form-group">
                                                          <label  for="description">Description</label>
                                                          <textarea name="description" required  class="form-control" rows="5" id="comment"></textarea>
                                                          <div class="buttons-set"> <button type="submit" title="Submit" class="button"> Buy Now </button></div>
                                                          </div>
                                                          </form>
                                                   


	                                                     </div>
	                                                     </div>
                                                        	
                                                      
                                                     
                                                   <!--  <div class="row">
                                                     <form class="form-inline" role="form">
													  <div class="form-group">
													    <label for="email">Email address:</label>
													    <input type="email" class="form-control" id="email">
													  </div>
													  <div class="form-group">
													    <label for="pwd">Password:</label>
													    <input type="password" class="form-control" id="pwd">
													  </div>
													  
													  <button type="submit" class="btn btn-default">Submit</button>
													</form>
                                                      </div> -->
                                                     
                                                                                                        
                                                </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	

<script type="text/javascript">
    function ShowHideDiv(obj) {
    	// alert(123);
        var chkYes = document.getElementById("chkYes");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkYes.checked ? "block" : "none";
    }
</script>
	