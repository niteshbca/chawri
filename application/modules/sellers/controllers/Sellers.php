<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/12/2015
 * Time: 5:48 PM
 */
class Sellers extends MX_Controller{


    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_sellers');
    }



    public function index(){



        if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $this->_register($this->input->post());



        }
        else{
            $data['state']=$this->showStates();
            $this->load->view('users/header/header3');
            $this->load->view('register',$data);
            $this->load->view('users/header/footer');
        }
    }

   public function home(){

    $this->load->view('header3');
     $this->load->view('dashboard');
     $this->load->view('footer');
   }


    private function _register($data)
    {
        $this->Mdl_sellers->setData('register',$data['user_name_email'],$data['password'],$data['company_name'],
            $data['address'],$data['state'],$data['pin'],$data['phone'],$data['landline']
           );


         if($this->Mdl_sellers->registration('registration')){

            if($this->sendMail()){
                echo $this->Mdl_sellers->insertToken()?"your account successfully created and send activation link on Email":"some error in inserting token";
            }else{
                echo 'Account registered but email not send.';
            }
        };
    }

    public  function sendMail()
    {
        $token = $this->createToken();
        $this->email->from('singhniteshbca@gmail.com', 'Chawri ');
        $this->email->to($this->Mdl_sellers->getSellersEmail());

        $this->email->subject('Email Activation');
        $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">Please Activate your account</div>
                           <br/>
                           <a href="'.base_url().'sellers/verifyEmail?tqwertyuiasdfghjzxcvbn=' . $token . '">Click here</a>');
        $this->Mdl_sellers->setData('token',$token);
        return $this->email->send()?true:false;
    }
    public function verifyEmail(){


        $token=$this->input->post_get('tqwertyuiasdfghjzxcvbn');
        $this->Mdl_sellers->setData('token',$token);
        $this->Mdl_sellers->verifyEmail()?setInformUser('success',"email verified successfully"):setInformUser('error',"Your token has expired");
        redirect('sellers/home');
    }



    public  function  createToken()
    {
        $a=rand(999999999999,9999999999999999);
        $active_token = "chawri".$a;
        $active_token = password_hash($active_token, PASSWORD_DEFAULT);
        return $active_token;
    }

    public function profile(){
        $data = $this->input->post();
        $this->Mdl_sellers->setData('profile',1,$data['tin_no'],$data['pan_no'],$data['excise_no'],
            $data['services_tax_no'],$data['tan_no']
        );


        if($this->Mdl_sellers->profile($data)){


                echo "your account successfully Update";

        }
        else{
            echo "your account not successfully Update";
        }

    }
    public function showProfile(){

        $this->load->view('users/header/header3');
        $this->load->view('profile');
        $this->load->view('users/header/footer');
    }

     public function showStates(){

       $data= $this->Mdl_sellers->getState();

       return $data;
    }
}