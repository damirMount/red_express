@extends('admin.layouts.app')

@section('content')
    <div class="p-3 bg-form card-body-admin">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 col-md-10 pb-5 px-5">
                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <p class="font-weight-bold h2">Добавление новости</p>
                    </div>
                    <div class="form-group">
                        <label for="title_input">Заголовок:<span class="text-danger">*</span></label>
                        <input id="title_input" type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="desc_textarea">Описание:<span class="text-danger">*</span></label>
                        <textarea id="desc_textarea" class="form-control" name="desc"
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="banner_input">Баннер:<span class="text-danger">*</span></label>
                        <input id="banner_input" type="file" class="form-control" name="image" accept="image/*"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="content_textarea">Контент:<span class="text-danger">*</span></label>
                        <textarea id="content_textarea" type="text" class="form-control tinymce-editor"
                                  name="content"></textarea>
                    </div>
                    <button type="submit" title="{{ __('Добавить') }}"
                            class="btn btn-success">{{ __('Добавить') }}</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/v3r71nl7rlj94mvjubwapzf91fnk5xaia0oxkl1jq66xux3i/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 500,
            menubar: true,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help | uploadimage',
            paste_data_images: true,
            images_upload_handler: function (blobInfo, success, failure) {
                success("data:" + blobInfo.blob().type + ";base64," + blobInfo.base64());
            },
            // content_css: '//www.tiny.cloud/css/codepen.min.css',
        });
    </script>
@endpush
