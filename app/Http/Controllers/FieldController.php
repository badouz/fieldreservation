<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allFileds= Field::all();

        return view("field.index",['allFileds'=>$allFileds]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view("field.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $valdiation = $request->validate([
            'user_id' => ['required'],
            'name' => ['required'],
            'adress' => ['required'],
            'charge' => ['required'],
            'status' => ['required'],
        ]);
        Field::create($valdiation);
        return redirect()->route("filed.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Field $field)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Field $field)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Field $field)
    {
        //
    }
}
