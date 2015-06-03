<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Submission extends CI_Controller {

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
         
        $data['master_mission']=$this->database->_selectWhere(TABLE_MISSION_MASTER, 'mission_id,mission_name', array('mission_trash !=' => '1'));
        $this->_display('add_sub_mission',$data);
     }
      public function add_submission(){
           
         $insert_data['submission_name']=  $this->input->post('submission_mname');//$_POST['mission_name'];
         $insert_data['submission_area']= $this->input->post('area');// == '') ? '0' : '1';//,'','0');//$_POST['mission_staT'];
         $insert_data['submission_city']= $this->input->post('city');//;$_POST['mission_description'];
         $insert_data['submission_inception_date']= date("Y-m-d", strtotime($this->input->post('inception_date')));
;        $insert_data['submission_master_id']= $this->input->post('Master_mission');
         $insert_data['submission_description']= $this->input->post('description');
         $insert_data['submission_created_by']= $this->session->userdata('user_name');
         $insert_data['submission_created_dttm']= date('Y-m-d H:i:s');
         $insert_data['submission_status']= $this->input->post('mission_stat');
         print_r($insert_data);
         $insert_id=$this->database->_insert(TABLE_SUB_MISSION,$insert_data);
         if( $insert_id != "" )
             {
                   $this->session->set_flashdata("responseMessage","Sub-Mission Added !!");
                   redirect('submission');
             }
          else
          {
              $this->session->set_flashdata("responseMessage","sub-Mission Was Not Added .");
              redirect('submission');
          }      
//$this->_display('add_mission');
     }
     
     public function update_mission($mission_id){
          
        
         $insert_data['mission_name']=  $this->input->post('mission_name');//$_POST['mission_name'];
         $insert_data['mission_status']= $this->input->post('mission_stat');// == '') ? '0' : '1';//,'','0');//$_POST['mission_staT'];
         $insert_data['mission_description']= $this->input->post('mission_description');//;$_POST['mission_description'];
         $insert_data['mission_updated_by']= $this->session->userdata('user_name');
         $insert_data['mission_updated_dttm']= date('Y-m-d H:i:s');
         
         $row_affected=$this->database->_update(TABLE_MISSION_MASTER,$insert_data,array('mission_id' => $mission_id));
         
         if( $row_affected > 0 )
             {
                   $this->session->set_flashdata("responseMessage","Mission Updated !!");
                   redirect('mission');
             }
          else
          {
              $this->session->set_flashdata("responseMessage","Mission Was Not Updated .");
              redirect('mission');
          }      
//$this->_display('add_mission');
     }
     
     function  delete_mission($mission_id)
     {
     
       $row_affected=$this->database->_delete(TABLE_MISSION_MASTER,array('mission_id' => $mission_id));
         
         if( $row_affected > 0 )
             {
                   $this->session->set_flashdata("responseMessage","Mission Deleted !!");
                   redirect('mission/displayall');
             }
          else
          {
              $this->session->set_flashdata("responseMessage","Mission Was Not Deleted .");
              redirect('mission/displayall');
          }        
         
         
     }

     
     
     public function  edit_mission($mission_id)
     {
         $data['mission']=$this->database->_selectWhere(TABLE_MISSION_MASTER, 'mission_id,mission_name,mission_created_by,mission_created_dttm,mission_updated_by,mission_updated_dttm,mission_status,mission_description', array('mission_trash !=' => '1','mission_id' => $mission_id));
         $this->session->set_userdata('tag','edit');
         $this->_display('add_mission',$data);
     }

     public function displayall()
     {
         $data['mission'] =$this->database->_selectWhere(TABLE_MISSION_MASTER, 'mission_id,mission_name,mission_created_by,mission_created_dttm,mission_updated_by,mission_updated_dttm,mission_status,mission_description', array('mission_trash !=' => '1') );
//        echo" <pre>";
//        print_r($data['mission']);
//         echo" </pre>";
         $this->_display('mission_list',$data);
         
     }
     
     
     public function search()
     {   
         $search_data['mission_name']=  $this->input->post('fnam');
         $search_data['mission_created_by']=$this->input->post('created_by');
         $search_data['mission_created_dttm']=$this->input->post('created_date');
         $search_data['mission_status']=$this->input->post('mission_status');
         $search_data['mission_description']=$this->input->post('description');
//         echo "<pre>";
//         print_r($search_data);
//         exit();
//         echo "</pre>";
         $data['mission'] =$this->database->_selectWhereLike(TABLE_MISSION_MASTER, '' ,array('mission_trash !=' => '1') ,array($search_data) );
    
         echo "<pre>";
         print_r($data);
         exit();
         echo "</pre>";
         
         $this->_display('mission_list',$data);
         
     }

     public function _display($view_name = '', $data = array())
    {
         $data['page_name'] = 'Mission ADD';
         $this->load->view('header');
         $this->load->view($view_name,$data);
         $this->load->view('footer');
    }

}