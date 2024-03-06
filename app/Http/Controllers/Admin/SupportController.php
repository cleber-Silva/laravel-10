<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index( Support $support )
    {
        // Caso não esteja passado por parametro acima
        $support = new Support();
        $supports = $support->all();
        //dd($supports);

        //ou modo simplificado
        //$supports = Support::all();

        return view('admin/supports/index', compact('supports'));
        
        //ou assim
        // return view('admin/supports/index', [
        //     'supports' => $supports
        // ]);
    }
    public function create( Support $support )
    {
        return view('admin/supports/create');
    }

    public function store( Support $support )
    {
        dd('Vou cadastrar;....');
        //return view('admin/supports/create');
    }
}