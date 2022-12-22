<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentModel;
class Student extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
          $modeldata =  new StudentModel();
          $data['students'] = $modeldata->findAll();
        //   $data['title'] = "All Sudent";
        //   print_r($data);
    return view("students/studentList",$data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view("students/add_student");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new StudentModel();
        // echo $this->request->getPost('name');
        // $data['name'] = $this->request->getPost("name");
        // $data['phone'] = $this->request->getPost("phone");
        // $data['email'] = $this->request->getPost("email");
        // $data['message'] = $this->request->getPost("message");
        // $data['male'] = $this->requerst->getPost("male");
        // $data['female'] = $this->request->getPost("female");
        // print_r($data);

        $data = $this->request->getPost();
        // print_r($data);
        $model->save($data);
        // return redirect()->back();
       // OR
     return $this->index();
     
    
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new studentModel();
        $data['student'] = $model->find($id);
        return view("students/edit_students",$data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
      $model = new studentModel();
      $model->delete($id);
      return redirect()->to('student');
    }
}
