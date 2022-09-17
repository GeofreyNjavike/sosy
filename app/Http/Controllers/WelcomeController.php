<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function service(Request $request, $id)
    {
        $services =  Service::find($id);
        $service2 = Service::first()->get();
        return view('frondEnd.services', compact('services', 'service2'));
    }

    public function team()
    {
        return view('frondEnd.team');
    }

    public function contact()
    {
        return view('frondEnd.contactUs');
    }
}
