<?php

namespace App\Http\Controllers;

use App\Models\employeeReview;
use App\Models\job;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\View;
class JobController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $jobs = Job::all();
        $reviews = employeeReview::all();
        return view('jobs', compact('jobs','reviews'));
    }

    public function show(Job $job): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('job', compact('job'));
    }
}
