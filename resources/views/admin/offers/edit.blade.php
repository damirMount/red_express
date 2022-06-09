@extends('admin.layouts.app')

@section('content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row p-3">
            <div class="col-12 col-sm-12 col-lg-12 col-md-10">
                <form action="{{ route('admin.questions.update', $offer) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование объекта</p>
                    </div>
                    <div class="form-group">
                        <label for="name_field">Город:<span class="text-danger">*</span></label>
                        <input id="name_field" type="text" class="form-control" name="country" value="{{ $offer->country }}" required>
                    </div>
                    <div class="form-group">
                        <label for="inn_field">За 1 кг:<span class="text-danger">*</span></label>
                        <input id="inn_field" type="text" class="form-control" name="kg_field" value="{{ $offer->kg_field }}" required>
                    </div>
                    <div class="form-group">
                        <label for="inn_field">За 1 кубометр:<span class="text-danger">*</span></label>
                        <input id="inn_field" type="text" class="form-control" name="cbm_field" value="{{ $offer->cbm_field }}" required>
                    </div>

                    <button type="submit" title="{{ __('Изменить') }}"
                            class="btn n btn-success">{{ __('Изменить') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
@endpush

