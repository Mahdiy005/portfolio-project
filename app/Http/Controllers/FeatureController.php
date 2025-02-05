<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use App\Models\Feature;

class FeatureController extends Controller
{
    private const DIRECT = 'dashboard-theme.features.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::paginate(config('paginate.paginate_number'));
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
    public function store(StoreFeatureRequest $request)
    {
        Feature::create($request->validated());
        return back()->with('success', __('messages.add-status'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        return view(self::DIRECT . 'show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view(self::DIRECT . 'edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        $feature->update($request->validated());
        return to_route('dashboard.features.index')->with('success', __('messages.update-status'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return back()->with('success', __('messages.delete-status'));
    }
}
