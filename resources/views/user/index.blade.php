@extends('layouts.default')
@section('content')
<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope='col'>User</th>
                <th scope='col'>Roles</th>
            </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>
               @foreach($user->roles as $role )
                   <span class="badge badge-primary">{{$role->name}}</span>
               @endforeach
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
