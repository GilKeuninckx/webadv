<?php

/**
 * User: Gil Keuninckx
 * Date: 25/03/2018
 * Time: 23:21
 */

class Employees extends CI_Model
{

    public $first_name;
    public $last_name;
    public $salary;
    public $hire_date;
    public $department;

    const TABLE_NAME = "employees";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_entry($first_name, $last_name, $salary, $hire_date, $department)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salary = $salary;
        $this->hire_date = $hire_date;
        $this->department = $department;

        $this->db->insert(self::TABLE_NAME, $this);
        return $this->read_entry($this->db->insert_id());
    }

    public function update_entry($id, $first_name, $last_name, $salary, $hire_date, $department)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salary = $salary;
        $this->hire_date = $hire_date;
        $this->department = $department;

        $this->db->set($this);
        $this->db->where("id", $id);
        $this->db->update(self::TABLE_NAME);
        return $this->read_entry($id);
    }

    public function read_entry($id)
    {
        $this->db->select("id, first_name, last_name, salary, hire_date, department");
        $this->db->from(self::TABLE_NAME);
        $this->db->where("id", $id);
        return $this->db->get()->row();
    }

    public function read_all()
    {
        $this->db->select("id, first_name, last_name, salary, hire_date, department");
        $this->db->from(self::TABLE_NAME);

        return $this->db->get()->result();
    }

    public function delete_entry($id)
    {
        $this->db->where("id", $id);
        $this->db->delete(self::TABLE_NAME);
        return $this->db->affected_rows();
    }

}