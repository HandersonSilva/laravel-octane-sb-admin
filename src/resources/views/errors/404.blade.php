@extends('layout.blank')
@section('page_title', '404')
@section('content')
    <!-- Begin Page Content -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-12">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="container-fluid">
                        <!-- 404 Error Text -->
                        <div class="text-center">
                            <div class="error mx-auto" data-text="404" style="width: 15.5rem">404</div>
                            <p class="lead text-gray-800 mb-5">Page Not Found</p>
                            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                            <a href="/">&larr; Back to Dashboard</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
