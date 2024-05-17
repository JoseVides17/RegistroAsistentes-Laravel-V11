<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveAssistantRequest;
use App\Models\Assistant;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Renderer\Inline\ImageRenderer;
use PHPUnit\Runner\Baseline\Writer;

class AssistantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveAssistantRequest $request)
    {
        $assistant = Assistant::create($request->validated());
        $qrData = [
            'name' => $assistant->name,
            'email' => $assistant->email,
            'identification' => $assistant->identification,
            'age' => $assistant->age
        ];
        return view('viewQr', compact('qrData'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
