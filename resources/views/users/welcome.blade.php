@extends('layouts.master')
@section('title-page', 'Welcome {{$user->name}}')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Welcome, {{ $user->name }}!</h1>
                <p class="lead">We're glad to have you here.</p>
            </div>
        </div>
    </div>
@endsection