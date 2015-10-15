<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 14/9/15
 * Time: 7:05 PM
 */

class Mdl_users extends CI_Model
{
    const GUEST_ID = 1; //may be needs to do it like it take it from database or to define user level as global constants later. It will be seen in future.
    private $user_id;
    private $user_name;
    private $password;
    private $role_id;
    private $roles_name;
    private $permissions_name;
    private $social_id;
    private $token;
    private $provider;
    private $status;
    private $fname;
    private $lname;

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


    public function __construct()
    {
        parent::__construct();
        $this->role_id = self::GUEST_ID;
        $this->permissions_name = array();
    }

    /**
     * @param mixed $roles_name
     */
    public function setRolesName($roles_name)
    {
        $this->roles_name = $roles_name;
    }

    /**
     * @param mixed $permissions_name
     */
    public function setPermissionsName($permissions_name)
    {
        $this->permissions_name = $permissions_name;
    }

    /**
     *perform set data for class functions.
     */
    public function setData()
    {
        switch (func_get_arg(0)) {
            case "register":
                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                $this->setFname(func_get_arg(3));
                $this->setLname(func_get_arg(4));

                break;
                case "checkUser":
                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                break;
            case "setSessionData": {

                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                break;


            }
                break;
            case "facebook_login": {
                $this->setUserName(func_get_arg(1));
                $this->setSocialId(func_get_arg(2));
                $this->setToken(func_get_arg(3));
                $this->setProvider(func_get_arg(4));
                break;
            }
            case "is_Social": {
                $this->setUserId(func_get_arg(1));
                $this->setProvider(func_get_arg(2));
                break;
            }
            case 'UidEmail' : {
                $this->setUserId(func_get_arg(1));
                $this->setUserId(func_get_arg(2));
                break;
            }


            case'get_email': {
                $this->setUserName(func_get_arg(1));
                $this->setToken(func_get_arg(2));
                break;


            }

            case 'token':{
                $this->setToken(func_get_arg(1));

              break;
            }

            case'pass':{
                $this->setPassword(func_get_arg(1));


                break;

            }
            default:
                break;
        }

    }

    /**
     * @param mixed $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param mixed $social_id
     */
    public function setSocialId($social_id)
    {
        $this->social_id = $social_id;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */

    public function getToken()
    {
        return $this->token;
    }

    public function getUserId()
    {
        if (!$this->user_id) {
            $user_id = $this->db->where('chawri_users_username', $this->getUserName())->select(array('chawri_users_id'))->get('chawri_users')->result_array();
            $this->setUserId($user_id[0]['chawri_users_id']);
        }
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * @return mixed
     */
    public function getRolesName()
    {
        return $this->roles_name;
    }

    /**
     * @return array
     */
    public function getPermissionsName()
    {
        return $this->permissions_name;
    }

    public function register()
    {
        switch (func_get_arg(0)) {
            case 'normal_registration':
                $this->_validate('normal_registration');
                $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));
                $data = [
                    'chawri_users_username' => $this->user_name,
                    'chawri_users_password' => $this->password,
                    'chawri_users_fname' => $this->fname,
                    'chawri_users_lname' => $this->lname

                ];
                if ($this->db->insert('chawri_users', $data)) {
                    return true;
                }
                return false;
                break;
            case 'social_registration':
                $this->_validate('social_registration');
                $data = [
                    'chawri_users_username' => $this->user_name,
                    'chawri_users_social_id' => $this->social_id,
                    'chawri_users_provider' => $this->provider,
                    'chawri_users_roles_id' => $this->role_id
                ];
                if ($this->db->insert('chawri_users', $data)) {
                    return true;
                }
                return false;
                break;

            case 'get_email':
                $this->_validate(func_get_arg(0));
                return true;
                break;
            default:
                break;
        }

    }

