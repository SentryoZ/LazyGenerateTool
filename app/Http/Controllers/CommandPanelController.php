<?php

namespace App\Http\Controllers;

class CommandPanelController extends Controller
{
    public function index()
    {
        return view('cp.index');
    }
}
