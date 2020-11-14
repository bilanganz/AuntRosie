<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredients;
use App\Models\Nutrition;
use App\Models\MedicalConditions;


class IngredientsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
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
        $medicalConditions = MedicalConditions::all();
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
            'photo'=>'image'
        ]);

        $nutrition = new Nutrition(request(['calories','fat','saturatedFat','transFat','cholestrol','sodium','carbohydrate','dietaryFiber','sugar','protein','vitaminD','calcium','iron','potassium']));
        $nutrition->save();        
        
        $ingredient = new Ingredients(request(['name','description','shelfLife',$nutrition->id]));
        $ingredient->nutrition_id = $nutrition->id;

        $ingredient->save();

        $file = $request->file('photo');
        $file_name = $file->getClientOriginalName();
        $file_size = round($file->getSize() / 1024);
        $file_ex = $file->getClientOriginalExtension();
        $file_mime = $file->getMimeType();

        $newname = strtolower($ingredient->name);
        // BETTER HARD TO TO BE .JPG FILE
        $file->move('images', $newname.'.'.$file_ex);

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
        $ingredient = Ingredients::find($id);
        $nutrition = Nutrition::find($ingredient->nutrition_id);

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:ingredients,name,'.$id,
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
            'photo'=>'image',
        ]);

        $ingredient->medical_condition_id = $request->input('medical_condition_id');
        $ingredient->name = $request->input('name');
        $ingredient->description = $request->input('description');
        $ingredient->shelfLife = $request->input('shelfLife');
        
        $nutrition->calories = $request->input('calories');
        $nutrition->fat = $request->input('fat');
        $nutrition->saturatedFat = $request->input('saturatedFat');
        $nutrition->transFat = $request->input('transFat');
        $nutrition->cholestrol = $request->input('cholestrol');
        $nutrition->sodium = $request->input('sodium');
        $nutrition->carbohydrate = $request->input('carbohydrate');
        $nutrition->dietaryFiber = $request->input('dietaryFiber');
        $nutrition->sugar = $request->input('sugar');
        $nutrition->protein = $request->input('protein');
        $nutrition->vitaminD = $request->input('vitaminD');
        $nutrition->calcium = $request->input('calcium');
        $nutrition->iron = $request->input('iron');
        $nutrition->potassium = $request->input('potassium');

        $ingredient->save();
        $nutrition->save();

        
        if($request->hasFile('photo')){        
            $path = 'images/';
  
            //code for remove old file
            if($ingredient->name != ''  && $ingredient->name != null){
                 $file_old = $path.$ingredient->name.'.jpg';
                 unlink($file_old);
            }
  
            $file = $request->file('photo');
            $file_name = $file->getClientOriginalName();
            $file_size = round($file->getSize() / 1024);
            $file_ex = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();
    
            $newname = strtolower($ingredient->name);
            $file->move('images', $newname.'.'.$file_ex);
       }
  


       return redirect()->action([IngredientsController::class, 'index']);
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
