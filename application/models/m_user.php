<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_user extends CI_Model {
        function tampil_data(){
            return $this->db->get('user');
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        function edit_data($where,$table){		
            return $this->db->get_where($table,$where);
        }
        
        
    
    }
    
    /* End of file M_user.php */
    