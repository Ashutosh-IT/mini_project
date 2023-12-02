<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Crud extends BaseController
{
    public function index(){
        $model = new StudentModel();
        $data['students'] = $model->findAll();
        return view('crud', $data);
    }

    public function create(){
        return view('create');
    }

    public function add(){
        $model = new StudentModel();
        $data = [
            'urn' => $this->request->getPost('urn'),
            'name' => $this->request->getPost('name'),
            'branch' => $this->request->getPost('branch')
        ];

        $model->insert($data);
        return redirect('Crud');
    }


    public function edit($id = null){
        $model = new StudentModel();
        $data['student'] = $model->where('urn',$id)->first();
        return view('edit',$data);
    }

    public function update(){
        $model = new StudentModel();
        $data = [
            'urn' => $this->request->getPost('urn'),
            'name' => $this->request->getPost('name'),
            'branch' => $this->request->getPost('branch')
        ];
        $id = $this->request->getPost('urn');
        $model->update($id,$data);
        return redirect('Crud');
    }

    public function delete($id = null){
        $model = new StudentModel();
        $data['user'] = $model->where('urn', $id)->delete();
        return redirect('Crud');
    }
}


