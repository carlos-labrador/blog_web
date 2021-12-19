@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Users Admin Panel</h5>
                    <div class="float-end">
                        {{-- <a id="restore_user_btn" class="btn btn-info btn-sm" href="">
                            <i class="fas fa-user-check"></i>
                            <span>restore</span>
                        </a> --}}
                        <a id="create_user_btn" class="btn btn-primary btn-sm" href="{{ route('users.create') }}">
                            {{-- <i class="fas fa-user-plus"></i> --}}
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
                                <th scope="col" width="1%">#</th>
                                <th scope="col" width="15%">Username</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col" width="10%">Username</th> --}}
                                <th scope="col" width="10%">Roles</th>
                                <th scope="col" width="1%" colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                {{-- <td>{{ $user->username }}</td> --}}
                                <td>
                                    @foreach($user->roles as $role)
                                    <span class="badge bg-primary">{{ $role->slug }}</span>
                                    @endforeach
                                </td>
                                <td><a href="{{ route('users.show', $user->id) }}"
                                        class="btn btn-warning btn-sm">Show</a></td>
                                <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a>
                                </td>
                                {{-- <td>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                                    $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td> --}}
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