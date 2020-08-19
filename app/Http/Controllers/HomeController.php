<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page
     *
     * @return View
     */
    public function __invoke(Request $request)
    {
        return view('home', [
            'officers' => \App\Officer::all(),
            'updates' => \App\Update::all()
        ]);
    }
}
