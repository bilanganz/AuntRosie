<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;
use App\Models\MedicalCondition;


class IngredientsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ingredients $ingredients)
    {
        $ingredients = $ingredients::all();
        return view('ingredients.index',compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicalConditions = MedicalCondition::all();
        return view('ingredients.create', compact('medicalConditions'));
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
            'name' => 'required|unique:posts|max:255',
            'description' => 'required|max:255',
            'shelfLife' => 'required|numeric|min:0|not_in:0',
            'nutrition_id'=>'required|numeric|min:0|not_in:0',
            'calories'=>'required|numeric|min:0|not_in:0',
            'fat'=>'required|numeric|min:0|not_in:0',
            'saturatedFat'=>'required|numeric|min:0|not_in:0',
            'transFat'=>'required|numeric|min:0|not_in:0',
            'cholestrol'=>'required|numeric|min:0|not_in:0',
            'sodium'=>'required|numeric|min:0|not_in:0',
            'carbohydrate'=>'required|numeric|min:0|not_in:0',
            'dietaryFiber'=>'required|numeric|min:0|not_in:0',
            'sugar'=>'required|numeric|min:0|not_in:0',
            'protein'=>'required|numeric|min:0|not_in:0',
            'vitaminD'=>'required|numeric|min:0|not_in:0',
            'calcium'=>'required|numeric|min:0|not_in:0',
            'iron'=>'required|numeric|min:0|not_in:0',
            'potassium'=>'required|numeric|min:0|not_in:0',
        ]);

        $ingredient = new Ingredients(request(['name','description','shelfLife','medical_condition_id','nutrition_id']));
        
        $ingredient->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