    /**
     * this checks user credentials on basis of user provided data
     * @return bool
     */


    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $role_id
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }

    private function _validate()
    {
        switch (func_get_arg(0)) {
                case "normal_registration":
                $this->setPassword($this->security->xss_clean($this->password));
                $this->setUserName($this->security->xss_clean($this->user_name));
                $this->setRoleId($this->security->xss_clean($this->role_id));
                break;
            case "social_registration":
                $this->setUserId($this->security->xss_clean($this->user_id));
                $this->setSocialId($this->security->xss_clean($this->social_id));
                $this->setToken($this->security->xss_clean($this->token));
                $this->setProvider($this->security->xss_clean($this->provider));
                break;

            case'get_email': {
                $this->setUserName($this->security->xss_clean($this->getUserName()));
                $this->setToken($this->security->xss_clean($this->getToken()));
            }
                break;
            default:
                break;
        }

    }

    /**
     * return user data
     * @return array
     */
    public function getUserData()
    {

        $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));

       $data= $this->db->where(array('chawri_users_username'=>$this->user_name, 'chawri_users_password'=>$this->password))->get('chawri_users')->result_array();


           return $data;

      //  return $this->db->where('hlu_profiles_id',$this->getProfilesId())->select('hlu_profiles_id')->get('hlu_profiles')->result_array()?true:false;
   // }

        //return false;

    }

    public function isSocialRegistered()
    {
        return $this->db->where(array('chawri_users_username' => $this->user_name, 'chawri_users_provider' => $this->provider))->select('chawri_users_id')->get('chawri_users')->result_array() ? true : false;
    }

    public function isNormalRegistered()
    {
        return $this->db->where(array('chawri_users_username' => $this->user_id))->select('chawri_users_id')->get('chawri_users')->result_array() ? true : false;
    }

    public function getUsers()
    {
        switch (func_get_arg(0)) {
            /*returns an array og users Uid and Email*/
            case 'UidEmail': {
                $user1 = array();
                $users = $this->db->select('chawri_users_id,chawri_users_username')->get('chawri_users')->result_array();
                foreach ($users as $user) {
                    $user1[$user['chawri_users_id']] = $user['chawri_users_username'];
                }
                return $user1;
                break;
            }
            default:
                break;
        }
    }


    public function forgotPwd()
    {
        switch (func_get_arg(0)) {
            case'get_email': {
                return $this->db->where('chawri_users_username',$this->getUserName())->select(array('chawri_users_id'))->get('chawri_users')->result_array() ? true : false;
                break;
            }
            case'forgot': {
                $data = [
                    'chawri_forgot_pwd_email' => $this->getUserName(),
                    'chawri_forgot_pwd_password' => $this->getToken()
                ];
                return $this->db->insert('chawri_forgot_pwd', $data) ? true : false;
            }
            case'update_pass': {
                $this->getPassword();
                $username = $this->session->userdata('username');
                $this->session->unset_userdata('username');
                return $this->db->where('chawri_users_username',$username)->update('chawri_users',['chawri_users_password'=>$this->getPassword()])?true:false;
            }
        }

    }

    public  function  getEmail()
        {


            $token = $this->session->userdata('token');

            $email = $this->db->where('chawri_forgot_pwd_password', $token)->select('chawri_forgot_pwd_email')->get('chawri_forgot_pwd')->result_array();
            return $email;
        }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSocialId()
    {
        return $this->social_id;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    public function insertToken(){
        return $this->db->where('chawri_users_id',$this->getUserId())->update('chawri_users',[
           'chawri_users_token'=>$this->getToken()
        ])?true:false;
    }
    public function verifyEmail(){

        $this->db->where('chawri_users_token',$this->getToken())->update('chawri_users',['chawri_users_status'=>'1']);
       if($this->db->affected_rows()){
            $this->db->where('chawri_users_token',$this->getToken())->update('chawri_users',[
               'chawri_users_token'=>NULL]);
           return true;
       }else{


           return false;
       }




    }
    public function isActive(){
        return $this->db->where('chawri_users_username',$this->getUserName())->select(array('chawri_users_status'))->get('chawri_users')->result_array()[0]['chawri_users_status']?true:false;
    }

   public function removeToken(){
       $token = $this->session->userdata('token');
       return $this->db->where('chawri_forgot_pwd_password',$token)->delete('chawri_forgot_pwd')?true:false;
   }


    public function usersViews(){

       $data = $this->db->query("select * from chawri_users   join chawri_profiles on chawri_users.chawri_users_id=chawri_profiles.chawri_profiles_id")->result_array();

        return $data;
    }


    public function checkUser(){
        $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));
        return $this->db->where(array('chawri_users_username'=>$this->getUserName(),'chawri_users_password'=>$this->getPassword()))->select(array('chawri_users_id'))->get('chawri_users')->result_array()?true:false;



    }
}