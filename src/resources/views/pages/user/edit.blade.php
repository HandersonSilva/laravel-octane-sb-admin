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
    <x-card-basic :title="'Edição'">
        <form method="POST" action="{{ route('register') }}">
            @include('pages.user.include.content_form', ['data' => $user])
        </form>
    </x-card-basic>
@endsection
