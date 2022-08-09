<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnimalsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class AnimalsController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new AnimalsModel;
    }

    public function index()
    {
        $animals = $this->model->findAll();

        return view('Animals/index', ['animals' => $animals]);
    }

    public function show($id)
    {
        $animal = $this->getAnimal($id);

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
        $result = $this->model->insert([
            'name' => $this->request->getPost('name')
        ]);

        if ($result === false) {
            return redirect()->back()
                ->with('errors', $this->model->errors())
                ->with('warning', 'エラー')
                ->withInput();
        } else {
            return redirect()->to('/animals/show/' . $result)
                ->with('info', '登録しました');
        }
    }

    public function edit($id)
    {
        $animal = $this->getAnimal($id);

        return view('Animals/edit', ['animal' => $animal]);
    }

    public function update($id)
    {
        $result = $this->model->update($id, [
            'name' => $this->request->getPost('name')
        ]);

        if ($result === true) {
            return redirect()->to('/animals/show/' . $id)
                ->with('info', '更新しました');
        } else {
            return redirect()->back()
                ->with('errors', $this->model->errors())
                ->with('warning', 'エラー')
                ->withInput();
        }
    }

    public function delete($id)
    {
        $animal = $this->getAnimal($id);

        if ($this->request->getMethod() === 'post') {
            $this->model->delete($id);
            return redirect()->to('/animals')
                ->with('info', '削除しました');
        }
        return view('Animals/delete', ['animal' => $animal]);
    }

    private function getAnimal($id)
    {
        $animal = $this->model->find($id);

        if ($animal === null) {
            throw new PageNotFoundException();
        }

        return $animal;
    }
}
