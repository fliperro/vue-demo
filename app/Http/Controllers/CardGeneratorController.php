<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardGeneratorController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'firstname' => ['required', 'max:50'],
            'lastname' => ['required', 'max:50']
        ]);

        $firstname = $validated['firstname'];
        $lastname = $validated['lastname'];

        return [
            'html' => view('card-generator.index', compact(
                'firstname',
                'lastname'
            ))->render()
        ];
    }
}
