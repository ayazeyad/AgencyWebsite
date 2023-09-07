<?php

namespace App\Http\Controllers;

use App\Models\employeeReview;
use App\Models\job;
use Illuminate\Http\Request;

class EmployeeReviewController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $reviews = employeeReview::all();
        $jobs = Job::all();

        return view('jobs', compact('reviews','jobs'));
    }
}
