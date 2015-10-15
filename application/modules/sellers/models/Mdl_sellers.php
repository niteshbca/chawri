<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/12/2015
 * Time: 5:48 PM
 */
class Mdl_sellers extends CI_Model
{

    private $sellers_id;
    private $sellers_email;
    private $sellers_password;
    private $sellers_company_name;
    private $sellers_address;
    private $sellers_pan_no;
    private $sellers_phone;
    private $sellers_excise_no;
    private $sellers_tin_no;
    private $sellers_ac_no;
    private $sellers_ifsc_code;
    private $sellers_bank_name;
    private $sellers_services_tax_no;
    private $sellers_tan_no;
    private $token;

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
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

    public function getSellersId()
    {
        return $this->sellers_id;
    }

    /**
     * @param mixed $sellers_id
     */
    public function setSellersId($sellers_id)
    {
        $this->sellers_id = $sellers_id;
    }

    /**
     * @return mixed
     */
    public function getSellersEmail()
    {
        return $this->sellers_email;
    }

    /**
     * @param mixed $sellers_email
     */
    public function setSellersEmail($sellers_email)
    {
        $this->sellers_email = $sellers_email;
    }

    /**
     * @return mixed
     */
    public function getSellersPassword()
    {
        return $this->sellers_password;
    }

    /**
     * @param mixed $sellers_password
     */
    public function setSellersPassword($sellers_password)
    {
        $this->sellers_password = $sellers_password;
    }

    /**
     * @return mixed
     */
    public function getSellersCompanyName()
    {
        return $this->sellers_company_name;
    }

    /**
     * @param mixed $sellers_company_name
     */
    public function setSellersCompanyName($sellers_company_name)
    {
        $this->sellers_company_name = $sellers_company_name;
    }

    /**
     * @return mixed
     */
    public function getSellersAddress()
    {
        return $this->sellers_address;
    }

    /**
     * @param mixed $sellers_address
     */
    public function setSellersAddress($sellers_address)
    {
        $this->sellers_address = $sellers_address;
    }

    /**
     * @return mixed
     */
    public function getSellersPanNo()
    {
        return $this->sellers_pan_no;
    }

    /**
     * @param mixed $sellers_pan_no
     */
    public function setSellersPanNo($sellers_pan_no)
    {
        $this->sellers_pan_no = $sellers_pan_no;
    }

    /**
     * @return mixed
     */
    public function getSellersPhone()
    {
        return $this->sellers_phone;
    }

    /**
     * @param mixed $sellers_phone
     */
    public function setSellersPhone($sellers_phone)
    {
        $this->sellers_phone = $sellers_phone;
    }

    /**
     * @return mixed
     */
    public function getSellersExciseNo()
    {
        return $this->sellers_excise_no;
    }

    /**
     * @param mixed $sellers_excise_no
     */
    public function setSellersExciseNo($sellers_excise_no)
    {
        $this->sellers_excise_no = $sellers_excise_no;
    }

    /**
     * @return mixed
     */
    public function getSellersTinNo()
    {
        return $this->sellers_tin_no;
    }

    /**
     * @param mixed $sellers_tin_no
     */
    public function setSellersTinNo($sellers_tin_no)
    {
        $this->sellers_tin_no = $sellers_tin_no;
    }

    /**
     * @return mixed
     */
    public function getSellersAcNo()
    {
        return $this->sellers_ac_no;
    }

    /**
     * @param mixed $sellers_ac_no
     */
    public function setSellersAcNo($sellers_ac_no)
    {
        $this->sellers_ac_no = $sellers_ac_no;
    }

    /**
     * @return mixed
     */
    public function getSellersIfscCode()
    {
        return $this->sellers_ifsc_code;
    }

    /**
     * @param mixed $sellers_ifsc_code
     */
    public function setSellersIfscCode($sellers_ifsc_code)
    {
        $this->sellers_ifsc_code = $sellers_ifsc_code;
    }

    /**
     * @return mixed
     */
    public function getSellersBankName()
    {
        return $this->sellers_bank_name;
    }

    /**
     * @param mixed $sellers_bank_name
     */
    public function setSellersBankName($sellers_bank_name)
    {
        $this->sellers_bank_name = $sellers_bank_name;
    }

    /**
     * @return mixed
     */
    public function getSellersServicesTaxNo()
    {
        return $this->sellers_services_tax_no;
    }

    /**
     * @param mixed $sellers_services_tax_no
     */
    public function setSellersServicesTaxNo($sellers_services_tax_no)
    {
        $this->sellers_services_tax_no = $sellers_services_tax_no;
    }

