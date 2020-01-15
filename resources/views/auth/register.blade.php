@extends('layouts.auth')

@section('content')
    <div class="p-2">
        <h5 class="mb-5 text-center">Join us to Invest.</h5>
        <form class="form-horizontal" action="{{ route('register') }}" method="post">
@csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-4">
                        <label for="text">Name</label>
                        <input type="text" class="form-control border-radius-20 {{ $errors->has('name') ? ' has-error' : '' }}" id="text" placeholder="Enter name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <label for="userpassword">Phonenumber</label>
                        <input type="number" class="form-control border-radius-20 {{ $errors->has('phone_number') ? ' has-error' : '' }}" id="userpassword" placeholder="Enter phonenumber" name="phone_number" value="{{ old('phone_number') }}">
                        @if ($errors->has('phone_number'))
                            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="userpassword">Pin</label>
                        <input type="password" class="form-control border-radius-20 {{ $errors->has('pin') ? ' has-error' : '' }}" id="userpassword" placeholder="Enter pin" name="pin" value="{{ old('pin') }}">
                        @if ($errors->has('pin'))
                            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </span>
                        @endif
                    </div>

                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<div class="alert alert-success text-center">--}}
                                {{--A login PIN will be sent to your phone number after successful registration.--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="mt-4">
                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Join Us</button>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have an account?, Login.</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
