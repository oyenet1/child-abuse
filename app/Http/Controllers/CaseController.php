<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    //
    function show(Data $data){
        return view('show', compact(['data']));
    }
}
