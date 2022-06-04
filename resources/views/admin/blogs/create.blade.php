@extends('admin.layouts.app')
@section('content')
    <form action="{{ route('admin.users.update', $user) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h5 class="text-center font-weight-bold">Редактирование пользователя</h5>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="first-name">Имя:</label>
                    <input type="text" id="first-name" class="form-control" name="name"
                           value="{{ old('name', $user->first_name) }}"
                           readonly>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="last-name">Фамилия:</label>
                    <input type="text" id="last-name" class="form-control" name="email"
                           value="{{ old('email', $user->last_name) }}"
                           readonly>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="region-select">Регион:</label>
                    <select class="form-control" name="region_id" id="region-select">
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}"{{ $user->region_id==$region->id?'selected':'' }}>{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="surveys_select">Опросы:</label>
                    <select id="surveys_select" name="surveys[]" class="form-control" multiple>
                        @foreach($surveys as $survey)
                            <option value="{{ $survey->id }}" {{  $user->surveys->find($survey->id) ? 'selected' : '' }}>{{ $survey->translations->first()->text  }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">{{ __('Изменить') }}</button>
                <button id="delete_button" type="button" class="btn btn-danger">{{ __('Удалить') }}</button>
            </div>
        </div>
    </form>
    <form id="delete-form" method="POST"
          action="{{ route('admin.users.destroy', $user) }}">
        @csrf
        @method('DELETE')
    </form>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"
         id="confirm-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Удаление</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Вы дествительно хотите удалить пользователя?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="modal-btn-yes">Да</button>
                    <button type="button" class="btn btn-primary" id="modal-btn-no">Нет</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')

@endpush
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#surveys_select').select2();
        });
    </script>
    <script>
        const modalConfirm = function (callback) {
            $("#delete_button").on("click", function () {
                $("#confirm-modal").modal('show');
            });
            $("#modal-btn-yes").on("click", function () {
                callback(true);
                $("#confirm-modal").modal('hide');
            });
            $("#modal-btn-no").on("click", function () {
                callback(false);
                $("#confirm-modal").modal('hide');
            });
        };
        modalConfirm(function (confirm) {
            if (confirm) {
                $('#delete-form').submit();
            }
        });
    </script>
@endpush
