<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * GET /
     */
    public function index()
    {
        return view('calculator');
    }

    /**
     * POST /
     */
    public function calculate(Request $request)
    {

        $charged      = $request->input('charged', null);
        $numberPeople = $request->input('numberPeople', null);
        $tipsRate     = $request->input('tipsRate', null);
        $hasRoundUp   = $request->has('roundUp');
        $roundUp      = false;
        if ($hasRoundUp) {
            $roundUp = true;
        }

        return view('calculator')->with([
            'charged' => $charged,
            'roundUp' => $roundUp,
        ]);
    }
}
