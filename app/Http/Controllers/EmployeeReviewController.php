<?php

namespace App\Http\Controllers;

use App\Models\employeeReview;
use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\View;
class EmployeeReviewController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $reviews = employeeReview::all();
        $jobs = Job::all();

        return view('jobs', compact('reviews','jobs'));
    }
}
