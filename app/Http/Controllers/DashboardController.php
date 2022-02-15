<?php
namespace App\http\Controllers;

use App\Models\Grade;

class DashboardController
{
    /**
     * This function is made to show the view page
     */
    public function show()
    {
        $grades = Grade::all();
        $previousCategory = null;
        $totalEC=0;
        return view('dashboard', [
                'grades'=>$grades,
                'previousCategory'=>$previousCategory,
                'totalEC'=>$totalEC,
            ]);
    }
}
