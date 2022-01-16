<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function details($quiz_id) {
        $quiz = Quiz::find($quiz_id);
        return view('quiz.details', compact('quiz'));
    }

    public function play($quiz_id) {
        $quiz = Quiz::where('id', $quiz_id)
        ->with('questions', function($query) {
            return $query->with('options');
        })
        ->first();

        return view('quiz.play', compact('quiz'));
    }
}
