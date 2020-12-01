<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipes;
use App\Models\Ingredients;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

        $recipe = new Recipes(request(['name','description']));
        $recipe->save();
        // $recipe->ingredients()->sync($request->ingredients, ['amount' => $request->amount]);

        $ingredients = $request->ingredients;
        $amount = $request->amount;
        $size = count(collect($request)->get('ingredients'));

        for ($i = 0; $i < $size; $i++)
        {
            $recipe->ingredients()->attach($ingredients[$i], ['amount' => $amount[$i]]);
        }

        return redirect()->action([RecipeController::class, 'index']);
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
        $recipe = Recipes::find($id);
        $ingredients = Ingredients::all();
        
        return view('recipes.edit', compact(['recipe','ingredients']));
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
        $recipe = Recipes::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:ingredients|max:255',
            'description' => 'required|max:255',
            'ingredients' => 'required',
            'amount' => 'required'
        ]);

        $recipe->name = $request->input('name');
        $recipe->description = $request->input('description');

        $recipe->save();

        $ingredients = $request->ingredients;
        $amount = $request->amount;
        $size = count(collect($request)->get('ingredients'));
        $data =[];

        for ($i = 0; $i < $size; $i++)
        {
            $data[$i+1]['ingredients_id'] = $ingredients[$i];
            $data[$i+1]['amount'] = $amount[$i];
        }

        $recipe->ingredients()->sync($data);

        return redirect()->action([RecipeController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipes::find($id);
        $recipe->delete();

        return redirect()->action([RecipeController::class, 'index']);
    }
}
