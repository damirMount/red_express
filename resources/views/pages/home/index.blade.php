@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/home/map.css') }}>
    <link rel="stylesheet" href={{ asset('css/home/news.css') }}>
    <link rel="stylesheet" href={{ asset('css/accordion.css')}}>
    <link rel="stylesheet" href={{ asset('css/question.css')}}>


    <style>
        #MyRect {
        fill: #ffffff;
        stroke: red;
        }
    </style>
@endsection

@section('content')

    <section class="red-express__home home_blog" style="z-index: 0;">
        <div class="container-fluid px-0 d-flex position-relative first-block mb-5 mb-md-0"  style="padding-top: 237px">
            <div class="red-express__img">
                {{-- <img src="/img/home/big-green-line-left.png" class="green-left d-none d-lg-block" alt="">
                <img src="/img/home/big-pink-line-left.png" class="pink-left d-none d-lg-block" alt=""> --}}
                <img src="/img/home/car-big.png" class="car-big d-none d-lg-block" alt="">
                <img src="/img/home/car.png" class="car d-block d-lg-none" alt="">
                {{-- <img src="/img/home/big-green-line-right.png" class="green-right d-none d-lg-block" alt="">
                <img src="/img/home/small-pink-line-right.png" class="pink-right d-none d-lg-block" alt=""> --}}
            </div>
            <div class="container">
                <div class="row h-lg-75">
                    <div class="col-12 col-lg-7 px-lg-0 d-flex align-items-center">
                        <div class="red-express__look-cargo">
                            <h1>
                                RED Express - Перевозка сборных грузов
                            </h1>

                            @include('components.buttons.btn_search',
                                ['text'=>'Отследить мой груз', 'class'=>'search-cargo'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container px-lg-0">
            @include('pages.home.about_compony')

            @include('pages.home.price')

            @include('pages.home.representative_map')

            @include('pages.home.news')

            @include('pages.home.questions')
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        let homeClass = document.querySelector('.red-express__home');
        let headerClass = document.querySelector('.red-express__header');
        let pos = 50;
        let deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width; //check device width

        if(deviceWidth > 991) {
            if(document.body.contains(headerClass)) {
                headerClass.classList.remove('top-0', 'left-0', 'bg-white');
                headerClass.classList.add('header-pos');
            }

            document.addEventListener('scroll', () => {
                if(window.scrollY >= pos) {
                    headerClass.classList.remove('header-pos');
                    headerClass.classList.add('top-0', 'left-0', 'bg-white');
                    return homeClass.classList.remove('home_blog');
                }
                if(window.scrollY < pos) {
                    headerClass.classList.remove('top-0', 'left-0', 'bg-white');
                    headerClass.classList.add('header-pos');
                    return homeClass.classList.add('home_blog');
                }
            })
        }

    </script>
@endsection


