<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ArmstrongController extends Controller
{
    public function index()
    {
        return view('armstrong.index');
    }

    public function check(Request $request)
    {
        $number = $request->input('number');
        $sum = 0;
        $temp = $number;
        $digits = strlen($number);

        while ($temp > 0) {
            $remainder = $temp % 10;
            $sum += pow($remainder, $digits);
            $temp = intval($temp / 10);
        }

        $isArmstrong = ($number == $sum);

        return view('armstrong.result', compact('number', 'isArmstrong'));
    }
}

