<?php

namespace App\Controllers;

use App\Models\CandidatoModel;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');

        $model = new CandidatoModel();

        dd($model->findAll());
    }
}
