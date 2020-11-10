<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;
use App\Models\Nutrition;
use App\Models\MedicalCondition;


class IngredientsController extends Controller
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
            'name' => 'required|unique:ingredients|max:255',
            'description' => 'required|max:255',
            'shelfLife' => 'required|numeric|min:0|not_in:0',
            'medical_condition_id'=>'required|numeric|min:0|not_in:0',
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

        $nutrition = new Nutrition(request(['calories','fat','saturatedFat','transFat','cholestrol','sodium','carbohydrate','dietaryFiber','sugar','protein','vitaminD','calcium','iron','potassium']));
        $nutrition->save();        
        

        $ingredient = new Ingredients(request(['name','description','shelfLife',$nutrition->id]));
        $ingredient->nutrition_id = $nutrition->id;

        $ingredient->save();

        session()->flash(
            'message','You have successfully added ingredient.'  
        );

        return redirect()->action([IngredientsController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredient = Ingredients::find($id);
        $nutrition = Nutrition::find($ingredient->nutrition_id);

        return view('ingredients.show', compact(['ingredient','nutrition']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredient = Ingredients::find($id);
        $nutrition = Nutrition::find($ingredient->nutrition_id);
        $medicalConditions = MedicalCondition::all();

        return view('ingredients.edit', compact(['ingredient','nutrition','medicalConditions']));
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
