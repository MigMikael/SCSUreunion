<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function firstStep()
    {
        return view('register.first');
    }

    public function handleFirstStep(Request $request)
    {

    }

    public function lastStep()
    {
        return view('register.last');
    }

    public function handleLastStep(Request $request)
    {

    }
}
