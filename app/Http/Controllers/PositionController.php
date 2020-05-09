<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::orderBy('id', 'ASC')->paginate(4);
        return view('positions.index', compact('positions'));
    }

    public function create()
    {
        return view('positions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:50|min:5',
            'descripcion' => 'nullable|min:5|max:50'
        ]);

        Position::create($request->all());

        $notification = "El puesto se registro correctamente";
        return back()->with(compact('notification'));
    }

    public function show(Position $position)
    {
        
    }

    public function edit($id)
    {
        $position = Position::findOrFail($id);
        return view('positions.edit', compact('position'));
    
    }
    public function update(Request $request, $id)
    {

        $position = Position::findOrFail($id);
        $validatedData = $request->validate([
            'nombre' => 'required|max:50|min:5',
            'descripcion' => 'nullable|min:5|max:50'
        ]);
        $data = $request->all();

        $position->fill($data);
        $position->save();

        $notification = "El puesto se actualizo correctamente";
        return redirect('/positions')->with(compact('notification'));
    }

    public function destroy(Position $position)
    {
        //
    }
}
