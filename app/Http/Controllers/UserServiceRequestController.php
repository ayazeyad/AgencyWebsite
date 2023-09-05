<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserServiceRequestStoreRequest;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserServiceRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum'); // Ensure only authenticated users can access these methods.
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
            $user = auth()->user();

            // Get the selected service
            $service = Service::query()->findOrFail($request->input('service_id'));

            // Attach the service to the user's requests in the pivot table
            $user->services()->attach($service, [
                'note' => $request->input('note'),
                'status' => 'Pending',
            ]);

            // Redirect the user or perform any other actions as needed
            return redirect()->route('index')->with('success', 'Request submitted successfully');
    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $services = Service::all();

        return view('request', compact('services'));
    }

}
