<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonerRequest;

class DonerRequestController extends Controller
{
    public function create(){
        return view('layouts/form_layout.create');
    }
    public function store(Request $request)

    {
        //validation
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:200|min:3',
            'full address' => 'required|max:400|min:3',
            'phone number'=>'required|max:11',
            'another_number'=>'required|max:11',
            'blood type'=>'requierd',
            'time of calling'=>'requierd',
            'calling way'=>'requierd',
            'gander'=>'requierd',
            
            
        ]);
        
        if($validator->fails())
        {
             return redirect('DonerReq/create')
                        ->withErrors($validator)
                        ->withInput();
        }

      

        //end

        $DonerReq=new DonerRequest();
        $DonerReq->name=$request->name;
        $DonerReq->full_address=$request->full_address;
        $DonerReq->phone_number=$request->phone_number;
        $DonerReq->another_number=$request->another_number;
        $DonerReq->age=$request->age;
        $DonerReq->weight=$request->weight;
        $DonerReq->blood_type=$request->blood_type;
        $DonerReq->Are_you_smoking=$request->Are_you_smoking;
        $DonerReq->time_of_calling=$request->time_of_calling;
        $DonerReq->calling_way=$request->calling_way;
        $DonerReq->gander=$request->gander;
        $DonerReq->save();
        
    }
}
