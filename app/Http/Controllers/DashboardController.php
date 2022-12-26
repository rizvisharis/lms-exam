<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class DashboardController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('dashboard', ['subjects' => $subjects]);
    }
}
