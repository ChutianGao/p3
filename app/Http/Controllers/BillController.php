<?php

namespace App\Http\Controllers;

class BillController extends Controller
{
    /**
     * GET /
     */
    public function index()
    {
        return view('calculator')->with(["title"=>"Bill Splitter"]);
    }
}
