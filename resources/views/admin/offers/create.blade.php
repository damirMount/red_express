@extends('admin.layouts.app')

@section('content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 col-md-10 pb-5 px-5">
                <form action="{{ route('admin.offers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление тарифа</p>
                    </div>
                    <div class="form-group">
                        <label for="title_input">Страна:<span class="text-danger">*</span></label>
                        <input id="title_input" type="text" class="form-control" name="country" required>
                    </div>
                    <div class="form-group">
                        <label for="desc_textarea">За 1 кг:<span class="text-danger">*</span></label>
                        <textarea id="desc_textarea" class="form-control" name="kg_field"
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="banner_input">За 1 кубометр:<span class="text-danger">*</span></label>
                        <input id="banner_input" type="text" class="form-control" name="cbm_field" accept="image/*"
                               required>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn n btn-success">{{ __('Добавить') }}</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/v3r71nl7rlj94mvjubwapzf91fnk5xaia0oxkl1jq66xux3i/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
@endpush
