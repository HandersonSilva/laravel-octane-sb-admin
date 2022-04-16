@extends('layout.master')
@section('page_title', 'Usuários')
@push('styles')
    <!-- Styles here!!-->
@endpush
@section('content')
    <!-- Page Heading -->
    <x-page-header :title="'Usuários'">
    </x-page-header>

    <!-- Content Row -->
    <h3>Usuário : {{$user->name}}</h3></h3>
@endsection
