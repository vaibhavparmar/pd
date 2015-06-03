<?php

class Database extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function _query( $query = '' ) {
        return $this->db->query($query)->result_array();
    }

    function _insert($table = '', $data = array()) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }


    function _selectWhere($table = '', $select = '', $where = array(),$order_by = '',$order = 'DESC', $limit = '', $offset = 0 ) {
        if( $select == '' ){$select = '*';}
        $this->db->select($select);
        $this->db->where($where);
        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get($table)->result_array();
//        echo '<pre>';
//        print_r($this->db->last_query());
//        print_r($this->db->get($table)->result_array());
//        echo '</pre>';
//        exit();
    }

    
    
   
    
    function _get_search($table='', $select = '',$like = array()) {
        $i=0;
     if( $select == '' ){$select = '*';}   
  foreach($like as $key=>$value) {
      if($i == 0) {
         
        $this->db->like($key,$value);
        $i++;
       
    } else {
        if($value != '' OR $value != NULL)
        {
        $this->db->like($key,$value);
        }
    }
    }
     
    $query = $this->db->get($table);
    
     return $query->result();
//
//         exit();
//         echo "</pre>";
//  $match = $this->input->post(‘search’);
//  $this->db->like(‘bookname’,$match);
//  $this->db->or_like(‘author’,$match);
//  $this->db->or_like(‘characters’,$match);
//  $this->db->or_like(‘synopsis’,$match);
//  $query = $this->db->get(‘books’);
//  return $query->result();
//    for( $i = 1; $i < count($like); $i++ ){
//                $this->db->like($like[$i], $on[$i-1]);
//            }    
//  $this->db->like(‘bookname’,$match);
//  $this->db->or_like(‘author’,$match);
//  $this->db->or_like(‘characters’,$match);
//  $this->db->or_like(‘synopsis’,$match);
//  $query = $this->db->get(‘books’);
//  return $query->result();
}
    
    
    function _selectWhereLike($table = '', $select = '', $where = array(), $like = array(), $order_by = '',$order = 'DESC', $limit = '', $offset = '0' ) {
       
        echo" <pre>";
        echo print_r($where);
        echo" </pre>";
        echo print_r($like);
        exit();
                
        if( $select == '' ){$select = '*';} 
        $this->db->select($select);
        $this->db->where($where);
        foreach( $like as $field => $value ){
            $this->db->like($field, $value);
        }
        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get($table)->result_array();
//        $this->db->get($table)->result_array();
//        echo 'ASasAS<pre>';
//        print_r($this->db->last_query());
//        echo '</pre>';
//        exit();
    }

    function _selectWhereIn($table = '', $select = '', $where = array(), $wherein = array(), $order_by = '', $order = 'DESC', $limit = '', $offset = '0' ) {
        if( $select == '' ){$select = '*';}
        $this->db->select($select);
        $this->db->where($where);
        if( count($wherein) > 0 ){
            foreach( $wherein as $key => $value ) {
                $this->db->where_in($key,$value);
            }
        }
        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get($table)->result_array();
        // $this->db->get($table)->result_array();
        // echo '<pre>';
        // print_r($this->db->last_query());
        // echo '</pre>';
        // exit();
    }

    function _update( $table = '', $data = array(), $where = array()){
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }
    
    function _delete($table = '', $where = array())
  {

      $this->db->where($where);
      $this->db->delete($table); 
      return $this->db->affected_rows();
  }

    function _update_file( $table = '', $data = array(), $where = array()){

        $this->db->where($where);
        $this->db->update($table, $data);
        $this->db->set('assignment_student_upload_attempts', 'assignment_student_upload_attempts+1', FALSE);
        $this->db->update($table);
        return $this->db->get()->result_array();


    }

    function _joinWhere($select = '', $tables = array(), $on = array(), $where = array(), $order_by = '', $order = 'DESC', $limit = '', $offset = '0'){
        $select = ( $select == '' )?'*':$select;
        $this->db->select($select);
        $this->db->from($tables[0]);
        if( count($tables) > 1 && count($on) > 0 ){
            for( $i = 1; $i < count($tables); $i++ ){
                $this->db->join($tables[$i], $on[$i-1]);
            }
        }
        $this->db->where($where);
        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get()->result_array();
    }

    function _joinWhereIn($select = '', $tables = array(), $on = array(), $where = array(), $wherein = array(), $order_by = '', $order = 'DESC', $limit = '', $offset = '0' ){
        $select = ( $select == '' )?'*': explode(", ", $select);
        if( is_array($select) ){
            foreach ($select as $key => $value) {
                $_pos = strpos($value,'DISTINCT');
                if( $_pos > -1 ){
                    $this->db->distinct();
                    $value = trim(substr($value, strlen('DISTINCT'), strlen($value)));
                }
                $this->db->select($value);
            }
        }else{
            $this->db->select($select);
        }
        $this->db->from($tables[0]);
        if( count($tables) > 1 && count($on) > 0 ){
            for( $i = 1; $i < count($tables); $i++ ){
                $this->db->join($tables[$i], $on[$i-1]);
            }
        }
        $this->db->where($where);
        if( count($wherein) > 0 ){
            foreach( $wherein as $key => $value ) {
                $this->db->where_in($key,$value);
            }
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        if( $order_by != '' ){
            $this->db->order_by($order_by, $order);
        }
        return $this->db->get()->result_array();
//        echo '<pre>';
//        print_r($this->db->last_query());
//        echo '</pre>';
//        exit();
    }

    function _joinWhereOr($select = '', $tables = array(), $on = array(), $where = array() ,$orwhere = array(), $order_by = '', $order = 'DESC', $limit = '', $offset = '0'  ){
        $select = ( $select == '' )?'*':$select;
        $this->db->select($select);
        $this->db->from($tables[0]);
        if( count($tables) > 1 && count($on) > 0 ){
            for( $i = 1; $i < count($tables); $i++ ){
                $this->db->join($tables[$i], $on[$i-1]);
            }
        }
        $this->db->where($where);
        $this->db->or_where($orwhere);
        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get()->result_array();
//        echo '<pre>';
//        print_r($this->db->last_query());
//        echo '</pre>';
//        exit();
    }

    function _joinWhereOrLike($select = '', $tables = array(), $on = array(), $where = array() ,$orlike = array(), $order_by = '', $order = 'DESC', $limit = '', $offset = '0'  ){
        $select = ( $select == '' )?'*':$select;
        $this->db->select($select);
        $this->db->from($tables[0]);
        if( count($tables) > 1 && count($on) > 0 ){
            for( $i = 1; $i < count($tables); $i++ ){
                $this->db->join($tables[$i], $on[$i-1]);
            }
        }
        $this->db->where($where);
        /*
            OR where functionality added.
        */
        $_or = array();
        $_or_where = "(";
        if( isset($orlike) && count($orlike) > 0 ){
            foreach( $orlike as $key => $value ){
                for($_i = 0, $_total = count($value); $_i < $_total; $_i++ ){
                    array_push($_or,$key." LIKE '%".$value[$_i]."%'");
                }
            }
        }
        $_or_where = $_or_where . $_matching_pattern = join(" OR ", $_or) . ")";
        $this->db->where($_or_where);

        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get()->result_array();
        // echo '<pre>';
        // print_r($this->db->get()->result_array());
        // print_r($this->db->last_query());
        // echo '</pre>';
        // exit();
    }

    function _joinSelectWhereGroupBy($tables = array(), $select = '', $on = array(), $where = array(),$group_by = '', $order_by = '', $order = 'DESC', $limit = '', $offset = '0'){
        $select = ( $select == '' )?'*':$select;
        $this->db->select($select);
        $this->db->from($tables[0]);
        if( count($tables) > 1 && count($on) > 0 ){
            for( $i = 1; $i < count($tables); $i++ ){
                $this->db->join($tables[$i], $on[$i-1]);
            }
        }
        $this->db->where($where);
        $this->db->group_by($group_by);
        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get()->result_array();
//        echo '<pre>';
//        print_r($this->db->last_query());
//        echo '</pre>';
//        exit();
    }

    function _joinSelectWhereInGroupBy($tables = array(), $select = '', $on = array(), $where = array(), $wherein = array(),$group_by = '', $order_by = '', $order = 'DESC', $limit = '', $offset = '0'){
        $select = ( $select == '' )?'*':$select;
        $this->db->select($select);
        $this->db->from($tables[0]);
        if( count($tables) > 1 && count($on) > 0 ){
            for( $i = 1; $i < count($tables); $i++ ){
                $this->db->join($tables[$i], $on[$i-1]);
            }
        }
        $this->db->where($where);
        if( count($wherein) > 0 ){
            foreach( $wherein as $key => $value ) {
                $this->db->where_in($key,$value);
            }
        }
        $this->db->group_by($group_by);
        if( $order_by != '' ){
            $this->db->order_by($order_by,$order);
        }
        if( $limit != '' ){
            $this->db->limit($limit,$offset);
        }
        return $this->db->get()->result_array();
//        echo '<pre>';
//        print_r($this->db->last_query());
//        echo '</pre>';
//        exit();
    }

    /*
        #getCount : Get the total number of rows/tuples.
        @param 
        $query : Any mysql query which consists of COUNT of any field
    */
    function _getCount( $query = "" ){
        $_result_array = $this->db->query($query)->result_array();
        if( count($_result_array) > 0 ){
            $_result_array = array_pop($_result_array);
        }
        return $_result_array['total'];
    }

    function _getFields( $table = "" ){
        $list = array();
        if( $table != "" ){
            $list = $this->db->list_fields($table);
        }
        return $list;
    }
    
    
}
