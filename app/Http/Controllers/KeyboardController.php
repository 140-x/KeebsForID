<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyboard;


class KeyboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Keyboard::query();

        if ($request->layout) {
        $query->where('layout', $request->layout);
        }

        if ($request->sort == 'low') {
            $query->orderBy('price', 'asc');
        }

        elseif ($request->sort == 'high') {
            $query->orderBy('price', 'desc');
        }

        else {
            $query->latest();
        }

        $keyboards = $query->get();

        return view('catalog', compact('keyboards'));
    }

    public function show($id)
    {
        $keyboard = Keyboard::findOrFail($id);

        return view('product', compact('keyboard'));
    }

    public function admin()
    {
        if(auth()->user()->role != 'admin'){
            abort(403);
        }

        $keyboards = Keyboard::all();

        return view('admin', compact('keyboards'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Keyboard::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'switch_type' => $request->switch_type,
            'layout' => $request->layout,
            'price' => $request->price,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return redirect('/admin');
    }

    public function edit($id)
    {
        $keyboard = Keyboard::findOrFail($id);

        return view('edit', compact('keyboard'));
    }

    public function update(Request $request, $id)
    {
        $keyboard = Keyboard::findOrFail($id);

        $keyboard->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'switch_type' => $request->switch_type,
            'layout' => $request->layout,
            'price' => $request->price,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return redirect('/admin');
    }

    public function delete($id)
    {
        $keyboard = Keyboard::findOrFail($id);

        $keyboard->delete();

        return redirect('/admin');
    }
}