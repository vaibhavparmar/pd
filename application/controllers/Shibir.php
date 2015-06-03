<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Shibir extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
         $this->CI =&    get_instance();
      //  $this->current_url = site_url('login');
        $this->CI->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('database');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
    }
    
     public function index(){
        $data['shibir'] =$this->database->_selectWhere(TABLE_SHIBIR, 'shibir_id,shibir_name,shibir_type,shibir_area,shibir_city,shibir_from_date,shibir_to_date,shibir_created_by,shibir_created_dttm,shibir_updated_by,shibir_updated_dttm,shibir_status,shibir_description');
         $this->_display('shibir',$data);
     }
     
     public function addShibir_load() {
         $this->_display('add_shibir');         
     }
     
     
     public function add_shibir(){         
        
         $insert_data['shibir_name']=  $this->input->post('shibir_name');
         $insert_data['shibir_type']= $this->input->post('shibir_type');       
         $insert_data['shibir_area']= $this->input->post('shibir_area');
         $insert_data['shibir_city']= $this->input->post('shibir_city');
         $insert_data['shibir_from_date']= date("Y-m-d",  strtotime($this->input->post('from_date')));
         $insert_data['shibir_to_date']= date("Y-m-d", strtotime($this->input->post('to_date')));
         $insert_data['shibir_status']= $this->input->post('shibir_status');
         $insert_data['shibir_description']= $this->input->post('shibir_descr');
         $insert_data['shibir_created_by']= $this->session->userdata('user_name');
         $insert_data['shibir_created_dttm']= date('Y-m-d H:i:s');
//       
         $insert_id=$this->database->_insert(TABLE_SHIBIR,$insert_data);
          
         if( $insert_id != "" )
             {
                $this->session->set_flashdata("responseMessage","Shibir has been created successfully !!");
                redirect('shibir');
             }
          else
          {  
              $this->session->set_flashdata("responseMessage","Shibir could not be created .");
              redirect('shibir');
          }   
     }
     
     public function update_shibir($shibir_id){
          
         $insert_data['shibir_name']=  $this->input->post('shibir_name');
         $insert_data['shibir_type']= $this->input->post('shibir_type');       
         $insert_data['shibir_area']= $this->input->post('shibir_area');
         $insert_data['shibir_city']= $this->input->post('shibir_city');
         $insert_data['shibir_from_date']= $this->input->post('from_date');
         $insert_data['shibir_to_date']= $this->input->post('to_date');
         $insert_data['shibir_status']= $this->input->post('shibir_status');
         $insert_data['shibir_description']= $this->input->post('shibir_descr');
         $insert_data['shibir_updated_by']= $this->session->userdata('user_name');
         $insert_data['shibir_updated_dttm']= date('Y-m-d H:i:s');
         
         $row_affected=$this->database->_update(TABLE_SHIBIR,$insert_data,array('shibir_id' => $shibir_id));
         
         if( $row_affected > 0 )
          {
              $this->session->set_flashdata("responseMessage","Shibir Updated !!");
              redirect('shibir');
           }
          else
          {
              $this->session->set_flashdata("responseMessage","Shibir was not updated .");
              redirect('shibir');
          }    
     }
     
     function  delete_shibir($shibir_id)
     {     
       $row_affected=$this->database->_delete(TABLE_SHIBIR,array('shibir_id' => $shibir_id));
         
         if( $row_affected > 0 )
          {
              $this->session->set_flashdata("responseMessage","Shibir Deleted !!");
              redirect('shibir');
          }
          else
          {
              $this->session->set_flashdata("responseMessage","Shibir was not deleted .");
              redirect('shibir');
          }              
     }
    
     
     public function edit_shibir($shibir_id)
     {
         $data['shibir']=$this->database->_selectWhere(TABLE_SHIBIR, 'shibir_id,shibir_name,shibir_type,shibir_area,shibir_city,shibir_from_date,shibir_to_date,shibir_created_by,shibir_created_dttm,shibir_updated_by,shibir_updated_dttm,shibir_status,shibir_description', array('shibir_id' => $shibir_id));
         $this->session->set_userdata('tag','edit');
         $this->_display('add_shibir',$data);
     }
     
     public function search()
     {   
         $this->output->enable_profiler(TRUE);
         $search_data['shibir_name']=  $this->input->post('shibir_name');
         $search_data['shibir_type']=$this->input->post('shibir_type');
         $search_data['shibir_status']=$this->input->post('shibir_status');
        
         $data['shibir'] =$this->database->_get_search(TABLE_SHIBIR, '' ,$search_data );
         $array = json_decode(json_encode($data), true);
         $this->_display('shibir_list',$array);
         
     }

     public function displayall()
     {
         $data['shibir'] =$this->database->_selectWhere(TABLE_SHIBIR, 'shibir_id,shibir_name,shibir_type,shibir_area,shibir_city,shibir_from_date,shibir_to_date,shibir_created_by,shibir_created_dttm,shibir_updated_by,shibir_updated_dttm,shibir_status,shibir_description', array('shibir_status !=' => '0') );
         $this->_display('shibir_list',$data);
      }
     
     public function _display($view_name, $data = array())
    {
         $data['page_name'] = 'Shibir ADD';
         $this->load->view('header');
        $this->load->view($view_name,$data);
    }

}