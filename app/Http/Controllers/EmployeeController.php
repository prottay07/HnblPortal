<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function viewEmployee(){
        $viewEmp = Employee::all();
        return view('admin.employee.view_employee', compact('viewEmp'));
    } // End Method

    public function addEmployee(){
        
        return view('admin.employee.add_employee');
    } // End Method
}
