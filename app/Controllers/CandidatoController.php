<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CandidatoModel;

class CandidatoController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new CandidatoModel();
    }

    public function index()
    {
        //
    }

    public function save()
    {
        $this->model->save([
            'nome' => '', 
            'email' => '', 
            'avaliacao' => ''
        ]);
    }

    public function update()
    {
        $this->model->update([
            'nome' => '', 
            'email' => '', 
            'avaliacao' => ''
        ]);
    }

    public function delete()
    {
        $this->model->delete();
    }

    public function __destruct()
    {
        $this->model = null;
    }
}
