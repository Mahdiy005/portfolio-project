<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    private const DIRECT = 'dashboard-theme.services.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(config('paginate.paginate_number'));
        return view(self::DIRECT . 'index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::DIRECT . 'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        Service::create($request->validated());
        return back()->with('success', __('messages.add-status'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view(self::DIRECT . 'show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view(self::DIRECT . 'edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update($request->validated());
        return to_route('dashboard.services.index')->with('success', __('messages.update-status'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', __('messages.delete-status'));

    }
}
