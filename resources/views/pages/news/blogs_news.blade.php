@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href={{ asset('css/news.css') }} >
@endsection

@section('content')
    <div class="container">
        <h1>Новости</h1>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-12 col-lg-4">
                    @include('components.news.card', compact('blog'))
                </div>
            @endforeach

        </div>

        <div class="row mt-lg-2 red-express__pagination">
            <div class="col-12 d-flex justify-content-center">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
@endsection
