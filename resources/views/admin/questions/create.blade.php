@extends('admin.layouts.app')

@section('content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 col-md-10 pb-5 px-5">
                <form action="{{ route('admin.questions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление вопроса</p>
                    </div>
                    <div class="form-group">
                        <label for="title_input">Вопрос:<span class="text-danger">*</span></label>
                        <input id="title_input" type="text" class="form-control" name="question" required>
                    </div>
                    <div class="form-group">
                        <label for="desc_textarea">Ответ:<span class="text-danger">*</span></label>
                        <textarea id="desc_textarea" class="form-control" name="answer"
                                  required></textarea>
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
