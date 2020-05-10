@extends('layouts.master')
@section('title')
Doner Registration
@endsection
@section('content')
<section id="reg" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 donnerReg p-4 shadow">
                    <div class="borderHover">
                        <h2 id="heading" class=" mt-3 text-center">Doner Registration</h2>
                        <div class="hBorder m-auto"></div>
                    </div>
                    @if($errors->any())
                    @foreach($errors->all () as $error)
                    <div class="alert alert-danger" role="alert"><strong>{{ $error  }}</strong></div>
                    @endforeach
                    @endif

                    <form class="mt-5 px-4" method="post" action="{{url('/DonerRegs/store')}}">
                        @csrf
                    <div class="form-group">
                            <input value="{{old('name')}}" type="text" class="form-control" id="inputName" placeholder="name">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Your name must be 4-20 characters long, contain letters and  spaces, and must not contain special characters, or emoji, and first letter must be camel case.
                            </small>
                            {{ $error ?? '->first("name")'}}
                        </div>
                        <div class="form-group">
                            <input value="{{old('full address')}}" type="text" class=" form-control" id="inputAddress" placeholder="full address">
                            {{ $error ?? '->first("full address")'}}
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input  value="{{old('phone number')}}" type="text" class="alaa form-control phoneNum" id="inputPhone"
                                    placeholder="phone number">
                                    {{ $error ?? '->first("phone number")'}}
                                </div>
                            <div class="form-group col-md-6">
                                <input value="{{old('anthor number')}}" type="text" class="form-control phoneNum" id="inputPhone2"
                                    placeholder="anthor number">
                                    {{ $error ?? '->first("anthor number")'}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input value="{{old('age')}}" type="text" class="form-control" id="inputAge" placeholder="age">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your age must be 18-65 years old, contain numbers only.
                               
                             </small>
                             {{ $error ?? '->first("age")'}}
                            </div>
                            <div class="form-group col-md-6">
                                <input value="{{old('weight')}}" type="text" class="form-control" id="inputweight" placeholder="weight">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your weight must be 40-150 Kg, contain numbers only.
                                </small>
                                {{ $error ?? '->first("weight")'}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control alert-dark">
                                    <option selected>blood type</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                                {{ $error ?? '->first("blood type")'}}
                            </div>
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control alert-dark">
                                    <option selected>Are you smoking?</option>
                                    <option>yes</option>
                                    <option>no</option>
                                </select>
                                {{ $error ?? '->first("Are you smoking?")'}}
                            </div>
                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control alert-dark">
                                    <option selected>time of calling</option>
                                    <option>24 hours</option>
                                    <option>from 8am to 3pm</option>
                                    <option>from 3pm to 11pm</option>
                                </select>
                                {{ $error ?? '->first("time of calling")'}}
                            </div>
                        </div>

                        <div class="form-group text-center ">
                            <label class="form-check-label check">calling way:</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1"> SMS
                                </label>
                              
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2"> phone call
                                </label>
                            </div>
                            {{ $error ?? '->first("calling way")'}}
                        </div>

                        <div class="form-group text-center ">
                            <label class="form-check-label check">gander:</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1"> male
                                </label>
                              
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2"> female
                                </label>
                            </div>
                            {{ $error ?? '->first("gander")'}}
                        </div>
                        <button id="addBtn" type="submit" class="btn  btn-outline btn-lg rounded-0">SEND
                            MESSAGE</button>
                    </form>


                </div>
                <div class="col-md-1"></div>


            </div>
        </div>
    </section>

@endsection