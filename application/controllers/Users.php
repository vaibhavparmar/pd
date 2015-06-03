<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends CI_Controller {

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
         $data['users'] =$this->database->_selectWhere(TABLE_USERS, 'users_id,users_fname,users_mname,users_lname,users_gender,users_mobno1,users_email_id,users_adress,users_area,users_education');
         $this->_display('users',$data);
     }
     public function add_user_load(){
         $this->_display('add_users');
     }
//      public function add_mission(){
//          
//        
//         $insert_data['mission_name']=  $this->input->post('mission_name');//$_POST['mission_name'];
//         $insert_data['mission_status']= $this->input->post('mission_stat');// == '') ? '0' : '1';//,'','0');//$_POST['mission_staT'];
//         $insert_data['mission_description']= $this->input->post('mission_description');//;$_POST['mission_description'];
//         $insert_data['mission_created_by']= $this->session->userdata('user_name');
//         $insert_data['mission_created_dttm']= date('Y-m-d H:i:s');
//         
//         $insert_id=$this->database->_insert(TABLE_MISSION_MASTER,$insert_data);
//         
//         if( $insert_id != "" )
//             {
//                   $this->session->set_flashdata("responseMessage","Mission Added !!");
//                   redirect('mission');
//             }
//          else
//          {
//              $this->session->set_flashdata("responseMessage","Mission Was Not Added .");
//              redirect('mission');
//          }      
////$this->_display('add_mission');
//     }
//     
//     public function update_mission($mission_id){
//          
//        
//         $insert_data['mission_name']=  $this->input->post('mission_name');//$_POST['mission_name'];
//         $insert_data['mission_status']= $this->input->post('mission_stat');// == '') ? '0' : '1';//,'','0');//$_POST['mission_staT'];
//         $insert_data['mission_description']= $this->input->post('mission_description');//;$_POST['mission_description'];
//         $insert_data['mission_updated_by']= $this->session->userdata('user_name');
//         $insert_data['mission_updated_dttm']= date('Y-m-d H:i:s');
//         
//         $row_affected=$this->database->_update(TABLE_MISSION_MASTER,$insert_data,array('mission_id' => $mission_id));
//         
//         if( $row_affected > 0 )
//             {
//                   $this->session->set_flashdata("responseMessage","Mission Updated !!");
//                   redirect('mission');
//             }
//          else
//          {
//              $this->session->set_flashdata("responseMessage","Mission Was Not Updated .");
//              redirect('mission');
//          }      
////$this->_display('add_mission');
//     }
//     
//     function  delete_mission($mission_id)
//     {
//     
//       $row_affected=$this->database->_delete(TABLE_MISSION_MASTER,array('mission_id' => $mission_id));
//         
//         if( $row_affected > 0 )
//             {
//                   $this->session->set_flashdata("responseMessage","Mission Deleted !!");
//                   redirect('mission/displayall');
//             }
//          else
//          {
//              $this->session->set_flashdata("responseMessage","Mission Was Not Deleted .");
//              redirect('mission/displayall');
//          }        
//         
//         
//     }
//
//     
//     
//     public function  edit_mission($mission_id)
//     {
//         $data['mission']=$this->database->_selectWhere(TABLE_MISSION_MASTER, 'mission_id,mission_name,mission_created_by,mission_created_dttm,mission_updated_by,mission_updated_dttm,mission_status,mission_description', array('mission_trash !=' => '1','mission_id' => $mission_id));
//         $this->session->set_userdata('tag','edit');
//         $this->_display('add_mission',$data);
//     }

     public function displayall()
     {
         $data['users'] =$this->database->_selectWhere(TABLE_USERS, 'users_id,users_fname,users_mname,users_lname,users_gender,users_mobno1,users_email_id,users_adress,users_area,users_education');
       
        $this->_display('user_list',$data);
         
     }
     
     
     public function search()
     {   
         $this->output->enable_profiler(TRUE);
//        echo  $this->input->post('shibir');
//        exit();
         $search_data['users_fname']=  $this->input->post('users_fname');
         $search_data['users_mname']=$this->input->post('users_mname');
         $search_data['users_lname']=$this->input->post('users_lname');
         $search_data['users_mobno1']=$this->input->post('users_mobno1');
         $search_data['users_adress']=$this->input->post('users_adress');
         
         $data['users'] =$this->database->_get_search(TABLE_USERS, '' ,$search_data );
         $array = json_decode(json_encode($data), true);
         $this->_display('user_list',$array);
         
     }

     public function _display($view_name = '', $data = array())
    {
         $data['page_name'] = 'Mission ADD';
         $this->load->view('header');
        $this->load->view($view_name,$data);
    }

}