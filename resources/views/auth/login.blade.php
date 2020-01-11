@extends('layouts.auth')

@section('content')
    <div class="p-2">
        <h5 class="mb-5 text-center">Sign in to Invest.</h5>
        <form class="form-horizontal" action="https://themesdesign.in/apaxy/layouts/vertical/index.html">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-4">
                        <label for="userpassword">Pin</label>
                        <input type="password" class="form-control border-radius-20" id="userpassword" placeholder="Enter password">
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="text-md-right mt-3 mt-md-0">
                                <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your Pin?</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                    </div>
                    <div class="mt-4 text-center">
                            <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Create an account</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
