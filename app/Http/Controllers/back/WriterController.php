<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function dashboard()
    {
        return view('back.writers.WriterDashboard');
    }
}
