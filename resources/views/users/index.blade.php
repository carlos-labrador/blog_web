@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Users Admin Panel</h5>
                    <div class="float-end">                       
                        <a id="create_user_btn" class="btn btn-primary btn-sm" href="{{ route('users.create') }}">
                            <i class="bi bi-person-plus-fill"></i>
                            <span>create</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Edit/Delete/Update Users</h5>
                    <div class="mt-2">

                        @include('layouts.shared.messages')
                    </div>

                    <table class="table table-hover table-striped table-bordered
                    embedded-list">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email</th>
                                {{--"col" >Username</th> --}}
                                <th>Roles</th>
                                <th colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                    <span class="badge bg-primary">{{ $role->slug }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <x-forms.view-button href="{{ route('users.show', $user->id) }}" />
                                    <x-forms.edit-button href="{{ route('users.edit', $user->id) }}" />
                                    <x-forms.delete-button action="{{route('users.destroy',['user' => $user])}}" />
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection