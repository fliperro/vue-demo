<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumCalculatorController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'firstNumber' => ['required', 'numeric'],
            'secondNumber' => ['required', 'numeric']
        ]);

        return [
            'sum' => $validated['firstNumber'] + $validated['secondNumber']
        ];
    }
}
