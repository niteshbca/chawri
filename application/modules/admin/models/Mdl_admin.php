<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/13/2015
 * Time: 4:10 PM
 */
class Mdl_admin extends CI_Model
{

	
public function showProducts(){

	
 
$query=$this->db->query("SELECT * FROM `chawri_products_orders` LEFT JOIN `chawri_products` ON `chawri_products_orders`.`chawri_products_orders_products_id` = `chawri_products`.`chawri_products_id` LEFT JOIN `chawri_users` ON `chawri_products_orders`.`chawri_products_orders_buyer_id` = `chawri_users`.`chawri_users_id`LEFT JOIN `chawri_sellers` ON `chawri_sellers`.`chawri_sellers_id` = `chawri_products`.`chawri_sellers_id` WHERE `chawri_products_orders_status` = 'admin_approvel_pending'")->result_array();    

return $query;

 
}



public function approval($id,$commission){



  
  $data= array('chawri_products_orders_status' =>'approved_by_admin','chawri_products_orders_commission'=>$commission );

  $this->db->WHERE('chawri_products_orders_id',$id);
  $this->db->update('chawri_products_orders',$data);

if($this->db->affected_rows()){
 return true;
}
else{
 return flase;
}

}


public function getSellers(){

	return $this->db->get('chawri_sellers')->result_array();

}
public function getBuyer(){

	return $this->db->get('chawri_users')->result_array();

}


}


?>