
<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
<div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display "  cellspacing="0" width="100%">
          <thead>
              <tr>
                 <th> Name</th>
                    <th>Brand Name</th>
                    <th>Manufacturer</th>
                    <th>Substance</th>
                    <th> Bulk</th>
                    <th>Size(in s/m)</th>
                    
                    <th>Grain</th>
                    <th> Sheets Per Packet</th>
                    <th> Pkt. Weight</th>
                    <th>Packets Per Bundle</th>
                    <th>Qty. on Offer</th>
                    <th>Packing</th>
                    <th>Rate</th>
                    <th>CENVAT Amount</th>
                    
              </tr>
          </thead>

         <!--  <tfoot>
               <tr>
                 <th>Product Name</th>
                    <th>Brand Name</th>
                    <th>Manufacturer</th>
                    <th>Substance</th>
                    <th> Bulk</th>
                    <th>Products Size(in s/m)</th>
                    
                    <th>Grain</th>
                    <th> Sheets Per Packet</th>
                    <th> Pkt. Weight</th>
                    <th>Packets Per Bundle</th>
                    <th>Qty. on Offer (in pkts)</th>
                    <th>Packing</th>
                    <th>Products Rate</th>
                    <th>Products CENVAT Amount</th>
                    <th>Action</th>
              </tr>
          </tfoot> -->

          <tbody>
              <?php
                                  /*  echo "<pre/>"; print_r($products);
                                     die();*/
                                  foreach($products as $rows){
                   ?>
                  <tr>
                    <!-- <td>
                      <input type="checkbox" class="checkboxes" value="1">
                    </td> -->
                    <td>
                      <?php echo $rows['chawri_products_orders_products_name']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_brand_name']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_manufacturer']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_substance']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_thickness']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_size']; ?>
                    </td>

                    

                    <td>
                      <?php echo $rows['chawri_products_orders_products_grain']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_sheets_per_packet']; ?>
                    </td>

                                       
                    <td>
                      <?php echo $rows['chawri_products_orders_products_weight']; ?>
                    </td>

                    <td>
                      <?php echo $rows['chawri_products_orders_products_packets_per_bundle']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_quantity_on_offer']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_packing']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_rate']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_products_cenvat_amount']; ?>
                    </td>
                    
                     

                  </tr>
                                   <?php }?>

            
          </tbody>
      </table>
</div>