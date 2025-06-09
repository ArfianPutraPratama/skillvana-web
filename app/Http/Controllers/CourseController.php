<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // Anda bisa menambahkan data statis di sini jika diperlukan
        return view('courses');
    }
}
