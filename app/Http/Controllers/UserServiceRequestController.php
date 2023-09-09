<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserServiceRequestStoreRequest;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\View;
class UserServiceRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum'); // Ensure only authenticated users can access these methods.
    }
    public function store(UserServiceRequestStoreRequest $request): RedirectResponse
    {
        $user = auth()->user();

        $service = Service::query()->findOrFail($request->input('service_id'));

        $user->services()->attach($service, [
            'note' => $request->input('note'),
            'status' => 'Pending',
        ]);
        return redirect()->route('index')->with('success', 'Request submitted successfully');
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $services = Service::all();
        return view('request', compact('services'));
    }
}
