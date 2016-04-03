<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypografiaController extends Controller
{
    //
    public function index()
    {
      return view('app.welcome');
    }

    public function main()
    {
      return view('app.main');
    }
}
