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
 }