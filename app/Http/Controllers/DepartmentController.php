<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function viewDepartment(){
        $viewDepartment = Department::all();
        return view('admin.department.view_department', compact('viewDepartment'));
    } // End Method

    public function addDepartment(){
        return view('admin.department.add_department');
    } // End Method

    public function storeDepartment(Request $request){

        $data = $request->validate([
            'dept_name'=>['required', 'unique:departments', 'max:255'],
           
        ]);

        if($data && !NULL){
            Department::insert([
                'dept_name'=> $request->dept_name,           
               
            ]);
            return redirect()->back()->with('message', "Department is added Successfully");
        }

        else{
            return redirect()->back()->with('error', "You must add a department which is not added before. ");
        }
    
       
       
        
    }
}
