
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    var $CI = '';
    var $required_fields = array('username', 'password');
    var $current_url = '/Welcome';

    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
        $this->CI->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('database');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
    }

    public function index() {
        $this->no_cache();
        if ($this->session->userdata('privateid') != '') {
            redirect('dashboard');
        } else {
            $this->_display('login');
        }
    }

    function validate() {

        if (isset($_POST['submit']) && $_POST['submit'] == 'signme') {
            $form = $_POST;
        } else {
            redirect(LOGOUT_URL);
        }

        $errors = $this->_validation();

        if ($errors) {
            $this->session->set_flashdata('username', 'User Name Is Required');
            $this->session->set_flashdata('password', 'Password Is Required');
            redirect($this->current_url);
        } else {
            $_flag = false;
            $data['system_user_email_id'] = $this->input->post('username');
            $data['system_user_password'] = md5($this->input->post('password'));

            $_result = $this->database->_selectWhere(TABLE_SYATEM_USER, 'system_user_id,system_user_name,system_user_email_id,system_user_password,system_user_status,system_user_phone_no', $data);

            if (count($_result) > 0) {
                $_flag = true;
                $_result = array_pop($_result);
                $this->session->set_userdata('user_id', $_result['system_user_id']);
                $this->session->set_userdata('user_name', $_result['system_user_name']);
            }
            if (!$_flag) {
                $this->session->set_flashdata('message', 'Invalid Credentials. Please Try Again.');
              redirect(site_url('Welcome/load_login'));
            }
            log_message(LOG_TYPE, $_result['system_user_id'] . " : Logged In ");
            log_message(LOG_TYPE, $_result['system_user_name'] . " : Logged In ");
            
            redirect('dashboard');
        }
    }

    function _validation() {
        foreach ($this->required_fields as $field) {
            $this->form_validation->set_rules($field, ucfirst($field), 'required');
        }
        if (!$this->form_validation->run()) {
            return true;
        }
        return false;
    }

    protected function no_cache() {
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
    }

  function logout(){
        //$this->database->_update(TABLE_MEMBERS, array('member_last_login'=>date('Y-m-d H:i:s')), array('member_id'=>$this->session->userdata('privateid')));
        log_message(LOG_TYPE,$this->session->userdata('user_id')." : Log Out");
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        $this->session->sess_destroy();       
        redirect(LOGIN_URL);
    }
 
 
 
    function _display($view_name = '', $data = array()) {
        $data['page_name'] = ( isset($data['page_name']) ) ? $data['page_name'] : 'Login';
        $this->load->view($view_name, $data);
    }

}
