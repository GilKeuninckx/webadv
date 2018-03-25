<?php

/**
 * User: Gil Keuninckx
 * Date: 25/03/2018
 * Time: 23:16
 */

class App extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->employees();
    }

    public function employees()
    {
        //region Models & Libraries
        $this->load->model("Employees");
        //endregion

        //region Queries
        $data["employees"] = $this->Employees->read_all();
        //endregion

        //region Views
        $this->load->view("includes/header");
        $this->load->view("app/overview", $data);
        $this->load->view("includes/footer");
        //endregion
    }

    public function create()
    {
        //region Views
        $this->load->view("includes/header");
        $this->load->view("app/create");
        $this->load->view("includes/footer");
        //endregion
    }


    public function delete($id)
    {
        //region Models & Libraries
        $this->load->model("Employees");
        //endregion

        //region Queries
        $delete = $this->Employees->delete_entry($id);
        //endregion

        redirect("app/employees");
    }

    public function store()
    {
        //region Libraries & Models
        $this->load->library("form_validation");
        $this->load->model("Employees");
        //endregion

        //region Rules
        $this->form_validation->set_rules('first_name', 'first_name', 'required', array(
            'required' => 'The field %s is required.'
        ));
        $this->form_validation->set_rules('last_name', 'last_name', 'required', array(
            'required' => 'The field %s is required.'
        ));
        $this->form_validation->set_rules('salary', 'salary', 'required', array(
            'required' => 'The field %s is required.'
        ));
        $this->form_validation->set_rules('hire_date', 'hire_date', 'required', array(
            'required' => 'The field %s is required.'
        ));
        $this->form_validation->set_rules('department', 'department', 'required', array(
            'required' => 'The field %s is required.'
        ));
        //endregion

        //region Result validation
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

            $this->Employees->create_entry(
                $this->input->post("first_name"),
                $this->input->post("last_name"),
                $this->input->post("salary"),
                $this->input->post("hire_date"),
                $this->input->post("department")
            );

            redirect("app/employees");
        }
    }

}