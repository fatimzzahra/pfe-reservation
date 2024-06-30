<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function show($id)
    {
        $class = Classes::findOrFail($id);
        return view('class.show', compact('class'));
    }
}
