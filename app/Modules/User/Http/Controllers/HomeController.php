<?php

namespace App\Modules\User\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends AppController
{

    public function __construct()
    {

    }


    public function index()
    {
        return view('User::Home.index');
    }

}
