@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-8">
                @include('pages.news.components.blog')
            </div>

            <div class="col-12 col-lg-3 px-0">
                @include('pages.news.components.another_news')
            </div>
        </div>
    </div>
@endsection
