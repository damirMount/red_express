@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <style>
        #MyRect {
        fill: #ffffff;
        stroke: red;
        }
        #first-section{
            background: url('img/1-section-bg.png') no-repeat center;
            background-size:contain;
        }
        #first-block-content{
            padding-top: 20%;
            padding-bottom: 35%;
        }
        @media  (max-width: 1150px){
            #first-block-content h1{
                font-size: 36px;
            }

        }
        @media  (max-width: 880px){
            #first-block-content h1{
                font-size: 30px;
            }

        }
        @media  (max-width: 660px){
            #first-block-content h1{
                font-size: 24px;
            }
            #first-block-content button.search-cargo{
                font-size: 14px;
                margin-top: 20px;
                padding: 12px 20px;
            }

        }
        @media  (max-width: 575px){
            #first-section{
                background: url('img/1-section-bg-mb.png') no-repeat center;
                background-size:contain;
            }
            #first-block-content{
                padding-top: 40%;
                padding-bottom: 80%;
            }
        }
        @media  (max-width: 425px){
            #first-section{
                background: url('img/1-section-bg-mb.png') no-repeat center;
                background-size:contain;
            }
            #first-block-content{
                padding-top: 30%;
                padding-bottom: 90%;
            }
        }
    </style>
@endsection

@section('content')

    <section id="first-section">
            <div class="container">
                <div class="row" id="first-block-content">
                    <div class="col-sm-7 col-12 d-flex align-items-center">
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
        {{--</div>--}}
    </section>

    <section class="mt-3">
        <div class="container">
            @include('pages.home.about_compony')

            @include('pages.home.price')

            @include('pages.home.representative_map')
        </div>
    </section>

@endsection
