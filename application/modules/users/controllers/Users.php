<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 14/9/15
 * Time: 4:38 PM
 */

class Users extends MX_Controller{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();

        $this->load->Model('Mdl_users');
        $this->load->Model('sellers/Mdl_sellers');
    }
    /**
     * this is the index method the landing page for all operations
     */
    public function index(){

        if($this->_logged_in()){
            if($this->_getRole()=='guest'){
                //show their dashboard
            }elseif($this->_getRole()=='host'){
                //show their dashboard
            }
        }else if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $to_do_with_post=$_POST["todo"];
            if(isset($to_do_with_post)){
                if($to_do_with_post=='login'){
                    $this->_login($this->input->post());
                }elseif($to_do_with_post=='register'){
                    $this->_register($this->input->post());
                }
            }
        }else{
            $roles= array();
            foreach($this->_getRole() as $role){
                $roles[$role['chawri_roles_id']]=$role['chawri_roles_name'];
            }
            $data['roles']=$roles;
           /* $data['facebook_login_url']=$this->_getFacebookLoginUrl();*/
             $this->load->view('header/header');
            $this->load->view('login.php',$data);
            $this->load->view('header/footer');
        }
    }







public function home(){

            $this->load->view('header/header');
            $this->load->view('body');
            $this->load->view('header/footer');
}


