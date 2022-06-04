@extends('admin.layouts.app')

@section('content')
    <section>
        <div class="container bg-light first-wrapper">
            <div class="row">
                <div class="col-12 d-flex">
                    <a class="btn btn-primary ml-1" href="{{ route('admin.blogs.edit', $blog) }}" ><i class="fas fa-pen"></i></a>
                    {{--@if($initiative->mod_id == null)--}}
                    {{--<button class="btn btn-primary ml-1 {{ $initiative->is_active == true ? 'd-none' : '' }}" id="active-btn" data-dismiss="alert" onclick="agree({{ $initiative->id }})"><i class="far fa-thumbs-up"></i>--}}
                    {{--Активировать--}}
                    {{--</button>--}}

                    {{--@else--}}
                    {{--<a class="btn btn-primary ml-1" href="{{ route('admin.edit_mod', $initiative->mod_id) }}" >Проверить</a>--}}
                    {{--@endif--}}

                    <form id="form-{{ $blog->id }}" class="pl-3" name="delete-form" method="POST"
                          action="{{ route('admin.blogs.destroy', $blog) }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteConfirm(this)" data-id="{{ $blog->id }}" title="{{ __('Удалить') }}"
                                class="btn n btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>

                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header text-center h4 bg-red-table">
                                    Информация об инициативе
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        {{--<table class="table table-responsive">--}}
                                        {{--<thead></thead>--}}
                                        {{--<tbody>--}}
                                        {{--<tr>--}}
                                        {{--<th class="h6 font-weight-bold border-top-0">Название инициативы pgs:</th>--}}
                                        {{--<th class="h6   border-top-0">{{ $initiative->name }}</th>--}}
                                        {{--<th class="h6 font-weight-bold border-top-0">Количество вовлеченных фермеров:</th>--}}
                                        {{--<th class="h6   border-top-0">{{ $initiative->q_involved_farmers }}</th>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                        {{--<th class="h6 font-weight-bold">Количество сертифицированных фермеров</th>--}}
                                        {{--<th class="h6">{{ $initiative->q_certified_farmers }}</th>--}}
                                        {{--<th class="h6 font-weight-bold">Применяемый органический стандарт</th>--}}
                                        {{--<th class="h6">{{ $initiative->organic_standard }}</th>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                        {{--<th class="h6 font-weight-bold">Описание </th>--}}
                                        {{--<th class="h6">{{ $initiative->desc }}</th>--}}
                                        {{--<th class="h6 font-weight-bold">Статус инициативы pgs</th>--}}
                                        {{--<th class="h6">{{ $initiative->status_id }}</th>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                        {{--<th class="h6 font-weight-bold">Страна:</th>--}}
                                        {{--<th class="h6">{{ $initiative->country->name }}</th>--}}
                                        {{--<th class="h6 font-weight-bold">Город:</th>--}}
                                        {{--<th class="h6">{{ $initiative->city }}</th>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                        {{--<th class="h6 font-weight-bold">Адрес:</th>--}}
                                        {{--<th class="h6">{{$initiative->address}}</th>--}}
                                        {{--<th class="h6 font-weight-bold">Веб страница</th>--}}
                                        {{--<th class="h6">{{ $initiative->web_link }}</th>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                        {{--<th class="h6 font-weight-bold">Контактный номер:</th>--}}
                                        {{--<th class="h6">{{ $initiative->phone }}</th>--}}
                                        {{--<th class="h6 font-weight-bold">ЭЛЕКТРОННАЯ ПОЧТА</th>--}}
                                        {{--<th class="h6">{{ $initiative->email }}</th>--}}
                                        {{--</tr>--}}
                                        {{--</tbody>--}}
                                        {{--</table>--}}
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="card">
                        <div class="card-header text-center h4 bg-red-table">
                            Информация о представителе
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <table class="table table-responsive">
                                    <thead></thead>
                                    <tbody>
                                    {{--<tr>--}}
                                    {{--<th class="h6 font-weight-bold border-top-0">ФИО:</th>--}}
                                    {{--<th class="h6   border-top-0">{{ $initiative->representative_name }}</th>--}}

                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th class="h6 font-weight-bold border-top-0">электронная почта:</th>--}}
                                    {{--<th class="h6   border-top-0">{{ $initiative->representative_email }}</th>--}}

                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th class="h6 font-weight-bold border-top-0">контактный номер:</th>--}}
                                    {{--<th class="h6   border-top-0">{{ $initiative->representative_phone }}</th>--}}
                                    {{--</tr>--}}
                                    </tbody>
                                </table>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div id="map" style="width: 500px; height: 344px;"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')

    <style>
    </style>
@endpush

@push('scripts')
    <script>
        function deleteConfirm(me) {
            if (confirm('Вы дествительно хотите удалить ?')) {
                let model_id = me.dataset.id;
                $('form#form-' + model_id).submit();
            }
        }
    </script>
@endpush
