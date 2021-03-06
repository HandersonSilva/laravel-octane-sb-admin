@extends('layout.master')
@section('page_title', 'Usuários')
@push('styles')
    <!-- Styles here!!-->
@endpush
@section('content')
    <!-- Page Heading -->
    <x-page-header :title="'Usuários'">
        <x-button-link-sb
            href="{{ route('user.create') }}"
            :class="'btn-primary'"
            :icon="'fas fa-plus-circle fa-sm text-white-50'"
            :label="'Novo'"
        />
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
