@extends('layouts.dashboard')
@section('title', 'Edit Service')
@section('content')
    {{-- @dump($service) --}}
    {{-- @dd() --}}
    @include('services.form', [
        'action' => route('services.update', $service->id),
        'edit' => true,
    ])
@endsection
