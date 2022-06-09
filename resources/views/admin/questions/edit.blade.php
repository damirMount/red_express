@extends('admin.layouts.app')

@section('content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row p-3">
            <div class="col-12 col-sm-12 col-lg-12 col-md-10">
                <form action="{{ route('admin.questions.update', $question) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Редактирование объекта</p>
                    </div>
                    <div class="form-group">
                        <label for="title_input">Вопрос:<span class="text-danger">*</span></label>
                        <input id="title_input" type="text" class="form-control" name="question" value="{{ $question->question }}" required>
                    </div>
                    <div class="form-group">
                        <label for="desc_textarea">Ответ:<span class="text-danger">*</span></label>
                        <textarea id="desc_textarea" class="form-control" name="answer"
                                  required>{{ $question->answer }}</textarea>
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

