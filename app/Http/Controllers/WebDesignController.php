<?php

// App/Http/Controllers/WebDesignController.php
namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\Bootcamp;
use Illuminate\Http\Request;

class WebDesignController extends Controller
{
    public function index()
    {
        $seminars = Seminar::all();
        $bootcamps = Bootcamp::take(4)->get(); // Mengambil hanya 4 data bootcamp

        return view('web-design', compact('seminars', 'bootcamps'));
    }

    public function storeSeminar(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'instructor' => 'required',
            'description' => 'required',
            'rating' => 'required|numeric',
            'review_count' => 'required|integer',
            'price' => 'required|numeric',
            'discounted_price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $imageName);
        }

        Seminar::create([
            'title' => $request->title,
            'instructor' => $request->instructor,
            'description' => $request->description,
            'rating' => $request->rating,
            'review_count' => $request->review_count,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
            'image' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Seminar added successfully.');
    }

    public function storeBootcamp(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
            'students' => 'required|integer',
            'original_price' => 'required|numeric',
            'discounted_price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $imageName);
        }

        Bootcamp::create([
            'title' => $request->title,
            'duration' => $request->duration,
            'students' => $request->students,
            'original_price' => $request->original_price,
            'discounted_price' => $request->discounted_price,
            'image' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Bootcamp added successfully.');
    }
}
