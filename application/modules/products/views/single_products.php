	<?php
	$logout=$this->input->get('logout');
	if($logout){
		echo "<div style='color:green;border:1px solid;border-color: #009900;'>".'you are successfully logged out'."</div>";
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
                                                <h1> Products Details</h1>   <div class="buttons-set"> <button type="submit" title="Submit" class="button"><a href="<?php echo base_url().'products/buyNow/'.$data[0]['chawri_products_id']; ?>"> Buy Now</a> </div>
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
                                                        
                                                    </ul>
                                                    
                                                    <div class="buttons-set"> <button type="submit" title="Submit" class="button"><span><span><a href=""> Buy Now</a></span></span> </div>
                                                    </div>
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
	