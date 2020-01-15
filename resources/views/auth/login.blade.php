@extends('layouts.auth')

@section('content')
    <div class="p-2">
        <h5 class="mb-5 text-center">Sign in to Invest.</h5>
        <form class="form-horizontal" action="{{ route('login') }}" method="post">
@csrf
            <div class="row">
                <div class="col-md-12">
                    @include('inc.messages')
                </div>
                <div class="col-md-12">
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
                        <input type="password" name="pin" class="form-control border-radius-20" id="userpassword" placeholder="Enter pin">
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="text-md-right mt-3 mt-md-0">
                                <a href="" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your Pin?</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-success btn-block waves-effect waves-light border-radius-20" type="submit">Log In</button>
                    </div>
                    <div class="mt-4 text-center">
                            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Create an account</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
