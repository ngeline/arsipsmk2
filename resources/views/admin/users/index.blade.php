@extends('layouts.app', ['title' => "User"])

@section('content')
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
        </tr>
    @endforeach
@endsection
