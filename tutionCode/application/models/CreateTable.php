<?php

class CreateTable extends CI_Model {

    function create_db()
    {
        $this->load->dbforge();
        if ($this->dbforge->create_database('tutionCode'))
        {
                echo 'Database created!';
        } 
    }
    function delete_db()
    {
        $this->load->dbforge();
        if ($this->dbforge->drop_database('tutionCode'))
        {
                echo 'Database deleted!';
        }
    }
    function create_batch()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'batch_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'batch_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'batch_timing' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'course_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('batch_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('batch'); 
    }
    function create_batch_student_mapping()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'bsm_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'stud_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'batch_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('bsm_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('batch_student_mapping'); 
    }  
    function create_batch_course_mapping()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'bcm_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'course_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'batch_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('bcm_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('batch_course_mapping'); 
    } 
    function create_attendance()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'attend_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'batch_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'faculty_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'attend_date' => array(
                                                 'type' => 'DATE',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('attend_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('attendance'); 
    }
    function create_stud_attend_mapping()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'stud_attend_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'stud_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'attend_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('stud_attend_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('stud_attend_mapping'); 
    } 
    function create_stud_fee()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'fee_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'stud_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'installment_option' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'payment_mode' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'total_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'discount' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'final_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'installment_type' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'recieved_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'balance_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('fee_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('stud_fee'); 
    }   
    function create_fee_stud_mapping()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'fsm_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'fee_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'fee_cal_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('fsm_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('fee_stud_mapping'); 
    } 
    function create_fee_cal()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'fee_cal_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'outstanding_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'overdue_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'overall_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'recieved_fee' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'service_tax' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'uncleared' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('fee_cal_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('fee_cal'); 
    } 
    function create_student_details()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'stud_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'stud_surname' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'stud_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'father_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'mother_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'stud_gender' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'stud_dob' => array(
                                                 'type' => 'DATE',
                                          ),
                        'stud_email' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'stud_contact' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '10',
                                          ),
                        'stud_address' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'stud_profile' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'admission_year' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'admission_date' => array(
                                                 'type' => 'DATE',
                                          ),
                        'course_type' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'sch_coll_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'board' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'std_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'form_date' => array(
                                                 'type' => 'DATE',
                                          ), 
                        'place' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('stud_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('student_details'); 
    }  
    function create_standard()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'standard_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'standard_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('standard_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('standard'); 
    }
    function create_field_semester()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'field_semester_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'field_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'semester' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('field_semester_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('field_semester'); 
    }
    function create_field_std_mapping()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'field_std_mapping_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'field_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'std_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('field_std_mapping_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('field_std_mapping'); 
    }
    function create_course()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'course_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'course_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'course_type' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'std_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'subject_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'branch' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                                 'null' => TRUE,
                                          ),
                        'semester' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                                 'null' => TRUE,
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('course_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('course'); 
    }
    function create_schedules()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'schedules_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'schedules_timing' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'teacher_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'batch_course_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('schedules_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('schedules'); 
    }
    function create_teacher()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        't_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        't_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        't_fathername' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        't_surname' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        't_gender' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        't_dob' => array(
                                                 'type' => 'DATE',
                                          ),                        
                        't_email' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        't_contact' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '10',
                                          ),
                        't_address' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        't_profile' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'qualification' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'join_date' => array(
                                                 'type' => 'DATE',
                                          ),
                        'salary' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
//                        'subject_id' => array(
//                                                 'type' => 'INT',
//                                                 'constraint' => '100',
//                                          ),
//                        'course_id' => array(
//                                                 'type' => 'INT',
//                                                 'constraint' => '100',
//                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('t_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('teacher'); 
    }
    function create_subject()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'subject_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'subject_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'teacher_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('subject_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('subject'); 
    }
    function create_teacher_course_subject_mapping()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'tcm_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'course_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'teacher_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'subject_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('tcm_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('teacher_course_mapping'); 
    }
    function create_test()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'test_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'test_date' => array(
                                                 'type' => 'DATE',
                                          ),
                        'test_time' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'batch_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'total_marks' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'passing_marks' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'supervisor_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'subject_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('test_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('test'); 
    }
    function create_marks()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'marks_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'test_id' => array(
                                                  'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'stud_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'marks_obtained' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('marks_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('marks'); 
    }
    function create_t_attend_mapping()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        't_attend_mapping_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        't_id' => array(
                                                  'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        't_attend_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('t_attend_mapping_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('t_attend_mapping'); 
    }
    function create_t_attend()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        't_attend_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'date' => array(
                                                  'type' => 'DATE',
                                          ),
                        'time_in' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'time_out' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('t_attend_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('t_attend'); 
    }
    function create_expense()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'expense_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        't_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'staff_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'utilities_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'rent_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'transport_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'meals_entertainment_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                        'maintenance_id' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('expense_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('expense'); 
    }
    function create_staff()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'staff_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'staff_name' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'staff_contact' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '10',
                                          ),
                        'staff_address' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'payment_mode' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'payment_date' => array(
                                                 'type' => 'DATE',
                                          ),
                        'salary' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '100',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('staff_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('staff'); 
    }
    function create_meals_entertain()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'meals_entertain_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'message' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'amount' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '10',
                                          ),
                        'payment_mode' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'payment_date' => array(
                                                 'type' => 'DATE',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('meals_entertain_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('meals_entertain'); 
    }
    function create_maintenance()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'maintenance_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'title' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'amount' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '10',
                                          ),
                        'payment_mode' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'payment_date' => array(
                                                 'type' => 'DATE',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('maintenance_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('maintenance'); 
    }
    function create_transport()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'transport_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'title' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'amount' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '10',
                                          ),
                        'payment_mode' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'payment_date' => array(
                                                 'type' => 'DATE',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('transport_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('transport'); 
    }
    function create_utilities()
    { 
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
      $fields = array(
                        'utilities_ID' => array(
                                                 'type' => 'INT',
                                                 'constraint' => 11,
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                                          ),
                        'title' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'amount' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '10',
                                          ),
                        'payment_mode' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '100',
                                          ),
                        'payment_date' => array(
                                                 'type' => 'DATE',
                                          ),
                     );
      
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('utilities_ID', TRUE);
        // gives PRIMARY KEY (batch_ID)
        $this->dbforge->create_table('utilities'); 
    }
}
?>