    /**
     * @return mixed
     */
    public function getSellersTanNo()
    {
        return $this->sellers_tan_no;
    }

    /**
     * @param mixed $sellers_tan_no
     */
    public function setSellersTanNo($sellers_tan_no)
    {
        $this->sellers_tan_no = $sellers_tan_no;
    }


    private function _validate()
    {
        switch (func_get_arg(0)) {
            case "registration":
                $this->setSellersEmail($this->security->xss_clean($this->sellers_email));
                $this->setSellersPassword($this->security->xss_clean($this->sellers_password));
                $this->setSellersCompanyName($this->security->xss_clean($this->sellers_company_name));
                $this->setSellersAddress($this->security->xss_clean($this->sellers_address));
                $this->setSellersPanNo($this->security->xss_clean($this->sellers_pan_no));
                $this->setSellersPhone($this->security->xss_clean($this->sellers_phone));
                $this->setSellersExciseNo($this->security->xss_clean($this->sellers_excise_no));
                $this->setSellersTinNo($this->security->xss_clean($this->sellers_tin_no));
                $this->setSellersServicesTaxNo($this->security->xss_clean($this->sellers_services_tax_no));
                $this->setSellersTanNo($this->security->xss_clean($this->sellers_tan_no));

                break;

            default:
                break;
        }


    }


    public function registration(){

        $this->_validate('registration');
        $this->setSellersPassword(password_hash($this->sellers_password, PASSWORD_DEFAULT));
        $data = [
            'chawri_sellers_email' => $this->sellers_email,
            'chawri_sellers_password' => $this->sellers_password,
            'chawri_sellers_company_name' => $this->sellers_company_name,
            'chawri_sellers_address' => $this->sellers_address,

            'chawri_sellers_pan_no' => $this->sellers_pan_no,
            'chawri_sellers_phone' => $this->sellers_phone,
            'chawri_sellers_excise_no' => $this->sellers_excise_no,
            'chawri_sellers_tin_no' => $this->sellers_tin_no,
            'chawri_sellers_services_tax_no' => $this->sellers_services_tax_no,
            'chawri_sellers_tan_no' => $this->sellers_tan_no


        ];
        if ($this->db->insert('chawri_sellers', $data)) {
            return true;
        }
        return false;
    }


    public function setData()
    {
        switch (func_get_arg(0)) {
            case "register":
                $this->setSellersEmail(func_get_arg(1));
                $this->setSellersPassword(func_get_arg(2));
                $this->setSellersCompanyName(func_get_arg(3));
                $this->setSellersAddress(func_get_arg(4));
                $this->setSellersPanNo(func_get_arg(5));
                $this->setSellersPhone(func_get_arg(6));
                $this->setSellersExciseNo(func_get_arg(7));
                $this->setSellersTinNo(func_get_arg(8));

                $this->setSellersServicesTaxNo(func_get_arg(9));
                $this->setSellersTanNo(func_get_arg(10));



                break;
            case "token":
                   $this->setToken(func_get_arg(1));
                break;

            case "checkUser":
                $this->setSellersEmail(func_get_arg(1));
                $this->setSellersPassword(func_get_arg(2));
                break;

            default:
                break;
        }

    }
    public function insertToken(){
        return $this->db->where('chawri_sellers_email',$this->getSellersEmail())->update('chawri_sellers',[
            'chawri_sellers_token'=>$this->getToken()
        ])?true:false;
    }



    public function verifyEmail(){

        $this->db->where('chawri_sellers_token',$this->getToken())->update('chawri_sellers',['chawri_sellers_status'=>'1']);
        if($this->db->affected_rows()){
            $this->db->where('chawri_sellers_token',$this->getToken())->update('chawri_sellers',[
                'chawri_sellers_token'=>NULL]);
            return true;
        }else{


            return false;
        }

    }


    public function removeToken(){
        $token = $this->session->userdata('token');
        return $this->db->where('chawri_sellers_token',$token)->delete('chawri_sellers')?true:false;
    }


    public function getUserData()
    {

        $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));

        $data= $this->db->where('chawri_sellers_username',$this->user_name, 'chawri_sellers_password',$this->password)->get('chawri_sellers')->result_array();


        return $data;

    }

    public function checkSellers(){
        $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));
        return $this->db->where('chawri_sellers_email',$this->getSellersEmail(),'chawri_sellers_password',$this->getSellersPassword())->select(array('chawri_sellers_id'))->get('chawri_sellers')->result_array()?true:false;



    }
}
