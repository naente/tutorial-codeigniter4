<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnimalsModel;

class AnimalsController extends BaseController
{
    public function index()
    {
        $model = new AnimalsModel;
        $animals = $model->findAll();

        return view('Animals/index', ['animals' => $animals]);
    }

    public function show($id)
    {
        $model = new AnimalsModel;
        $animal = $model->find($id);

        return view('Animals/show', ['animal' => $animal]);
    }

    public function create()
    {
        return view('Animals/create', [
            'animal' => ['name' => '']
        ]);
    }

    public function store()
    {
        $model = new AnimalsModel;
        $result = $model->insert([
            'name' => $this->request->getPost('name')
        ]);

        if ($result === false) {
            return redirect()->back()
                ->with('errors', $model->errors())
                ->with('warning', 'エラー')
                ->withInput();
        } else {
            return redirect()->to('/animals/show/' . $result)
                ->with('info', '登録しました');
        }
    }

    public function edit($id)
    {
        $model = new AnimalsModel;
        $animal = $model->find($id);

        return view('Animals/edit', ['animal' => $animal]);
    }

    public function update($id)
    {
        $model = new AnimalsModel;
        $result = $model->update($id, [
            'name' => $this->request->getPost('name')
        ]);

        if ($result === true) {
            return redirect()->to('/animals/show/' . $id)
                ->with('info', '更新しました');
        } else {
            return redirect()->back()
                ->with('errors', $model->errors())
                ->with('warning', 'エラー')
                ->withInput();
        }
    }

    public function delete($id)
    {
        $model = new AnimalsModel;
        $animal = $model->find($id);

        if ($this->request->getMethod() === 'post') {
            $model->delete($id);
            return redirect()->to('/animals')
                ->with('info', '削除しました');
        }
        return view('Animals/delete', ['animal' => $animal]);
    }
}
