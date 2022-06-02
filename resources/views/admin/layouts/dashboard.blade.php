@extends('admin.layouts.app')

@section('content')
    <div class="container-for-admin">
        @include('admin.layouts.sidebar')
        <main class="pt-5 ">
            <div class="container-fluid mt-5">
                @yield('dashboard_content')
            </div>
        </main>
    </div>
@endsection
