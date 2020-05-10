<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\DonerRegistration;

 class DonerRegistrationController extends Controller
{
    public function create(){
     
        return view('layouts.create');
    }
    
    public function store(Request $request)

    {
        //validation
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:200|min:3|string',
            'full address' => 'required|max:400|min:3|string',
            'phone number'=>'required|max:11|integer',
            'another_number'=>'max:11|integer',
            'age'=>'requierd|integer',
            'weight'=>'requierd|integer',
            'blood type'=>'requierd',
            'Are you smoking?'=>'requierd',
            'time of calling'=>'requierd',
            'calling way'=>'requierd',
            'gander'=>'requierd',
            
            
        ]);
        
        if($validator->fails())
        {
             return redirect('DonerRegs/create')
                        ->withErrors($validator)
                        ->withInput();
        }

      

        //ends

        $DonerRegs=new DonerRegs();
        $DonerRegs->name=$request->name;
        $DonerRegs->full_address=$request->full_address;
        $DonerRegs->phone_number=$request->phone_number;
        $DonerRegs->another_number=$request->another_number;
        $DonerRegs->age=$request->age;
        $DonerRegs->weight=$request->weight;
        $DonerRegs->blood_type=$request->blood_type;
        $DonerRegs->Are_you_smoking=$request->Are_you_smoking;
        $DonerRegs->time_of_calling=$request->time_of_calling;
        $DonerRegs->calling_way=$request->calling_way;
        $DonerRegs->gander=$request->gander;
        $DonerRegs->save();
       
        
    }






}

