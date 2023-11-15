<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Requests\RuleStoreRequest;
use Illuminate\Support\Facades\Storage;

class RuleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }


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
        return view('monster.create',['data'=> Category::all()]);
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
            'CA' => $request->CA,
            'PF' => $request->PF,
            'img' => $file ? $file->store('public/images') : 'public/images/default.png',
            'category_id' => $request->category_id
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
        return view('monster.edit',compact('data'),['categories'=> Category::all()]);
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

    public function filter(Category $category){

        // metodo donato
        $monsters = $category->rules;
        return view('monster.index',['monster' => $monsters]);

        //! metodo where get
        // return view('monster.index',['monster' => Rule::where('category_id', $category->id)->get()]);
    }
}
