@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href={{ asset('css/view_news.css')}}>
@endsection

@section('content')
    <div class="container red-express__news">
        <div class="row justify-content-between">
            <h1>
                Заголовок новости
            </h1>
            <div class="col-8">
                @include('pages.news.components.blog')
            </div>

            <div class="col-12 col-lg-3 px-0">
                @include('pages.news.components.another_news')
            </div>
        </div>
    </div>
@endsection
