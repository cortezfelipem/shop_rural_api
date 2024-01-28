<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Category;
use App\Models\User;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return response()->json($ads);
    }

    public function create()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'cattle_name' => 'required',
            'cattle_breed' => 'required',
            'cattle_age' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $ad = Ad::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'cattle_name' => $request->cattle_name,
            'cattle_breed' => $request->cattle_breed,
            'cattle_age' => $request->cattle_age,
        ]);

        return response()->json($ad, 201);
    }

    public function show($id)
    {
        $ad = Ad::findOrFail($id);
        return response()->json($ad);
    }
}
