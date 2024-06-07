<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Employee::take(3)->get();

        return view('partials.doctors', ['doctors' => $doctors]);
    }
}
