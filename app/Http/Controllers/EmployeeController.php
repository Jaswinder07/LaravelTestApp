<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::whereNull('parent_id')->with('children')->get();
        return view('employees', compact('employees'));
    }
}
