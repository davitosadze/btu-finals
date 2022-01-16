<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Quiz extends Model
{
    protected $table = "quizzes";
    protected $fillable = ["title", "description", "image", "author_id", "is_approved"];
    protected $appends = ["questions_count"];
    use HasFactory;

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function getQuestionsCountAttribute() {
        $questionsCount = Question::where('quiz_id', $this->id)->count();
        return $questionsCount;
    }
}
