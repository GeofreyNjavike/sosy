<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {

        return view('services');
    }


    public function create(Request $request)
    {

        $data = $request->all();
        Service::create($data);
        return back();
    }

    public function edit(Request $request, $id)
    {
        $service =  Service::where('id', $id)->get();

        return view('editServices', compact('service'));
    }


    public function update(Request $request, $id)
    {
        Service::find($id)->update($request->all());
        return redirect()->route('dashboard');
    }
}
