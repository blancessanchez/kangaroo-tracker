<?php

namespace App\Http\Controllers;

use App\Enums\Friendliness;
use App\Enums\Gender;
use App\Models\Kangaroo;
use App\Http\Requests\StoreKangarooRequest;
use App\Http\Requests\UpdateKangarooRequest;

class KangarooController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kangaroos = Kangaroo::all();
        $genderEnum = Gender::values();
        $friendlinessEnum = Friendliness::values();

        return view(
            'kangaroos.index',
            compact('kangaroos', 'genderEnum', 'friendlinessEnum')
        );
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
     * Update the specified resource in storage.
     */
    public function update(UpdateKangarooRequest $request, Kangaroo $kangaroo)
    {
        $kangaroo->fill($request->only([
            'name',
            'nickname',
            'weight',
            'height',
            'gender',
            'color',
            'friendliness',
            'birthday',
        ]))->save();

        return response()->json(['message' => 'Success'], 200);
    }
}
