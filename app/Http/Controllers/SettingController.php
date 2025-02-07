<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;

class SettingController extends Controller
{
    private const DIRECT = 'dashboard-theme.settings.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::paginate(config('paginate.paginate_number'));
        return view(self::DIRECT . 'index', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        return view(self::DIRECT . 'edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        // dd($request->validated());
        $setting->update($request->validated());
        return to_route('dashboard.settings.index')->with('success', __('messages.update-status'));
    }
}
