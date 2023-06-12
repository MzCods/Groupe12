<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SagnaController extends Controller
{
    public function index()
    {
        return view('sagna1.list');
    }
}
