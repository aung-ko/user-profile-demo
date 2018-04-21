@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-2"></div>

    <div class="col-md-8">

    <h1>User profile form requirement</h1>

    @include('layouts.errors')

    <form class="form-horizontal" method="POST" action="{{ route('userProfiles') }}">
        @csrf

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label">Name: </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="birthday" class="col-md-2 col-form-label">Date of Birth: </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 control-label" for="gender">Gender:</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="gender-0">
                        <input type="radio" name="gender" id="gender" value="male" {{ old('gender')=="male" ? 'checked='.'"'.'checked'.'"' : '' }}> Male
                    </label>
                    <label class="radio-inline" for="gender-1">
                        <input type="radio" name="gender" id="gender" value="female"{{ old('gender')=="female" ? 'checked='.'"'.'checked'.'"' : '' }}> Female
                    </label>
                    <label class="radio-inline" for="gender-2">
                        <input type="radio" name="gender" id="gender" value="other" {{ old('gender')=="other" ? 'checked='.'"'.'checked'.'"' : '' }}> Other
                    </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-2 control-label" for="radios">Marital Status:</label>
                <div class="col-md-10">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="marital_status" id="marital_status" value="married" {{ old('marital_status')=="married" ? 'checked='.'"'.'checked'.'"' : '' }}> Married
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="marital_status" id="marital_status" value="single"{{ old('marital_status')=="single" ? 'checked='.'"'.'checked'.'"' : '' }}> Single
                    </label>
                </div>
            </div>

            <div class="form-group row">
                <label for="occupation" class="col-md-2 col-form-label">Occupation: </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ old('occupation') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label">Email: </label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label">Phone: </label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                </div>
            </div>
                
            <div class="form-group row">
                <label class="col-md-2 control-label" for="address">Address: </label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="3" id="address" name="address">{{ old('address') }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                </div>
            </div>

        </form>

    </div>

    <div class="col-md-2"></div>
</div>

@endsection