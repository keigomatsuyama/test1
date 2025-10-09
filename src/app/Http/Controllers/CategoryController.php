<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('contact', ['categories' => $categories]);
    }

    public function confirm(CategoryRequest $request)
    {
        $category = $request->only([
            'name',
            'name1',
            'gender',
            'email',
            'phone',
            'address',
            'building',
            'inquiryType',
            'inquiryText',
        ]);
        return view('confirm', ['category' => $category]);
    }
    
    public function thanks()
    {
        return view('thanks');
    }
}
