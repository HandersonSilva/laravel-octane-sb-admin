@extends('layout.master')
@section('page_title', '404')
@section('content')
    <!-- Page Heading -->
    <x-page-header :title="'Erro !'" />

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="500">500</div>
            <p class="lead text-gray-800 mb-5">Internal Error</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
            <a href="/">&larr; Back to Dashboard</a>
        </div>
    </div>
@endsection
