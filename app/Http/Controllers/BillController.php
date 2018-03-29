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
        return view('calculator')->with([
            'charged' => '',
            'roundUp' => false,
        ]);
    }

    /**
     * POST /
     */
    public function calculate(Request $request)
    {

        $this->validate($request, [
            'charged'      => 'required',
            'numberPeople' => 'required|numeric',
            'tipsRate'     => 'required',
        ]);

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
