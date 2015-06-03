<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Events extends CI_Controller {

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
         $data['events'] =$this->database->_selectWhere(TABLE_EVENT, 'event_id,event_name,event_date,event_area,event_city,event_organiser,event_type,event_created_by,event_created_dttm,event_updated_by,event_updated_dttm,event_status,event_description');
         $this->_display('event',$data);
//        $this->_display('add_event');
     }
     public function addevents_load() {
         $this->_display('add_event');
         
     }
     
     public function add_events(){         
        
         $insert_data['event_name']=  $this->input->post('event_name');
         $insert_data['event_date']= date("Y-m-d",strtotime($this->input->post('event_date')));
         $insert_data['event_area']= $this->input->post('event_area');
         $insert_data['event_city']= $this->input->post('event_city');
         $insert_data['event_organiser']= $this->input->post('org_name');
         $insert_data['event_type']= $this->input->post('event_type');       
         $insert_data['event_status']= $this->input->post('event_status');
         $insert_data['event_description']= $this->input->post('event_descr');
         $insert_data['event_created_by']= $this->session->userdata('user_name');
         $insert_data['event_created_dttm']= date('Y-m-d H:i:s');
         
         $insert_id=$this->database->_insert(TABLE_EVENT,$insert_data);
          
         if( $insert_id != "" )
             {
                   $this->session->set_flashdata("responseMessage","Event has been created successfully !!");
                   redirect('events');
             }
          else
          {  
              $this->session->set_flashdata("responseMessage","Event could not be created .");
              redirect('events');
          }      
//$this->_display('add_mission');
     }
     
     public function update_events($event_id){
          
         $insert_data['event_name']=  $this->input->post('event_name');
         $insert_data['event_date']= $this->input->post('event_date');
         $insert_data['event_area']= $this->input->post('event_area');
         $insert_data['event_city']= $this->input->post('event_city');
         $insert_data['event_organiser']= $this->input->post('org_name');
         $insert_data['event_type']= $this->input->post('event_type');       
         $insert_data['event_status']= $this->input->post('event_status');
         $insert_data['event_description']= $this->input->post('event_descr');
         $insert_data['event_updated_by']= $this->session->userdata('user_name');
         $insert_data['event_updated_dttm']= date('Y-m-d H:i:s');
         
         $row_affected=$this->database->_update(TABLE_EVENT,$insert_data,array('event_id' => $event_id));
         
         if( $row_affected > 0 )
             {
                   $this->session->set_flashdata("responseMessage","Event Updated !!");
                   redirect('events');
             }
          else
          {
              $this->session->set_flashdata("responseMessage","Event Was Not Updated .");
              redirect('events');
          }    
     }
     
     function  delete_events($event_id)
     {     
       $row_affected=$this->database->_delete(TABLE_EVENT,array('event_id' => $event_id));
         
         if( $row_affected > 0 )
             {
                   $this->session->set_flashdata("responseMessage","Event Deleted !!");
                   redirect('events');
             }
          else
          {
              $this->session->set_flashdata("responseMessage","Event Was Not Deleted .");
              redirect('events');
          }             
     }

     
     
     public function  edit_events($event_id)
     {
         $data['events']=$this->database->_selectWhere(TABLE_EVENT, 'event_id,event_name,event_date,event_area,event_city,event_organiser,event_type,event_created_by,event_created_dttm,event_updated_by,event_updated_dttm,event_status,event_description', array('event_id' => $event_id));
         
         $this->session->set_userdata('tag','edit');
         $this->_display('add_event',$data);
     }
     
     public function search()
     {   
         $this->output->enable_profiler(TRUE);
         $search_data['event_name']=  $this->input->post('event_name');
         $search_data['event_type']= $this->input->post('event_type'); 
         $search_data['event_status']= $this->input->post('event_status');
         $data['events'] =$this->database->_get_search(TABLE_EVENT, '' ,$search_data );
         $array = json_decode(json_encode($data), true);
         $this->_display('event_list',$array);
               
     }

     

     public function displayall()
     {
         $data['events'] =$this->database->_selectWhere(TABLE_EVENT, 'event_id,event_name,event_date,event_area,event_city,event_organiser,event_type,event_created_by,event_created_dttm,event_updated_by,event_updated_dttm,event_status,event_description');
         $this->_display('event_list',$data);
      }
     
     public function _display($view_name, $data = array())
    {
         $data['page_name'] = 'Event ADD';
         $this->load->view('header');
        $this->load->view($view_name,$data);
    }

}