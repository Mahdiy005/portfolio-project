<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    private const DIRECT = 'dashboard-theme.messages.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::paginate(config('paginate.paginate_number'));
        return view(self::DIRECT . 'index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view(self::DIRECT . 'create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        Message::create($request->validated());
        return back()->with('success', __('messages.add-status'));
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return back()->with('success', __('messages.delete-status'));
    }
}
