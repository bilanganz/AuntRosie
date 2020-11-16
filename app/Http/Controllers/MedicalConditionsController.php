<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalConditions;

class MedicalConditionsController extends Controller
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
    public function index(MedicalConditions $medicalConditions)
    {
        $medicalConditions = $medicalConditions::all();
        return view('medicalConditions.index',compact('medicalConditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicalConditions.create');
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
            'name' => 'required|unique:medical_conditions|max:255',
            'description' => 'required|max:255'
        ]);

        $medicalCondition = new MedicalConditions(request(['name','description']));
        $medicalCondition->save();  

        return redirect()->action([MedicalConditionsController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicalCondition = MedicalConditions::find($id);

        return view('medicalConditions.show', compact(['medicalCondition']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicalCondition = MedicalConditions::find($id);

        return view('medicalConditions.edit', compact(['medicalCondition']));
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
        $medicalCondition = MedicalConditions::find($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:medical_conditions,name,'.$id,
            'description' => 'required|max:255'
        ]);

        $medicalCondition->name = $request->input('name');
        $medicalCondition->description = $request->input('description');

        $medicalCondition->save();

        return redirect()->action([MedicalConditionsController::class, 'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE MEDICAL CONDITIONS
        $medicalCondition = MedicalConditions::find($id);
        $medicalCondition->delete();

        return redirect()->action([MedicalConditionsController::class, 'index']);
    }
}
