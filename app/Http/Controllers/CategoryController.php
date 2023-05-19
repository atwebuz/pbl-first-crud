<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function getCategoryStatistics()
    // {
    //     $categoryStatistics = Category::select('name')
    //         ->withCount('posts')
    //         ->orderBy('posts_count', 'desc')
    //         ->groupBy('name')
    //         ->get();

    //     return view('pages.statistic', ['categoryStatistics' => $categoryStatistics]);
    // }
}
