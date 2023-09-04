<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserServiceRequestStoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserServiceRequestController extends Controller
{
    public function store(UserServiceRequestStoreRequest $request): \Illuminate\Http\JsonResponse
    {
//        auth()->user()->services()->attach($request->input('service_id'), [
//            'note' => $request->input('note'),
//        ]);
//
//        return response()->json(['message' => 'Service request submitted successfully']);


        $request = Auth::user()->services()->create([
            'service' => $service->id,
        ]);

        $request->requests()->attach($request->input('note'));

        return response()->json([
            'message' => 'success',
            'data' => null
        ],201);

    }

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $services = Service::all();

        return view('request', compact('services'));

    }

}
