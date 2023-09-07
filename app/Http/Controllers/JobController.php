<?php

namespace App\Http\Controllers;

use App\Models\employeeReview;
use App\Models\job;
use App\Models\Service;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $jobs = Job::all();
        $reviews = employeeReview::all();
        return view('jobs', compact('jobs','reviews'));
    }
}
