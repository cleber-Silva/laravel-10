<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController 
{
    public function index()
    {
        return view('admin/supports/index');
    }
}