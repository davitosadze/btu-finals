<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $quizzes = Quiz::where("is_approved", 1)
        ->orderBy("created_at", "desc")
        ->with('author')
        ->get();

        return view("index", compact("quizzes"));
    }
}
