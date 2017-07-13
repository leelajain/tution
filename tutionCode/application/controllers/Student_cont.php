 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_cont extends CI_Controller
{
    public function student()
    {
        $this->load->helper('url');  
        $this->load->view('student');       //html filename
    }
    public function studentProfile()
    {
        $this->load->helper('url');
        $this->load->view('studentProfile');     //html filename
    }
    public function updateStudentProfile()
    {
        $this->load->helper('url');  
        $this->load->view('updateStudentProfile');   //html filename
    }
    public function addStudent()
    {
        $this->load->helper('url');
        $this->load->view('addStudent');        //html filename
    }
     public function feeDetail()
    {
        $this->load->helper('url');
        $this->load->view('feeDetail');         //html filename
    }
}
?>