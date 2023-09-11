<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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

        $employees = Employee::with('employeeReview')->get();

        return view('jobs', compact('employees','reviews','jobs'));

//        return view('jobs', compact('reviews','jobs'));
    }

    public function getEmployeeDataWithReview(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $employees = Employee::with('employeeReview')->get();

        return view('jobs', compact('employees'));
    }
}
