<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Salary;

class salaryController extends Controller
{

   ///now create index function that handle home route
   public function index(){
      return Salary::all();
   }
    
    //now create public function that serve for handling routes
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
        'full_name' => 'required',
        'email' => 'required|email',
        'job_title' => 'required',
        'salary' => 'required|numeric',
        'currency' => 'required',
        'year_of_experience' => 'sometimes|integer'
    ]);
          // Use updateOrCreate to handle both cases
     $salary = Salary::updateOrCreate(
        ['email' => $validated['email']], // Search condition
        $validated // Data to update/insert
    );

    return response()->json($salary, 200);


       
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Salary::findOrFail($id);
    }


      /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sala = Salary::findOrFail($id);
        
        $request->validate([
              'full_name'=>'required',
             'email'=>'required',
             'job_title'=>'required',
             'salary'=>'required',
             'currency'=>'required',
             'year_of_experience'=>'required'
        ]);

        $sala->update($request->all());
        
        return $sala;
    }


    
}
