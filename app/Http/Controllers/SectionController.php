<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function viewSection(){
        $viewSection = Section::all();
        return view('admin.section.view_section', compact('viewSection'));
    } // End Method

    public function addSection(){
       
        return view('admin.section.add_section');
    } // End Method

    public function storeSection(Request $request){
       
        $addSection = $request->validate([
            'section_name'=> ['required', 'unique:sections', 'max:50'],
            'dept_name' => 'required'
        ]);

        if($addSection){
            Section::insert([
                'section_name'=> $request->section_name,
                'dept_name'=> $request->dept_name,

            ]);
            return redirect()->back()->with('message', "Section is added Successfully");
        } else{
            return redirect()->back()->with('error', "Section is not added.");
        }
    } // End Method


} //End Class
