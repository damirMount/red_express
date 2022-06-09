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

        <div class="row">
            <nav class="red-express__pagination col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            1
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            2
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            3
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">
                            >
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
