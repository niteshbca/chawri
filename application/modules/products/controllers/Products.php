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

            $this->load->view('register.php');
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



    public  function showProducts(){

        $data['data']=$this->Mdl_products->showProducts();

        $this->load->view('products_show',$data);
    }


   // public function productsXml(){


/*

		$this->load->libraries('reader.php');
		//include 'reader.php';
    	$excel = new Spreadsheet_Excel_Reader();

    $excel->read('upload/sample.xls');
    $x=2;
    while($x<=$excel->sheets[0]['numRows']) {
        $name = isset($excel->sheets[0]['cells'][$x][1]) ? $excel->sheets[0]['cells'][$x][1] : '';
        $job = isset($excel->sheets[0]['cells'][$x][2]) ? $excel->sheets[0]['cells'][$x][2] : '';
        $email = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';

        // Save details
        $sql_insert="INSERT INTO users_details (id,name,job,email) VALUES ('','$name','$job','$email')";
        $result_insert = mysql_query($sql_insert) or die(mysql_error());

        $x++;
    }

        if($result_insert){

            echo "Successful Insert";
        }
        else {
            echo "Some error occur";
        }
    }
*/

}