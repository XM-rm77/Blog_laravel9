<?php

namespace App\Http\Controllers;

use App\Models\Analytic;
use Illuminate\Http\Request;

class AnalyticController extends Controller
{
    public function index()
    {
        $analytics = Analytic::all();
        return response()->json(array('analytics' => $analytics), 200);
    }

    public function showAnalytics()
    {
        return view('analytics.display');
    }
}
