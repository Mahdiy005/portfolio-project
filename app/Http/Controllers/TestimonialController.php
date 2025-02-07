<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isNull;

class TestimonialController extends Controller
{
    private const DIRECT = 'dashboard-theme.testimonials.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(config('paginate.paginate_number'));
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
    public function store(StoreTestimonialRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $newImgName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('testimonials', $newImgName, 'public');
        $data['image'] = $newImgName;
        Testimonial::create($data);
        return back()->with('success', __('messages.add-status'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view(self::DIRECT . 'show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view(self::DIRECT . 'edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();
        // dd($data);
        if($request->hasFile('image')) {
            // dd('yes');
            Storage::delete('public/testimonials/' . $testimonial->image);
            $image = $request->image;
            $newImgName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('testimonials', $newImgName, 'public');
            $data['image'] = $newImgName;
        } else {
            $data['image'] = $testimonial->image;
        }

        $testimonial->update($data);
        return to_route('dashboard.testimonials.index')->with('success', __('messages.update-status'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::delete('public/testimonials/' . $testimonial->image);
        $testimonial->delete();
        return back()->with('success', __('messages.delete-status'));
    }
}
