<?php

class SelectData extends CI_Model {
    function teacher() {
        $q = $this->db->query("SELECT * FROM `teacher`");
        if($q->num_rows() >0){
            foreach($q->result() as $row){
                $data[]=$row;
            }
        }
        return $data;
    }
}