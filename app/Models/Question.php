<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "quiz_questions";
    protected $fillable = ["quiz_id", "question_title", "image"];
    use HasFactory;

    public function options() {
        return $this->hasMany(QuestionOption::class);
    }
}
