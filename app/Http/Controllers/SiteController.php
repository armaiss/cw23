<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'data' =>
                [
                    ['name' => 'form', 'link' => '/form'],
                    ['name' => 'contact', 'link' => '/contact'],
                    ['name' => 'about', 'link' => '/about']

                ],
            'contents' =>
                [
                    ['title' => 'card A', 'text' => 'Copyright (C) Microsoft Corporation. All rights reserved.

                        Try the new cross-platform PowerShell https://aka.ms/pscore6

                    PS E:\project\CW23\card> php artisan serve
'],
                    ['title' => 'card B', 'text' => 'Copyright (C) Microsoft Corporation. All rights reserved.

                        Try the new cross-platform PowerShell https://aka.ms/pscore6

                    PS E:\project\CW23\card> php artisan serve
'],
                    ['title' => 'card C', 'text' => 'Copyright (C) Microsoft Corporation. All rights reserved.

                        Try the new cross-platform PowerShell https://aka.ms/pscore6

                    PS E:\project\CW23\card> php artisan serve
']
                ]
        ]);
    }

    public function showForm()
    {

        return view('form', ['data' =>
            [
                ['name' => 'form', 'link' => '/form'],
                ['name' => 'contact', 'link' => '/contact'],
                ['name' => 'about', 'link' => '/about']

            ],
            'names' => [
                'input 1', 'input 2', 'temperature'
            ],
        ]);
    }

    public function temperature(Request $request)
    {
        $kelvin = $request->post('temperature') + 273;
        return redirect()->route('form')->with('success', $kelvin);
    }

}
