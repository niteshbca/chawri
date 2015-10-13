<?php

/**
 * Created by PhpStorm.
 * User: NItesh
 * Date: 10/13/2015
 * Time: 4:10 PM
 */
class Products extends  MX_Controller
{
    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();
        require $_SERVER["DOCUMENT_ROOT"].'/chawri/vendor/autoload.php';
        $this->load->Model('Mdl_products');
    }



    public function index(){



        if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $this->_insertProducts($this->input->post());



        }
        else{

            $this->load->view('index.php');
        }
    }



    private function _insertProducts($data)
    {
        $this->Mdl_products->setData('insert',1,$data['products_brand_name'],$data['products_name'],$data['products_cenvat_amount'],
            $data['products_manufacturer'],$data['products_grain'],$data['packets_per_bundle'],$data['products_packing'],
            $data['products_quantity_on_offer'],$data['products_rate'],
            $data['products_sheets_per_packet'],$data['products_size'],$data['products_substance'],$data['products_thickness']);



        if($this->Mdl_products->insertProduct('insert')){

            echo "your Products  Insert successful";
        }
        else{
            echo "your Products not Insert";
        }
    }
}