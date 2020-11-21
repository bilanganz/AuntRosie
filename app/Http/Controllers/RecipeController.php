<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipes;
use App\Models\Ingredients;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Recipes $recipes)
    {
        $recipes = $recipes::all();
        return view('recipes.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredients::all();
        return view('recipes.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:ingredients|max:255',
            'description' => 'required|max:255',
            'ingredients' => 'required',
            'amount' => 'required'
        ]);

        $array = $request['amount'];
        foreach ($array as $array_key => $array_item) {
            if ($array[$array_key] == 0) {
                unset($array[$array_key]);
            }
        }

        dd($array);

        // $user->tasks()->sync([5,6,7,8], false); 
        // $user->tasks()->getRelatedIds();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipes::find($id);
        
        return view('recipes.show', compact(['recipe']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
