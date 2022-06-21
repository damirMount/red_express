@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href={{ asset('css/view_news.css')}}>
@endsection

@section('content')
    <div class="container blogs_news red-express__news">
        <h1>
            Заголовок новости
        </h1>
        <div class="row">

            <div class="col-12 col-lg-9">
                @include('pages.news.components.blog')
            </div>

            <div class="col-12 col-lg-3 px-0">
                @include('pages.news.components.another_news', compact('another_blogs'))
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let headerBlog = 50;
        let headerClass = document.querySelector('.red-express__header');
        let newsClass = document.querySelector('.red-express__news');

        if(document.body.contains(headerClass)) {
                headerClass.classList.add('mt-2', 'mt-lg-5');
                headerClass.classList.remove('position-fixed', 'top-0', 'left-0');
        }

        document.addEventListener('scroll', () => {
            if(window.scrollY >= headerBlog) {
                newsClass.classList.remove('blogs_news');

                headerClass.classList.remove('mt-2', 'mt-lg-5');
                return headerClass.classList.add('position-fixed', 'top-0', 'left-0');
            }
            if(window.scrollY < headerBlog) {
                newsClass.classList.add('blogs_news');

                headerClass.classList.add('mt-2', 'mt-lg-5');
                return headerClass.classList.remove('position-fixed', 'top-0', 'left-0');
            }
        })
    </script>
@endsection
