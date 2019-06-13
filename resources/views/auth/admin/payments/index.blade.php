@extends('layouts.auth.app')
@section('content')
@foreach ($payments as $payment)
{{-- Payment amounts are returned in cents --}}
{{ $payment->amount / 100 }}
@endforeach
@endsection
