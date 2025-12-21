<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopFormController extends Controller
{
    public function index()
    {
        return view('workshop.form');
    }

    public function store(Request $request)
    {
        return view('workshop.result', [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'color' => $request->color,
            'music' => $request->music
        ]);
    }
}
