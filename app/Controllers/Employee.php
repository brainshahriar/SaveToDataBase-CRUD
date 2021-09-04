<?php

namespace App\Controllers;
use  App\Models\EmployeeModel;

class Employee extends BaseController
{
	public function index()
	{
        $trainer= new EmployeeModel();
        $data['signup']=$trainer->findAll();
		return view('mobile/index',$data);
	}
  /* public function save()
    {
        $trainer= new EmployeeModel();
        $trainer->insert($_POST);
        
    }
    */
    public function store()
    {
        $trainer = new EmployeeModel();
		$data=[
          'name'=>$this->request->getPost('name'),
		  'email'=>$this->request->getPost('email'),
		  'phone'=>$this->request->getPost('phone'),
		  'course'=>$this->request->getPost('course'),
		  'cv'=>$this->request->getPost('cv')
		];
        $trainer->insert($data);return $this->response->redirect(site_url('employee/index'));

    }
}
