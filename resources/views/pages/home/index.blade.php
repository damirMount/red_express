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

    <section>
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
                @include('pages.home.about_compony')
            </div>
        </div>
    </section>

@endsection
