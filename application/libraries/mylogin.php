<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mylogin
{
    var $CI = '';
    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
    }

   		function _isLogin(){
			if( $this->CI->session->userdata('user_id') == '' ){
				redirect(LOGOUT_URL);
			}
		}
  
  
   
}
