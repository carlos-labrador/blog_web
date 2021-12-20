@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        Login
                    </div>
                    {{-- {{ __('Login') }} --}}
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('login.perform') }}">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        @include('layouts.shared.messages')

                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                                placeholder="Username" required="required" autofocus>
                            <label for="floatingName">Email or Username</label>
                            @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="Password" required="required">
                            <label for="floatingPassword">Password</label>
                            @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                        @include('auth.shared.copy')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection