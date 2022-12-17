<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index(){
        return view('panel.index');
    }

    public function history(){
        return view('panel.history');
    }

    public function wallet(){
        return view('panel.wallet');
    }
}
