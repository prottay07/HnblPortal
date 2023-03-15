<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tpm;

class TpmController extends Controller
{
    public function viewAllPillar(){
        $viewPillar = Tpm::all();
        return view('admin.tpm.tpm_view', compact('viewPillar'));

    } //End Method
}
