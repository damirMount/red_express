@extends('layouts.app')

@section
    <div class="container">
        <div class="row">
            <div class="col-8">
                @include('pages.news.components.blog')
            </div>

            <div class="col-4">
                @include('pages.news.components.another_news')
            </div>
        </div>
    </div>
@endsection
