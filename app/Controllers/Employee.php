<?php

namespace App\Controllers;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
	public function index()
	{
		return view('mobile/index');
	}
    public function save()
    {
        $trainer= new EmployeeModel();
        $trainer->insert($_POST);
        return $this->response->redirect(site_url('employee/index'));
    }
}
