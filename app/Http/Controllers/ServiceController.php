<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $services = Service::where('user_id', auth()->user()->id)->get();
        $services =  auth()->user()->services()->get();

        return view('services.index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        $imagePath = $request->file('image')->store();
        $data['image'] = $imagePath;
        $data['user_id'] = auth()->user()->id;
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'amount' => 'required'
        // ])
        Service::create($data);
        return redirect(route('services.index'))->with([
            'key' => 'success',
            'message' => 'Service created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // if ($service->user_id != auth()->user()->id) {
        //     return redirect(route('services.index'));
        // }
        // $service_id =)
        // $service = Service::find($service_id); // without type hinting
        // dd($service);
        return view('services.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        // if ($service->user_id != auth()->user()->id) {
        //     return redirect(route('services.index'));
        // }

        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store();
            $data['image'] = $imagePath;
            if ($service->image) {
                Storage::delete($service->image); // delete old image
            }
        }

        $service->update($data);
        return redirect(route('services.index'))->with([
            'key' => 'success',
            'message' => 'Service updated successfully'
        ]);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
