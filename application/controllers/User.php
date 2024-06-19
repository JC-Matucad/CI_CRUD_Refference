<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function index()
    {
        $data['tbl_employee_data'] = $this->user_model->getUser();
        $this->load->view('user/index',$data);

    }

    function add()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $employee_name = $this->input->post('inputname');
            $employee_age = $this->input->post('inputage');
            $employee_datehired = $this->input->post('inputDatehired');
            $data = array(
                'employee_id'=>'',
                'employee_name'=>$employee_name,
                'employee_age'=>$employee_age,
                'employee_datehired'=>$employee_datehired
            );

            $status = $this->user_model->insertUser($data);
            if ($status==true){
                $this->session->set_flashdata('success','successfully added');
                redirect(base_url('user/index'));
            }
            else{
                $this->session->set_flashdata('error','Error');
                $this->load->view('user/add_user');
            }
            
        }
        else{
            $this->load->view('user/add_user');
        }
    }
}
?>