@extends('layouts.auth.app')
@section('title', '')
@section('description')
@endsection

@section('content')
@foreach($users as $user)
{{ $user->name }} | {{ $user->email }}
@endforeach
@endsection