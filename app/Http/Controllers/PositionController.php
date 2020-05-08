<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        return view('positions.index');
    }

    public function create()
    {
        return view('positions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:50|min:5',
            'descripcion' => 'nullable|min:5'
        ]);

        Position::create($request->all());

        $notification = "El puesto se registro correctamente";
        return back()->with(compact('notification'));
    }

    public function show(Position $position)
    {
        //
    }

    public function edit(Position $position)
    {
        //
    }

    public function update(Request $request, Position $position)
    {
        //
    }

    public function destroy(Position $position)
    {
        //
    }
}
