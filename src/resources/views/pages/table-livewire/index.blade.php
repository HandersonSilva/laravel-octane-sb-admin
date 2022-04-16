@extends('layout.master')
@section('page_title', 'Tables')
@push('styles')
    <!-- Styles here!!-->
@endpush
@section('content')
    <!-- Page Heading -->
    <x-page-header :title="'Tables'">
    </x-page-header>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables with livewire</h6>
        </div>
        <div class="card-body">
            <livewire:users-table />
        </div>
    </div>

@endsection

@push('footer-js')
    <!-- Page level plugins -->
@endpush
