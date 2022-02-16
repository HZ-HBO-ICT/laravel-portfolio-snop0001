<?php

namespace App\http\Controllers;

use App\Models\Grade;

class DashboardController
{
    /**
     * This function is made to show the view page
     */
    public function index()
    {
        $grades = Grade::all();
        $previousCategory = null;
        $totalEC = 0;
        foreach ($grades as $grade) {
            if ($grade->passed_at !== null) {
                $totalEC += $grade->EC;
            }
        }


        return view('dashboard', [
            'grades' => $grades,
            'previousCategory' => $previousCategory,
            'totalEC' => $totalEC,
        ]);
    }
}
