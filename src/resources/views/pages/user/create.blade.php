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
    <x-card-basic :title="'Cadastro'">
        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            @include('pages.user.include.content_form',['data' => null])
        </form>
    </x-card-basic>
@endsection
