<?php

namespace App\Http\Controllers;

use App\Models\Kangaroo;
use App\Http\Requests\StoreKangarooRequest;
use App\Http\Requests\UpdateKangarooRequest;

class KangarooController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kangaroos = Kangaroo::all();

        return view('kangaroos.index', compact('kangaroos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKangarooRequest $request)
    {
        $kangaroo = Kangaroo::create($request->validated());

        return response()->json(['message' => 'Success'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kangaroo $kangaroo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kangaroo $kangaroo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKangarooRequest $request, Kangaroo $kangaroo)
    {
        // dd($kangaroo);
        // Retrieve the record
        $record = Kangaroo::findOrFail($kangaroo->id);

        // Validate the request data
        // $validatedData = $request->validate([
        //     'name' => 'required|string',
        //     // Add validation rules for other fields
        // ]);

        // Update the record with the validated data
        $record->update([
            'name' => $request->editName,
            'nickname' => $request->editNickname,
            'weight' => $request->editWeight,
            'height' => $request->editHeight,
            'gender' => $request->editGender,
            'color' => $request->editColor,
            'friendliness' => $request->editFriendliness,
            'birthday' => $request->editBirthday,

        ]);

        // Return the updated record or any other response
        return response()->json(['message' => 'Record updated successfully', 'updatedRecord' => $record]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kangaroo $kangaroo)
    {
        //
    }
}
