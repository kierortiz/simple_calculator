<?php

class Posts_model extends CI_Model{

    public function __contruct(){

        $this->load->database();
        
    }

    public function get_posts(){

      $query1 = $this->db->get('products');
      return $query1->result_array();
    }

}

