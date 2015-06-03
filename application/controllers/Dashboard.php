<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
         $this->CI =&    get_instance();
      //  $this->current_url = site_url('login');
        $this->CI->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('mylogin');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
    }
    
     public function index(){
        $this->mylogin->_isLogin();
        $this->_display('dashboard');
     }
     
    
     public function _display($view_name = '', $data = array())
    {
         $data['page_name'] = 'Mission ADD';
         $this->load->view('header');
        $this->load->view($view_name,$data);
    }

}