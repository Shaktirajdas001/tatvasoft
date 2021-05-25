@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <table>
                    <thead>
                    <th>Email</th>
                    <th>Firstname</th>
                    <th>Last name</th>
                    <th>Gender</th>
                    <th>Dob</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                        <td>{{$user->email}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->dob}}</td>
                        <td>
                            <a href="/edit/{{ $user->id }}"><button type="button" class="btn btn-primary">Edit</button></a>
                            
                            <button type="button" class="btn btn-primary"><a href="/destroy/{{ $user->id }}"  onclick="return confirm('Do you want to delete')">Delete</a></button>
                            
                        </td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
