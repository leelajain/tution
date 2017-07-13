<?php defined('BASEPATH') OR exit('No direct script access allowed');
class AddData extends CI_Model {
    function addBatchItem($data){
        $this->db->insert('batch', $data);
        return;
    }
    function addTeacherItem($data){
        $this->db->insert('teacher', $data);
        return;
    }
    function addCourseItem($data){
        $this->db->insert('course', $data);
        return;
    }
}
?>