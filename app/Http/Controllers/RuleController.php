<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Requests\RuleStoreRequest;
use Illuminate\Support\Facades\Storage;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('monster.index',['monster' => Rule::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monster.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RuleStoreRequest $request)
    {

        $file = $request->file('img');

        Rule::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $file ? $file->store('public/images') : 'public/images/default.png',
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rule $data)
    {
        return view('monster.details',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rule $data)
    {
        return view('monster.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RuleStoreRequest $request, Rule $data)
    {
        $file = $request->file('img');

        $data->update([

            'name'=> $request->name,
            'description'=> $request->description,
        ]);

        if($file){
            Storage::delete($data->img);
            $data->img = $file->store('public/images');
            $data->save();
        }

        return redirect('/monsters');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rule $data)
    {
        $data->delete();
        Storage::delete($data->img);
        return redirect('/monsters');
    }
}
