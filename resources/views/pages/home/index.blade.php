@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <style>
        #MyRect {
        fill: #ffffff;
        stroke: red;
        }
    </style>
@endsection

@section('content')

    <section style="z-index: 0;">
        <div class="container-fluid px-0 d-flex position-relative first-block"  style="margin-top: 66px">
            <div class="red-express__img">
                <img src="/img/home/big-green-line-left.png" class="green-left" alt="">
                <img src="/img/home/big-pink-line-left.png" class="pink-left" alt="">
                <img src="/img/home/bus.png" class="bus" alt="">
                <img src="/img/home/bus-logo.png" class="bus-logo" alt="">
                <img src="/img/home/big-green-line-right.png" class="green-right" alt="">
                <img src="/img/home/small-pink-line-right.png" class="pink-right" alt="">
            </div>
            <div class="container">
                <div class="row h-75">
                    <div class="col-12 col-lg-7 px-lg-0 v d-flex align-items-center">
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
        <div class="container">
            @include('pages.home.about_compony')

            @include('pages.home.price')

            @include('pages.home.representative_map')
        </div>
    </section>

@endsection
