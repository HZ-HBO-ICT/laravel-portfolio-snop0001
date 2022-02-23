<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $attributes = [
        'grade_class' => 'not-graded',
        'lowest_passing_grade' => 5.5,
    ];

    /**
     * This function adds a new result to the grade if the conditions are met
     */
    public function addResult($newGrade)
    {
        if ($this->best_grade < $newGrade) {
            $this->best_grade=$newGrade;
            if ($this->best_grade >= $this->lowest_passing_grade) {
                $this->passed_at = now();
                $this->grade_class='passed';
            } else {
                $this->grade_class='failed';
            }
        }
        $this->save();
    }
}
