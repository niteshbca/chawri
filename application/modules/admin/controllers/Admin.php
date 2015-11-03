<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 11/2/15
 * Time: 7:38 PM
 */

class Admin extends MX_Controller{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_admin');
       /* $this->load->Model('sellers/Mdl_sellers');*/
    }
    /**
     * this is the index method the landing page for all operations
     */
    public function index(){

 
          if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){

          }
            else{
             $this->load->view('header/header');
             $this->load->view('products');
             $this->load->view('users/header/footer');
             
            }
  


  }


  public function showProducts(){
    $data['panding_products']=$this->Mdl_admin->showProducts();

 /* echo "<pre/>";
    print_r($data['panding_products']);
die();*/
             $this->load->view('users/header/header');
             $this->load->view('panding_products',$data);
             $this->load->view('users/header/footer');
  }

  public function approval($id){


$commission=$this->input->post();

/*print_r($commission);*/

    

    if($this->Mdl_admin->approval($id,$commission['commission'])){
     

      setInformUser('success','Products Approved  successfully');
      redirect('admin/showProducts');
    }
    else{
        

          setInformUser('error','Products  not Approved  successfully');
          redirect('admin/showProducts');
    }


  }
 }