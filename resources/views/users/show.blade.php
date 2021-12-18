@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    User information
                </div>
                <div class="card-body">
                    <fieldset disabled>

                        <div class="mb-3 row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="username"
                                    value="{{ $user->username }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ $user->email }}">
                            </div>
                        </div>
                    </fieldset>


                </div>
                <div class="card-footer text-muted">
                    <a class="btn btn-secondary" type="button" href="{{ route('users.index') }}">
                        <i class="bi bi-caret-left-fill"></i>
                        &nbsp;
                    </a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">
                        <i class="bi bi-pen-fill"></i>
                        Edit
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection