<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Course_cont extends CI_Controller
{
   public function addCourse()
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('course_name', 'course_name', 'callback_customAlphanumeric');
        $this->form_validation->set_rules('coursetype','coursetype','required');
        $this->form_validation->set_message('customAlphanumeric','Please enter in the following format eg:STD 9 or Engineering <br> Special characters are not allowed');
          if($this->form_validation->run() == FALSE)
        {
            $this->load->view('addCourse');       //html filename   
        }
        else
        {
            $this->load->helper('form');
            $this->load->database();
            $this->load->model('AddData');
            $data = array(
                'course_name' => $this->input->post('course_name'),
                'course_type' => $this->input->post('coursetype'),
                'standard' => $this->input->post('standard'),
                'branch' => $this->input->post('branch'),
                'semester' => $this->input->post('semester'),
                'subject_id' => $this->input->post('subjects')
            );
            $this->AddData->addCourseItem($data);
            redirect('Course_cont/addCourse');      
        }
    }
    public function course()
    {
        $this->load->helper('url');
        $this->load->view('addCourse');         //html filename
    } 
    public function customAlphanumeric($strr){
         if ( !preg_match('/^[0-9a-zA-Z ]+$/',$strr) )
            {
                return false;
            }
    }
}
?>