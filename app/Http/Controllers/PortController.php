<?php

namespace App\Http\Controllers;

use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function index()
    {
        return view('ports.index', [
            'ports' => Port::all()
        ]);
    }

    public function create()
    {
        return view('ports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Port::create($request->all());

        return redirect()->route('ports.index');
    }

    public function edit(Port $port)
    {
        return view('ports.edit', compact('port'));
    }

    public function update(Request $request, Port $port)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $port->update($request->all());

        return redirect()->route('ports.index');
    }

    public function destroy(Port $port)
    {
        $port->delete();

        return redirect()->route('ports.index');
    }
}
