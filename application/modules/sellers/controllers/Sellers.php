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
            $this->load->view('users/header/header');
            $this->load->view('register',$data);
            $this->load->view('users/header/footer');
        }
    }

   public function home(){

    $this->load->view('users/header/header');
     $this->load->view('users/body');
     $this->load->view('users/header/footer');
   }

 public function homeSeller(){

    $this->load->view('users/header/header_seller');
     $this->load->view('users/body');
     $this->load->view('users/header/footer');
   }


public function showProducts(){
    $this->load->view('users/header/header_seller');
    $data['data']=$this->Mdl_sellers->showProducts();
    $this->load->view('products/table_sellers',$data);
     $this->load->view('users/header/footer');

}

    private function _register($data)
    {
        $this->Mdl_sellers->setData('register',$data['user_name_email'],$data['password'],$data['company_name'],
            $data['address'],$data['state'],$data['pin'],$data['phone'],$data['landline']
           );

         if($data['password']==$data['confirm_password']){

     if ($this->Mdl_sellers->chechSellers()) {
          setInformUser('error','Email already exists. Kindly try another Email');
          redirect('sellers');
     }
     else{
         if($this->Mdl_sellers->registration('registration')){

            if($this->sendMail()){
                echo $this->Mdl_sellers->insertToken();
                 setInformUser('error','your account successfully created and send activation link on Email');
                  redirect('sellers');
                
            }else{
                echo 'Account registered but email not send.';
            }
        };
    }
}
    else{

          setInformUser('error','Password not match. Kindly try same password');
         redirect('sellers');
    }
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
        $this->Mdl_sellers->setData('profile',$this->session->userdata['user_data'][0]['users_id'],$data['tin_no'],$data['pan_no'],$data['excise_no'],
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

        $this->load->view('users/header/header_seller');
        $this->load->view('profile');
        $this->load->view('users/header/footer');
    }

     public function showStates(){

       $data= $this->Mdl_sellers->getState();

       return $data;
    }


    public function getProfile(){
         $data['state']=$this->showStates();
        $data['profile_data']=$this->Mdl_sellers->getProfile();
        $this->load->view('users/header/header_seller'); 
        $this->load->view('register_update',$data);
        $this->load->view('users/header/footer');

    }
}