public function buyerHome(){

            $this->load->view('header/header_buyer');
            $this->load->view('body');
            $this->load->view('header/footer');
}
    /**
     * check if user if someone is logged in or not
     * @return bool
     */
    private function _logged_in()
    {
        /*if(someone is logged in)
        RETURN TRUE;*/
    }

    /**
     *return role of currently logged in user
     */
    private function _getRole()
    {
        //return role
        if(false/*logged_in*/){

        }else{
            $this->load->Model('user_roles/Mdl_roles');
            return $this->Mdl_roles->getRolesName();
        }
    }

    /**
     *login the user
     */
    private function _login($data)
    {

        $this->Mdl_sellers->setData('checkUser',$data['user_name_email'],$data['password']);
        $this->Mdl_users->setData('checkUser',$data['user_name_email'],$data['password']);
      // echo isAccountActive();
        if(isAccountActive()){
           // echo $data['user_name_email'];

            /* echo "login";
                die();*/
          if($this->Mdl_users->checkUser()) {

                        $user_data['data'] = $this->Mdl_users->getUserData();

                        $this->_setSessionData('authorize', $user_data);

                      if($user_data['data'][0]['chawri_users_username']=='admin@admin.com') {
                          $this->load->view('users/header/header');
                         // $this->load->view('admin/aside');
                           $this->load->view('admin/dashboard');
                           $this->load->view('users/header/footer');

                      }

                              else {
                                  setInformUser('success', 'Successful login ');
                                  redirect('users/buyerHome');
                                  
                              }

                       }
              elseif($this->Mdl_sellers->checkSellers()) {

                           $user_data = $this->Mdl_sellers->getUserData();

                         /* echo "Seller Login";
                           print_r($user_data);
                           die();*/
                          $this->_setSessionData('sellers', $user_data);
                            redirect(base_url().'sellers/homeSeller');
              }


            else{
                  //set flash message that his username and password do not match try again.
                        setInformUser('error', 'your Username and password do not match');
                        redirect('users');
               }
        }


        else{
            setInformUser('error','Your Account in not activated. Kindly verify your email to logon.');
           redirect('users');
        }

    }

    /**
     *register the user
     */
    private function _register($data)
    {

        $this->Mdl_users->setData('register',$data['user_name_email'],$data['password'],$data['fname'],$data['lname']);
        if($this->Mdl_users->register('normal_registration')){

            if($this->sendMail()){
                 $this->Mdl_users->insertToken();

                echo "your account successfully created and  Active link on your Email ";
                redirect('users');
            }else{
                echo 'Account registered but email not send.';
            }
        };
    }

    private function _setSessionData()
    {
        switch(func_get_arg(0)){
            case 'authorize':   //$this->session->set_userdata('authorize',true);
               $data=array();

                     $user_username=func_get_arg(1)['data'][0]['chawri_users_fname'].' '.func_get_arg(1)['data'][0]['chawri_users_lname'];

                array_push($data, [
                    'users_id' =>func_get_arg(1)['data'][0]['chawri_users_id'],
                    'users_email' =>func_get_arg(1)['data'][0]['chawri_users_username'],
                    'users_name' =>$user_username,
                    'users_status' =>func_get_arg(1)['data'][0]['chawri_users_status'],

                ]);




                $this->session->set_userdata('user_data',$data);
                break;


            case "sellers": $data=array();
                      /* print_r(func_get_arg(1));
                       die();*/
                            
                $user_username=func_get_arg(1)[0]['chawri_sellers_company_name'];

                array_push($data, [
                    'users_id' =>func_get_arg(1)[0]['chawri_sellers_id'],
                    'users_email' =>func_get_arg(1)[0]['chawri_sellers_email'],
                    'users_name' =>$user_username
                    

                ]);

               /*echo $user_username ;
                print_r($data);
                die();*/

                $this->session->set_userdata('user_data',$data);
                break;
            default: break;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('users?logout=1');
    }



    Public function forgetPwd()
    {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

            $a=rand(999999999999,9999999999999999);
            $token = "hlu".$a;
            $token = password_hash($token, PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $this->Mdl_users->setData('get_email', $email,$token);
            if ($this->Mdl_users->forgotPwd('get_email',$email)) {

                $this->email->from('nkscoder@gmail.com', 'Chawri');
                $this->email->to($email);

                $this->email->subject('Forgot Password');
                $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">Reset Password</div>
                           <br/>
                           <a href="'.base_url().'index.php/users/recallMail?tqwertyuiasdfghjzxcvbn=' . $token . '">Click here</a>');
                if ($this->email->send()) {

                    if($this->Mdl_users->forgotPwd('forgot',$email,$token)){

                        setInformUser('success','Kindly check your email to reset password');

                        redirect('users');
                    }else{
                        setInformUser('error','Some error Occurred! Kindly retry');
                        redirect('users');
                    }
                } else {
                    echo 'some error occurred';
                    echo $this->email->print_debugger();
                }
            }else{
                setInformUser('error','No such email found in our records. Kindly register with us');
                redirect('users');
            }
        }
    }
    public function forgotMail(){

        $this->load->view('forgot_password');

    }
    public  function  recallMail()
    {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $pass = $this->input->post('pasword');
            $pass_c = $this->input->post('c_pasword');
            if ($pass == $pass_c) {
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $this->Mdl_users->setData('pass', $pass);
                if($this->Mdl_users->forgotPwd('update_pass', $pass)){
                    $this->removeToken();
                    setInformUser('success','Your password updated successfully! kindly login with new password to continue.');
                    redirect('users');
                };
            } else {
                echo "Password not match ";
            }
        }
        if (isset($_REQUEST['tqwertyuiasdfghjzxcvbn'])) {
            $token = $this->input->post_get('tqwertyuiasdfghjzxcvbn');
            $this->session->set_userdata('token', $token);
            if($data['email']=$this->getEmail()){
                $email=$data['email'][0]['hlu_forgot_pwd_email'];

                $this->session->set_userdata('username',$email);
                $this->removeToken();
                $this->load->view('update_password');
            }
            else{

                setInformUser('error','Your token has expired !  Try Again.');
                redirect('users/home');
            }

        }

    }

    public  function  createToken()
    {
        $a=rand(999999999999,9999999999999999);
        $active_token = "hlu".$a;
        $active_token = password_hash($active_token, PASSWORD_DEFAULT);
        return $active_token;
    }

    public  function sendMail()
    {
        $token = $this->createToken();
        $this->email->from('nkscoder@gmail.com', 'Chawri');
        $this->email->to($this->Mdl_users->getUserName());

        $this->email->subject('Email Activation');
        $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">Please Activate your account</div>
                           <br/>
                           <a href="'.base_url().'users/verifyEmail?tqwertyuiasdfghjzxcvbn=' . $token . '">Click here</a>');
        $this->Mdl_users->setData('token',$token);
        return $this->email->send()?true:false;
    }
    public function verifyEmail(){


        $token=$this->input->post_get('tqwertyuiasdfghjzxcvbn');
        $this->Mdl_users->setData('token',$token);
        $this->Mdl_users->verifyEmail()?setInformUser('success',"email verified successfully"):setInformUser('error',"Your token has expired");
        redirect('users');
    }

    public function removeToken(){

        return $this->Mdl_users->removeToken()?true:false;

    }

    public  function getEmail(){
        $data=$this->Mdl_users->getEmail();
        return $data;

    }
    private function _callCreateOffers()
    {
        $this->load->Model('offers/Mdl_offers');
        if(offerCredit($this->Mdl_users->getUserId(),'add 100 keys to user wallet on sign up',strtolower(Wallet_transaction_type::CREDIT),100)){
            $this->Mdl_offers->setData('create_offer',[
                'id'=>$this->Mdl_users->getUserId(),
                'sign_up'=>'1'
            ]);
            return $this->Mdl_offers->insert();
        }else{
            return false;
        }
    }
    public  function usersViews(){

        $data['user']=$this->Mdl_users->usersViews();

        $this->load->view('header/header3');
        $this->load->view('users_views',$data);
         $this->load->view('header/footer');

    }


    public function register(){
        $this->load->view('header/header');

        $this->load->view('register');
        $this->load->view('header/footer');

    }
}