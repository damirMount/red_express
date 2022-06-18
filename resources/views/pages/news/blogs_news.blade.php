@php
    $arrImg = [
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png',
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png',
        'img/blog/card/person-1.png','img/blog/card/person-2.png','img/blog/card/person-3.png'
    ]
@endphp
@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href={{ asset('css/news.css') }} >
@endsection

@section('content')
    <div class="container px-lg-0 blogs_news red-express__blogs-news">
        <h1 class="pb-lg-4 mb-lg-4">Новости</h1>
        <div class="row justify-content-lg-between py-lg-1 mx-0">


            @for ($i = 0; $i < 9; $i++)
                <div class="col-12 col-lg-4 px-lg-0 red-express__card mb-5">
                    @include('components.news.card', ['img'=>$arrImg[$i], 'href'=>"news/view/blog"])
                </div>
            @endfor

        </div>

        <div class="row mt-lg-2">
            <nav class="red-express__pagination col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link">
                            <img src="img/pagination/arr-left.svg" class="arr-left" alt="">
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link active">
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
                            <img src="img/pagination/arr-right.svg" class="arr-right" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let headerBlock = 50;
        let headerClass = document.querySelector('.red-express__header');
        let blogsClass = document.querySelector('.red-express__blogs-news');

        if(document.body.contains(headerClass)) {
            headerClass.classList.add('mt-2', 'mt-lg-5');
            headerClass.classList.remove('position-fixed', 'top-0', 'left-0');
        }

        document.addEventListener('scroll', () => {
            if(window.scrollY >= headerBlock) {
                blogsClass.classList.remove('blogs_news');

                headerClass.classList.remove('mt-2', 'mt-lg-5');
                return headerClass.classList.add('position-fixed', 'top-0', 'left-0');
            }
            if(window.scrollY < headerBlock) {
                blogsClass.classList.add('blogs_news');

                headerClass.classList.add('mt-2', 'mt-lg-5');
                return headerClass.classList.remove('position-fixed', 'top-0', 'left-0');
            }
        })
    </script>
@endsection
