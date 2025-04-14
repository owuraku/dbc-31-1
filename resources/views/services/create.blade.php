@extends('layouts.dashboard')
@section('title', 'Add A New Service')
@section('content')
    @include('services.form', ['action' => route('services.store')])
@endsection
